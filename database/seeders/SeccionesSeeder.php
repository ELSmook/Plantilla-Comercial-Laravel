<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seccion;

class SeccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        Seccion::create([
            'nombre' => 'Cabecera'
        ]);

        Seccion::create([
            'nombre' => 'Quince'
        ]);

        Seccion::create([
            'nombre' => 'Casamiento'
        ]);

        Seccion::create([
            'nombre' => 'Otro tipo de evento'
        ]);

        Seccion::create([
            'nombre' => 'Ninguno'
        ]);

    }
}