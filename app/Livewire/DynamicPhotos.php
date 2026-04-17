<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Fotos;

class DynamicPhotos extends Component
{
    


    public function render()
    {

        return view('livewire.dynamic-photos', [
            'fotos' => Fotos::where('seccion', 'qr')->get()
        ]);
    }
}
