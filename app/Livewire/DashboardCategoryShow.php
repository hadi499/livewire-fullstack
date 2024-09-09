<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\On;

class DashboardCategoryShow extends Component
{
    public $id;
    public $name;
    public $slug;
    public Category $category;


    public $modalCategoryShow = false;


    #[On('dispatch-category-table-detail')]
    public function set_category($id)
    {

        $category = Category::findOrFail($id);
        $this->id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->modalCategoryShow = true;
    }
    public function render()
    {
        return view('livewire.dashboard-category-show');
    }
}
