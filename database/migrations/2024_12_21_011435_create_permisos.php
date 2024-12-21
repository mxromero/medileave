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
        Schema::create('permisos', function (Blueprint $table) {
            $table->integer('idPermiso')->primary();
            $table->string('dias', 2);
            $table->timestamp('fecha_desde');
            $table->timestamp('fecha_hasta');
            $table->string('motivo', 255);
            $table->string('tipo_permiso', 1);
            $table->string('status', 45);
            $table->timestamps();
            $table->integer('fichaUsuario_idFicha');
            $table->integer('fichaUsuario_Cargo_idCargo');
            $table->integer('fichaUsuario_Sector_idSector');
            $table->integer('fichaUsuario_Sector_centros_idcentros');

            $table->index(['fichaUsuario_idFicha', 'fichaUsuario_Cargo_idCargo', 'fichaUsuario_Sector_idSector', 'fichaUsuario_Sector_centros_idcentros'], 'fk_permisos_fichaUsuario1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos');
    }
};
