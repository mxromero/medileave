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
            $table->string('rut', 45);
            $table->string('apellidoPaterno', 45);
            $table->string('apellidoMaterno', 45);
            $table->string('Nombre', 45);
            $table->date('Fecha_nacimiento');
            $table->date('Fecha_ingreso');
            $table->string('calidad', 45);
            $table->string('sexo', 45);
            $table->string('nacionalidad', 45);
            $table->string('categoria', 45);
            $table->string('nivel', 45);
            $table->string('correo', 45);
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();

            // Índices
            //$table->index('idFicha', 'fk_fichaUsuario_Cargo1_idx');
            //$table->index('idFicha', 'fk_fichaUsuario_Sector1_idx');
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
