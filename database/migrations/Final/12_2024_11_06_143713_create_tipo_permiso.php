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
        Schema::create('tipo_permisos', function (Blueprint $table) {
            $table->id('idtipoPermisos');
            $table->string('NombrePermiso', 255);
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();
            $table->unsignedBigInteger('Permisos_idPermiso');
            $table->unsignedBigInteger('Permisos_fichaUsuario_idFicha');
            $table->unsignedBigInteger('Permisos_fichaUsuario_Cargo_idCargo');
            $table->unsignedBigInteger('Permisos_fichaUsuario_Sector_idSector');
            $table->unsignedBigInteger('Permisos_fichaUsuario_Sector_centros_idcentros');

            // Definición de claves foráneas
            /*$table->foreign('Permisos_idPermiso')->references('idPermiso')->on('solicitudes');
            $table->foreign('Permisos_fichaUsuario_idFicha')->references('idFicha')->on('empleados');
            $table->foreign('Permisos_fichaUsuario_Cargo_idCargo')->references('idCargo')->on('cargos');
            $table->foreign('Permisos_fichaUsuario_Sector_idSector')->references('idSector')->on('sectores');
            $table->foreign('Permisos_fichaUsuario_Sector_centros_idcentros')->references('idcentros')->on('centros');

            // Índices
            $table->index('Permisos_idPermiso', 'fk_tipoPermisos_Permisos1_idx');
            */

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tipoPermiso');
    }
};
