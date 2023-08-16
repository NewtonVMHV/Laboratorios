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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('Matricula',9);
            $table->string('Curp',18);
            $table->string('Nombre',25);
            $table->string('A_Paterno',15);
            $table->string('A_Materno',15);
            $table->date('F_Nacimiento');
            $table->string('Telefono',10);
            $table->string('Correo',50);
            $table->boolean('Estatus');
            $table->string('Carrera',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
