<?php

namespace App\Livewire;

use Livewire\Component;

class CarouselCard extends Component
{
    public $images = [
        'jelly.png',
        'jelly.png',
        'jelly.png',
        'jelly.png',
    ];
    
    public function render()
    {
        return view('livewire.carousel-card');
    }
}
