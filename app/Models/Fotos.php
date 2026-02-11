<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    use HasFactory;

    protected $table= 'fotos';

    protected $fillable = [
        'imagen','seccion',
    ];

    /*public function departamento() {
        return $this->belongsTo(Departamento::class, 'id_departamentos');
    }*/
}
