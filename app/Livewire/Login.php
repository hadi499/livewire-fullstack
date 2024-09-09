<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Title;

#[Title('Login')]
class Login extends Component
{
    #[Rule('required', 'email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';


    public function login()
    {

        if (Auth::attempt($this->validate())) {
            activity()->causedBy(Auth::user())->log('login');
            return redirect()->route('home');
        } else {
            session()->flash('message', 'The provided credentials do not match.');
        }
        // throw ValidationException::withMessages([
        //     'email' => 'the provided credentials do not match.'
        // ]);

    }
    public function render()
    {
        return view('livewire.login');
    }
}
