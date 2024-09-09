<?php

namespace App\Livewire;


use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileEdit extends Component
{
    use WithFileUploads;

    public $modalProfileEdit = false;

    public $name;
    public $email;
    public $role;
    public $birthday;
    public $avatar;
    public $password;
    public $password_confirmation;
    public $userId;



    #[On('dispatch-profile-table-edit')]
    public function set_Profile($id)
    {
        $this->user = User::find($id);
        if ($this->user) {
            $this->userId = $this->user->id;
            $this->name = $this->user->name;
            $this->email = $this->user->email;
            $this->birthday = $this->user->birthday;
            $this->role = $this->user->role;
            $this->modalProfileEdit = true;
        }
    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->userId,
            // 'birth' => 'required',
            'birthday' => 'required',
            'avatar' => 'image|max:1024|nullable',
            'password' => 'nullable|min:3|confirmed',
            'password_confirmation' => 'same:password',
        ]);


        $user = Auth::user();
        $avatarPath = $user->avatar;
        // $birthDate = Carbon::createFromFormat('d/m/Y', $this->birth)->format('Y-m-d');

        if ($this->avatar) {
            // Hapus avatar lama jika ada
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }
            // Pindahkan avatar dari tmp ke direktori storage yang benar
            $avatarPath = $this->avatar->store('avatars', 'public');
        }

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'birthday' => $this->birthday,
            'avatar' => $avatarPath,
            'password' => $this->password ? Hash::make($this->password) : $user->password,

        ]);

        $this->dispatch('dispatch-profile-edit')->to(Profile::class);
        $this->modalProfileEdit = false;
    }




    public function render()
    {
        return view('livewire.profile-edit');
    }
}
