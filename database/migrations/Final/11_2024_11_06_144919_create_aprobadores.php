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
        Schema::create('aprobadores', function (Blueprint $table) {
            $table->id('idaprobadores');
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();
            $table->unsignedBigInteger('Empleado_idFicha');
            $table->unsignedBigInteger('Empleado_Cargo_idCargo');
            $table->unsignedBigInteger('Empleado_Sector_idSector');
            $table->unsignedBigInteger('Empleado_Sector_centros_idcentros');
            $table->unsignedBigInteger('Aprobacion_idAprobacion');
            $table->unsignedBigInteger('Aprobacion_Permisos_idPermiso');
            $table->unsignedBigInteger('Aprobacion_Permisos_fichaUsuario_idFicha');
            $table->unsignedBigInteger('Aprobacion_Permisos_fichaUsuario_Cargo_idCargo');
            $table->unsignedBigInteger('Aprobacion_Permisos_fichaUsuario_Sector_idSector');
            $table->unsignedBigInteger('Aprobacion_Permisos_fichaUsuario_Sector_centros_idcentros');

            // Definición de claves foráneas
           /* $table->foreign('Empleado_idFicha')->references('idFicha')->on('empleados');
            $table->foreign('Empleado_Cargo_idCargo')->references('idCargo')->on('cargos');
            $table->foreign('Empleado_Sector_idSector')->references('idSector')->on('sectores');
            $table->foreign('Empleado_Sector_centros_idcentros')->references('idcentros')->on('centros');
            $table->foreign('Aprobacion_idAprobacion')->references('idAprobacion')->on('aprobaciones');
            $table->foreign('Aprobacion_Permisos_idPermiso')->references('idPermiso')->on('solicitudes');
            $table->foreign('Aprobacion_Permisos_fichaUsuario_idFicha')->references('idFicha')->on('empleados');
            $table->foreign('Aprobacion_Permisos_fichaUsuario_Cargo_idCargo')->references('idCargo')->on('cargos');
            $table->foreign('Aprobacion_Permisos_fichaUsuario_Sector_idSector')->references('idSector')->on('sectores');
            $table->foreign('Aprobacion_Permisos_fichaUsuario_Sector_centros_idcentros')->references('idcentros')->on('centros');
            */
            // Índices
            //$table->index('Empleado_idFicha', 'fk_Aprobadores_Empleado1_idx');
            //$table->index('Aprobacion_idAprobacion', 'fk_Aprobadores_Aprobacion1_idx');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprobadores');
    }
};
