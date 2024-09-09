<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Profile extends Component
{
    #[On('dispatch-profile-edit')]
    public function render()
    {
        return view('livewire.profile');
    }
}
