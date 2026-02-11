<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
       Schema::create('fotos', function(Blueprint $table){
            $table->id();
            $table->string('imagen', 100); // Le damos 100 caractéres
            $table->text('seccion')->nullable();

            // Primero creamos el atributo que tiene relación foranea con otra tabla
            //$table->unsignedBigInteger('id_departamentos')->nullable();

            // Y luego lo referenciamos con la tabla de donde proviene la id
            //$table->foreign('id_departamentos')->references('id')->on('departamentos');


            $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('fotos');
    }
};
