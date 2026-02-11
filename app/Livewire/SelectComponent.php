<?php

namespace App\Livewire;
//namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Fotos;
use App\Models\Seccion;

class SelectComponent extends Component
{
    public $saludo = "hola";
    public $prueba;
    public $foto; 
    public $secciones; 
    public $seccionSeleccionada;

    public function mount(Fotos $foto) { 
        $this->foto = $foto;
        
        $this->secciones = Seccion::all(); 
        $this->seccionSeleccionada = $foto->seccion; 
    } 

    public function Cambiar($value) { 
        // Actualiza en la base de datos dinámicamente 
        
        if ($value === '') {
            return; 
        }

        $this->seccionSeleccionada = $value;
        $this->foto->seccion = $value; 
        $this->foto->save();
        session()->flash('message', 'Sección actualizada correctamente.');
    }

    public $saludo1 = "hola a todos"; 


    public function Cambio($value) {

        $this->saludo1= $value;
    }
    
    public function render()
    {
        return view('livewire.select-component');
    }
}
