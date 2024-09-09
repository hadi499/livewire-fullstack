<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;
use Livewire\Attributes\On;

class NoteDestroy extends Component
{
    public $title;
    public $id;

    public $modalNoteDestroy = false;

    #[On('dispatch-note-table-delete')]
    public function set_note($id, $title)
    {
        $this->id = $id;
        $this->title = $title;
        $this->modalNoteDestroy = true;
    }

    public function del()
    {
        Note::destroy($this->id);
        $this->dispatch('notify', title: 'success', message: 'Note berhasil dihapus');

        $this->modalNoteDestroy = false;
        $this->dispatch('dispatch-note-destroy')->to(NoteIndex::class);
    }

    public function render()
    {
        return view('livewire.note-destroy');
    }
}
