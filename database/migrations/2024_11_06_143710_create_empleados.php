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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('idFicha');
            $table->string('rut', 9)->unique();
            $table->string('Nombre', 45); // Ajustado a singular según el diagrama EER
            $table->string('apellidoPaterno', 45);
            $table->string('apellidoMaterno', 45);
            $table->date('Fecha_nacimiento');
            $table->date('Fecha_ingreso');
            $table->string('calidad', 10);
            $table->string('sexo', 1);
            $table->string('nacionalidad', 45);
            $table->string('categoria', 45);
            $table->string('nivel', 2);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('sector_id')->constrained('sector', 'idSector')->onDelete('cascade');
            $table->foreignId('cargo_id')->constrained('cargo', 'idCargo')->onDelete('cascade');
            $table->foreignId('tipo_permiso_id')->constrained('tipo_permisos', 'idtipoPermisos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');

    }
};
