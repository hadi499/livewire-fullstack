<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class Home extends Component
{
    use WithPagination;

    #[Url()]
    public $search = '';

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->resetPage();
    }

    #[Computed()]
    public function posts()
    {
        return Post::where('title', 'like', "%{$this->search}%")
            ->latest()->paginate(6);
    }
    public function render()
    {
        return view('livewire.home');
    }
}
