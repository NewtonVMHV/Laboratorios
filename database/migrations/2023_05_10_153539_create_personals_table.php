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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('RFC',13);
            $table->string('Curp',18);
            $table->string('Nombre',25);
            $table->string('Apellidos',30);
            $table->date('F_Nacimiento');
            $table->string('Telefono',10);
            $table->string('Correo',50);
            $table->string('Escolaridad',25);
            $table->string('Estudios',45);
            $table->boolean('Status');
            $table->string('Carrera',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
