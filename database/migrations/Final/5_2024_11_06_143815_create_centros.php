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
        Schema::create('centros', function (Blueprint $table) {
            $table->id('idcentros');
            $table->string('nombreCentro', 45);
            $table->integer('subCentro')->nullable();
            $table->integer('idCentroPadre')->nullable();
            $table->string('ubicacionCentro', 255);
            $table->string('comuna', 45);
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();
            $table->unsignedBigInteger('fk_userID_delete')->nullable();
            $table->unsignedBigInteger('Region_idregion');
            $table->unsignedBigInteger('Empleado_idFicha');
            $table->unsignedBigInteger('Empleado_Cargo_idCargo');
            $table->unsignedBigInteger('Empleado_Sector_idSector');
            $table->unsignedBigInteger('Empleado_Sector_centros_idcentros');

            // Definición de claves foráneas
            //$table->foreign('Region_idregion')->references('idregion')->on('regiones');
            //$table->foreign('Empleado_idFicha')->references('idFicha')->on('empleados');
            //$table->foreign('Empleado_Cargo_idCargo')->references('idCargo')->on('cargos');
            //$table->foreign('Empleado_Sector_idSector')->references('idSector')->on('sectores');
            //$table->foreign('Empleado_Sector_centros_idcentros')->references('idcentros')->on('centros');

            // Índices
            //$table->index('Region_idregion', 'idx_centros_region');
            //$table->index('Empleado_idFicha', 'idx_centros_empleado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centros');
    }
};
