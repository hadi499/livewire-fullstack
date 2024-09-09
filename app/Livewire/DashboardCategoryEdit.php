<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\On;

class DashboardCategoryEdit extends Component
{
    public $modalCategoryEdit = false;
    public $category;
    public $name;
    public $slug;
    public $id;



    #[On('dispatch-category-table-edit')]
    public function set_category($id)
    {
        $this->category = Category::find($id);
        if ($this->category) {
            $this->id = $this->category->id;
            $this->name = $this->category->name;
            $this->slug = $this->category->slug;
            $this->modalCategoryEdit = true;
        }
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }


    protected $rules = [
        'name' => 'required',
        'slug' => 'required',

    ];

    public function edit()
    {
        $data = $this->validate();
        $this->category->update($data);
        $this->modalCategoryEdit = false;
        $this->dispatch('notify', title: 'success', message: 'category berhasil diedit');
        $this->dispatch('dispatch-category-edit')->to(DashboardCategoryIndex::class);
    }

    public function render()
    {
        return view('livewire.dashboard-category-edit');
    }
}
