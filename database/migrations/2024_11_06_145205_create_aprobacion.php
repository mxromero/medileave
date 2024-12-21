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
        Schema::create('aprobacion', function (Blueprint $table) {
            $table->integer('idAparobacion')->primary();
            $table->timestamp('fechaAprobacion');
            $table->string('comentario', 255)->nullable();
            $table->string('status', 45);
            $table->integer('Permisos_idPermiso');
            $table->integer('Permisos_fichaUsuario_idFicha');
            $table->integer('Permisos_fichaUsuario_Cargo_idCargo');
            $table->integer('Permisos_fichaUsuario_Sector_idSector');
            $table->integer('Permisos_fichaUsuario_Sector_centros_idcentros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprobacion');
    }
};
