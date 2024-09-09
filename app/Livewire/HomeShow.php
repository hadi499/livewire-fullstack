<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class HomeShow extends Component
{
    public $post;
    public $slug;

    public function back()
    {
        return $this->redirect('/', navigate: true);
    }

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->post = Post::with('author')->where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.home-show');
    }
}
