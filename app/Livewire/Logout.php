<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();

        // Mengarahkan pengguna ke halaman login setelah logout
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.logout');
    }
}
