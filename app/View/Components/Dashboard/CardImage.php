<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardImage extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $title,
        public $caption,
        public $image = null,
    ) {}


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.card-image');
    }
}
