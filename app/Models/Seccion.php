<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;


     // Nombre de la tabla que se conecta a este Modelo
    protected $table = 'secciones';
    // Nombres de las columnas que son modificables
    protected $fillable = [
         'nombre'
        ];
     
}
