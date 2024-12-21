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
        Schema::create('tiempos', function (Blueprint $table) {
            $table->integer('idtiempos')->primary();
            $table->integer('horasHistoricas');
            $table->integer('horasActuales');
            $table->integer('horasTomadas');
            $table->integer('horasReintegradas');
            $table->timestamps();
            $table->integer('Solicitudes_idPermiso');
            $table->integer('Solicitudes_fichaUsuario_idFicha');
            $table->integer('Solicitudes_fichaUsuario_Cargo_idCargo');
            $table->integer('Solicitudes_fichaUsuario_Sector_idSector');
            $table->integer('Solicitudes_fichaUsuario_Sector_centros_idcentros');

            $table->index(['Solicitudes_idPermiso', 'Solicitudes_fichaUsuario_idFicha', 'Solicitudes_fichaUsuario_Cargo_idCargo', 'Solicitudes_fichaUsuario_Sector_idSector', 'Solicitudes_fichaUsuario_Sector_centros_idcentros'], 'fk_tiempos_solicitudes1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiempos');
    }
};
