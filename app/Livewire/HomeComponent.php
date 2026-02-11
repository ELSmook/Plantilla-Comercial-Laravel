<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Fotos;


class HomeComponent extends Component
{
    public $version = 4;

    public function render()
    {
        return view('livewire.home-component');
    }

    
}