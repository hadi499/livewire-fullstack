<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = [
        'title', // Kolom lain
        'user_id',
        'slug',
        'image',
        'body',  // Kolom lain

    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeWithCategory($query, string $category)
    {
        $query->whereHas('categories', function ($query) use ($category) {
            $query->where('slug', $category);
        });
    }

    public function getExcerpt()
    {
        return Str::limit(strip_tags($this->body), 25);
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        } else {
            return asset('images/noimage.jpg');
        }
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'post_like')->withTimestamps();
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($post) {
            if ($post->image) {
                Storage::delete($post->image);
            }
        });

        static::updating(function ($post) {
            if ($post->isDirty('image') && ($post->getOriginal('image') !== null)) {
                Storage::delete($post->getOriginal('image'));
            }
        });
    }
}
