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
            $table->integer('idaprobadores')->primary();
            $table->integer('Empleado_idFicha');
            $table->integer('Empleado_Cargo_idCargo');
            $table->integer('Empleado_Sector_idSector');
            $table->integer('Empleado_Sector_centros_idcentros');
            $table->integer('Aparobacion_idAparobacion');
            $table->integer('Aparobacion_Permisos_idPermiso');
            $table->integer('Aparobacion_Permisos_fichaUsuario_idFicha');
            $table->integer('Aparobacion_Permisos_fichaUsuario_Cargo_idCargo');
            $table->integer('Aparobacion_Permisos_fichaUsuario_Sector_idSector');
            $table->integer('Aparobacion_Permisos_fichaUsuario_Sector_centros_idcentros');
            $table->timestamps();

            $table->primary([
                'idaprobadores', 'Empleado_idFicha', 'Empleado_Cargo_idCargo',
                'Empleado_Sector_idSector', 'Empleado_Sector_centros_idcentros',
                'Aparobacion_idAparobacion', 'Aparobacion_Permisos_idPermiso',
                'Aparobacion_Permisos_fichaUsuario_idFicha',
                'Aparobacion_Permisos_fichaUsuario_Cargo_idCargo',
                'Aparobacion_Permisos_fichaUsuario_Sector_idSector',
                'Aparobacion_Permisos_fichaUsuario_Sector_centros_idcentros'
            ]);

            $table->index(['Empleado_idFicha', 'Empleado_Cargo_idCargo', 'Empleado_Sector_idSector', 'Empleado_Sector_centros_idcentros'], 'fk_Aprobadores_Empleado1_idx');
            $table->index(['Aparobacion_idAparobacion', 'Aparobacion_Permisos_idPermiso', 'Aparobacion_Permisos_fichaUsuario_idFicha', 'Aparobacion_Permisos_fichaUsuario_Cargo_idCargo', 'Aparobacion_Permisos_fichaUsuario_Sector_idSector', 'Aparobacion_Permisos_fichaUsuario_Sector_centros_idcentros'], 'fk_Aprobadores_Aparobacion1_idx');

            $table->foreign(['Empleado_idFicha', 'Empleado_Cargo_idCargo', 'Empleado_Sector_idSector', 'Empleado_Sector_centros_idcentros'])
                  ->references(['idFicha', 'Cargo_idCargo', 'Sector_idSector', 'Sector_centros_idcentros'])
                  ->on('empleado')
                  ->onDelete('no action')
                  ->onUpdate('no action');

            $table->foreign(['Aparobacion_idAparobacion', 'Aparobacion_Permisos_idPermiso', 'Aparobacion_Permisos_fichaUsuario_idFicha', 'Aparobacion_Permisos_fichaUsuario_Cargo_idCargo', 'Aparobacion_Permisos_fichaUsuario_Sector_idSector', 'Aparobacion_Permisos_fichaUsuario_Sector_centros_idcentros'])
                  ->references(['idAparobacion', 'Permisos_idPermiso', 'Permisos_fichaUsuario_idFicha', 'Permisos_fichaUsuario_Cargo_idCargo', 'Permisos_fichaUsuario_Sector_idSector', 'Permisos_fichaUsuario_Sector_centros_idcentros'])
                  ->on('aprobacion')
                  ->onDelete('no action')
                  ->onUpdate('no action');
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
