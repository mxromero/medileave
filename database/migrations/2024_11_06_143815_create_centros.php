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
        Schema::create('centro', function (Blueprint $table) {
            $table->integer('idcentros')->primary();
            $table->string('nombreCentro', 45);
            $table->integer('subCentro')->nullable();
            $table->integer('idCentroPadre')->nullable();
            $table->string('ubicacionCentro', 255)->nullable();
            $table->string('comuna', 45)->nullable();
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();
            $table->integer('fk_userID_delete')->nullable();
            $table->integer('Region_idregion');
            $table->integer('Empleado_idFicha')->nullable();
            $table->integer('Empleado_Cargo_idCargo')->nullable();
            $table->integer('Empleado_Sector_idSector')->nullable();
            $table->integer('Empleado_Sector_centros_idcentros')->nullable();

            $table->index(['Region_idregion'], 'fk_Centros_Region1_idx');
            $table->index(['Empleado_idFicha', 'Empleado_Cargo_idCargo', 'Empleado_Sector_idSector', 'Empleado_Sector_centros_idcentros'], 'fk_Centro_Empleado1_idx');
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
