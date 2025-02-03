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
            $table->bigIncrements('idaprobadores');

            // Campos de relación con empleados
            $table->bigInteger('Empleado_idFicha')->unsigned();
            $table->bigInteger('Empleado_Cargo_idCargo')->unsigned();
            $table->bigInteger('Empleado_Sector_idSector')->unsigned();
            $table->bigInteger('Empleado_Sector_centros_idcentros')->unsigned();

            // Campos de relación con aprobacion
            $table->bigInteger('Aprobacion_idAprobacion')->unsigned();
            $table->bigInteger('Aprobacion_Permisos_idPermiso')->unsigned();
            $table->bigInteger('Aprobacion_Permisos_fichaUsuario_idFicha')->unsigned();
            $table->bigInteger('Aprobacion_Permisos_fichaUsuario_Cargo_idCargo')->unsigned();
            $table->bigInteger('Aprobacion_Permisos_fichaUsuario_Sector_idSector')->unsigned();
            $table->bigInteger('Aprobacion_Permisos_fichaUsuario_Sector_centros_idcentros')->unsigned();

            $table->timestamps();

            // Índices
            $table->index(['Empleado_idFicha', 'Empleado_Cargo_idCargo', 'Empleado_Sector_idSector', 'Empleado_Sector_centros_idcentros'], 'fk_Aprobadores_Empleado1_idx');
            $table->index(['Aprobacion_idAprobacion', 'Aprobacion_Permisos_idPermiso', 'Aprobacion_Permisos_fichaUsuario_idFicha', 'Aprobacion_Permisos_fichaUsuario_Cargo_idCargo', 'Aprobacion_Permisos_fichaUsuario_Sector_idSector', 'Aprobacion_Permisos_fichaUsuario_Sector_centros_idcentros'], 'fk_Aprobadores_Aprobacion1_idx');

            // Claves foráneas corregidas



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
