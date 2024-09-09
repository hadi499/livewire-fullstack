<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostDestroy extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }


    public function destroy()
    {
        $this->post->delete();
        $this->confirmingDelete = false;
        $this->dispatch('dispatch-post-delete')->to(PostTable::class);
    }

    public function render()
    {
        return view('livewire.post-destroy');
    }
}
