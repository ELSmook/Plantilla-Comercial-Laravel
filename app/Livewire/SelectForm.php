<?php

namespace App\Livewire;

use Livewire\Component;

class SelectForm extends Component
{
    public $Seleccion= "Hola";
    public $mostrarInputFecha=false;
    public $mostrarInputPresupuesto;
    public $mostrarOtro;

    /*public function mount($Seleccion){

        $this->Seleccion= $Seleccion;

    }*/

    public function CambiarInput($value){

        $this->Seleccion= $value;

    }

    public function render()
    {
        return view('livewire.select-form');
    }
}
