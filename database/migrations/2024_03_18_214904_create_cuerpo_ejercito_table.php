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
        Schema::create('cuerpo_ejercitos', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuerpo_ejercitos');
    }
};
//debido a que se uso dos nombres para evitar problemas se cambio desde la base de datos el nombre de la columna
//a la que se pedia por defecto ya que lo creo como cuerpos_ejercitos pero pedua cuerpo_ejercitos para  funcionar.
