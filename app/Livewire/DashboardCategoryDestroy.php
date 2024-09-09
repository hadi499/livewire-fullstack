<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\On;

class DashboardCategoryDestroy extends Component
{
    public $name;
    public $id;

    public $modalCategoryDestroy = false;

    #[On('dispatch-category-table-delete')]
    public function set_post($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->modalCategoryDestroy = true;
    }

    public function del()
    {
        Category::destroy($this->id);
        $this->dispatch('notify', title: 'success', message: 'category berhasil dihapus');

        $this->modalCategoryDestroy = false;
        $this->dispatch('dispatch-category-destroy')->to(DashboardCategoryIndex::class);
    }

    public function render()
    {
        return view('livewire.dashboard-category-destroy');
    }
}
