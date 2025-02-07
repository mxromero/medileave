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
            $table->id('idtiempos');
            $table->integer('horasHistoricas');
            $table->integer('horasActuales');
            $table->integer('horasTomadas');
            $table->integer('horasReintegradas');
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();
            $table->unsignedBigInteger('Solicitudes_idPermiso');
            $table->unsignedBigInteger('Solicitudes_fichaUsuario_idFicha');
            $table->unsignedBigInteger('Solicitudes_fichaUsuario_Cargo_idCargo');
            $table->unsignedBigInteger('Solicitudes_fichaUsuario_Sector_idSector');
            $table->unsignedBigInteger('Solicitudes_fichaUsuario_Sector_centros_idcentros');

            // Definición de claves foráneas
            //$table->foreign('Solicitudes_idPermiso')->references('idPermiso')->on('solicitudes');
            //$table->foreign('Solicitudes_fichaUsuario_idFicha')->references('idFicha')->on('empleados');
            //$table->foreign('Solicitudes_fichaUsuario_Cargo_idCargo')->references('idCargo')->on('cargos');
            //$table->foreign('Solicitudes_fichaUsuario_Sector_idSector')->references('idSector')->on('sectores');
            //$table->foreign('Solicitudes_fichaUsuario_Sector_centros_idcentros')->references('idcentros')->on('centros');
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
