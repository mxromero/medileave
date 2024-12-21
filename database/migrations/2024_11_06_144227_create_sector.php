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
        Schema::create('sector', function (Blueprint $table) {
            $table->integer('idSector')->primary();
            $table->string('CentroPadre', 255)->nullable();
            $table->string('NombreSector', 45);
            $table->timestamps();
            $table->integer('centros_idcentros');
            $table->integer('Empleado_idFicha')->nullable();
            $table->integer('Empleado_Cargo_idCargo')->nullable();
            $table->integer('Empleado_Sector_idSector')->nullable();
            $table->integer('Empleado_Sector_centros_idcentros')->nullable();

            $table->index(['centros_idcentros'], 'fk_Sector_centros_idx');
            $table->index(['Empleado_idFicha', 'Empleado_Cargo_idCargo', 'Empleado_Sector_idSector', 'Empleado_Sector_centros_idcentros'], 'fk_Sector_Empleado1_idx');
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
