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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id('idPermiso'); // PRIMARY KEY

            $table->string('dias', 2)->nullable()->comment('Número de días con goce de sueldo');
            $table->timestamp('fecha_desde')->nullable();
            $table->timestamp('fecha_hasta')->nullable();
            $table->string('motivo', 255)->nullable();
            $table->string('tipo_permiso', 1)->nullable();
            $table->string('status', 45)->nullable();
            $table->timestamps();

            // Claves foráneas
            $table->unsignedBigInteger('fichaUsuario_idFicha');
            $table->unsignedBigInteger('fichaUsuario_Cargo_idCargo');
            $table->unsignedBigInteger('fichaUsuario_Sector_idSector');

            // Asegurar que las claves foráneas tengan índices
            $table->index(['fichaUsuario_idFicha', 'fichaUsuario_Cargo_idCargo', 'fichaUsuario_Sector_idSector'], 'idx_solicitudes_empleado');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
