<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;

class DashboardCategoryCreate extends Component
{
    public $name;
    public $slug;
    public $modalCategoryCreate = false;

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }


    protected $rules = [
        'name' => 'required',
        'slug' => 'required',
    ];

    public function store()
    {
        $validatedData = $this->validate();
        Category::create($validatedData);
        $this->modalCategoryCreate = false;
        $this->dispatch('notify', title: 'success', message: 'category berhasil dibuat');
        $this->dispatch('dispatch-category-create')->to(DashboardCategoryIndex::class);
    }

    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.dashboard-category-create');
    }
}
