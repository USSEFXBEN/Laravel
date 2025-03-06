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
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->longText('instrucciones');
            $table->integer('tiempo_cocinado')->nullable();
            $table->string('dificultad')->default('Fácil');
            $table->unsignedBigInteger('categoria_id');  
            //Indicamos que dicho campo es una foreign key
            $table->foreign('categoria_id')->references('id')->on('categorias')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recetas');
    }
};
