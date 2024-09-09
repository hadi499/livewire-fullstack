<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\On;

class NoteEdit extends Component
{
    public $modalNoteEdit = false;
    public $note;
    public $title;
    public $slug;
    public $body;
    public $id;



    #[On('dispatch-note-table-edit')]
    public function set_notes($id)
    {
        $this->note = Note::find($id);

        if ($this->note) {
            $this->id = $this->note->id;
            $this->title = $this->note->title;
            $this->body = $this->note->body;
            $this->slug = $this->note->slug;
            $this->modalNoteEdit = true;
        }
    }

    public function updatedTitle($value)
    {
        $this->slug = Str::slug($value);
    }

    protected $rules = [
        'title' => 'required',
        'slug' => 'required',
        'body' => 'required',

    ];

    public function edit()
    {
        $data = $this->validate();
        $this->note->update($data);
        $this->modalNoteEdit = false;
        $this->dispatch('notify', title: 'success', message: 'Note berhasil diedit');
        $this->dispatch('dispatch-note-edit')->to(NoteIndex::class);
    }

    public function render()
    {
        return view('livewire.note-edit');
    }
}
