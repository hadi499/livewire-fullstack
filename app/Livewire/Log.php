<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Spatie\Activitylog\Models\Activity;

class Log extends Component
{

    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.log',  [
            'activities' => Activity::latest()->get()
        ]);
    }
}
