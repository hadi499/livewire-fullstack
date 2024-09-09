<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;
use Livewire\Attributes\On;

class NoteShow extends Component
{

    public $title;
    public $body;
    public $slug;
    public Note $note;


    public $modalNoteShow = false;


    #[On('dispatch-note-table-detail')]
    public function set_note($slug)
    {

        // $note = Note::findOrFail($id);
        $note = Note::where('slug', $slug)->firstOrFail();
        $this->title = $note->title;
        $this->slug = $note->slug;
        $this->body = $note->body;
        $this->modalNoteShow = true;
    }
    public function render()
    {
        return view('livewire.note-show');
    }
}
