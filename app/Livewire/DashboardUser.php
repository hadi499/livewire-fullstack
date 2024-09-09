<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;

class DashboardUser extends Component
{
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.dashboard-user', [
            'users' => User::all()
        ]);
    }
}
