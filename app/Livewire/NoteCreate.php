<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;
use Illuminate\Support\Str;

class NoteCreate extends Component
{
    public $title;
    public $slug;
    public $body;
    public $modalNoteCreate = false;

    public function updatedTitle($value)
    {
        $this->slug = Str::slug($value);
    }


    protected $rules = [
        'title' => 'required',
        'slug' => 'required|unique:notes',
        'body' => 'required',
    ];

    public function store()
    {
        $validatedData = $this->validate();
        Note::create($validatedData);
        $this->modalNoteCreate = false;
        $this->dispatch('notify', title: 'success', message: 'Note berhasil dibuat');
        $this->dispatch('dispatch-note-create')->to(NoteIndex::class);
    }

    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.note-create');
    }
}
