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
        Schema::create('registro__docentes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre',50);
            $table->date('Fecha');
            $table->integer('numAlumnos');
            $table->string('Actividad',20);
            $table->string('Carrera',100);
            $table->string('Materia',45);
            $table->string('Observaciones',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro__docentes');
    }
};
