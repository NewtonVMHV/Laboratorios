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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('ClaveMat',8);
            $table->string('Nivel_Escolar',25);
            $table->string('Nombre',30);
            $table->string('TipoMateria',40);
            $table->string('NombreAbreviado',25);
            $table->string('Carrera',100);
            $table->string('Departamento',45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
