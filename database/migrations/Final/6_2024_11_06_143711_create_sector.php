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
        Schema::create('sectores', function (Blueprint $table) {
            $table->id('idSector');
            $table->string('CentroPadre', 255);
            $table->string('NombreSector', 45);
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();
            $table->unsignedBigInteger('centros_idcentros');
            $table->unsignedBigInteger('Empleado_idFicha');
            $table->unsignedBigInteger('Empleado_Cargo_idCargo');
            $table->unsignedBigInteger('Empleado_Sector_idSector');
            $table->unsignedBigInteger('Empleado_Sector_centros_idcentros');
            $table->unsignedBigInteger('Reloj_idReloj');

            // Definición de claves foráneas
            //$table->foreign('centros_idcentros')->references('idcentros')->on('centros');
            //$table->foreign('Empleado_idFicha')->references('idFicha')->on('empleados');
            //$table->foreign('Empleado_Cargo_idCargo')->references('idCargo')->on('cargos');
            //$table->foreign('Empleado_Sector_idSector')->references('idSector')->on('sectores');
            //$table->foreign('Reloj_idReloj')->references('idReloj')->on('relojes');

            // Índices
            //$table->index('centros_idcentros', 'idx_sectores_centros');
            //$table->index('Empleado_idFicha', 'idx_sectores_empleado');
            //$table->index('Reloj_idReloj', 'idx_sectores_reloj');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sector');
    }
};
