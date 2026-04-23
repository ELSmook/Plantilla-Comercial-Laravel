<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Fotos;

class DynamicPhotos extends Component
{
    public $fotosQR;
    public $intervalo = 4000; // tiempo por imagen en ms

    public function mount()
    {
        $this->fotosQR = Fotos::latest()->take(10)->get();
    }    


    public function render()
    {
        $totalSegundos = ceil(($this->intervalo * $this->fotosQR->count()) / 1000) + 2; 

        return view('livewire.dynamic-photos', [
            'fotos' => Fotos::where('seccion', 'qr')->get(),
            'pollTime' => $totalSegundos,
        ]);
    }
}
