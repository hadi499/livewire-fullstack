<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $avatar;
    public $birthday;
    public $role = 'staff'; // default role

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email',
        'password' => 'required|string|min:3',
        'password_confirmation' => 'required|same:password',
        'role' => 'required',
        'birthday' => 'required|date'
    ];

    public function register()
    {
        $this->validate();
        $avatarPath = null;
        if ($this->avatar) {
            // Pindahkan avatar dari tmp ke direktori storage yang benar
            $avatarPath = $this->avatar->store('avatars', 'public');
        }

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->role,
            'birthday' => $this->birthday,
            'avatar' => $avatarPath,
        ]);

        Auth::login($user);

        session()->flash('message', 'User registered successfully!');
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.create-user');
    }
}
