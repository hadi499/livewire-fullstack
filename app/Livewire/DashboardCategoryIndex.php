<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Attributes\Layout;

class DashboardCategoryIndex extends Component
{
    #[Layout('components.layouts.dashboard')]
    #[On('dispatch-category-create')]
    #[On('dispatch-category-destroy')]
    #[On('dispatch-category-edit')]
    public function render()
    {
        return view('livewire.dashboard-category-index', [
            'categories' => Category::all()
        ]);
    }
}
