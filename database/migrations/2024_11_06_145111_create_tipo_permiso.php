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
            $table->integer('idtipoPermisos')->primary();
            $table->string('NombrePermiso', 255);
            $table->timestamps();
            $table->integer('Permisos_idPermiso');
            $table->integer('Permisos_fichaUsuario_idFicha');
            $table->integer('Permisos_fichaUsuario_Cargo_idCargo');
            $table->integer('Permisos_fichaUsuario_Sector_idSector');
            $table->integer('Permisos_fichaUsuario_Sector_centros_idcentros');

            $table->index(['Permisos_idPermiso', 'Permisos_fichaUsuario_idFicha', 'Permisos_fichaUsuario_Cargo_idCargo', 'Permisos_fichaUsuario_Sector_idSector', 'Permisos_fichaUsuario_Sector_centros_idcentros'], 'fk_tipoPermisos_Permisos1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipoPermiso');
    }
};
