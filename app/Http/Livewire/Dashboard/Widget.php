<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

class Widget extends Component
{
    public $title;
    public $value;
    public $percentageChanges;
    public $icon;

    #[Title('Create Post')]
    public function render()
    {
        return view('livewire.dashboard.widget');
    }
}
