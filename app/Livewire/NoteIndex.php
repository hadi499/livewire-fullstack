<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Note')]
class NoteIndex extends Component
{
    #[On('dispatch-note-create')]
    #[On('dispatch-note-edit')]
    #[On('dispatch-note-destroy')]
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.note-index', [
            'notes' => Note::all()
        ]);
    }
}
