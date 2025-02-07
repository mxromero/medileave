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
            $table->id('idPermiso'); // bigint unsigned
            $table->string('dias', 2);
            $table->timestamp('fecha_desde')->useCurrent();
            $table->timestamp('fecha_hasta')->useCurrent();
            $table->string('motivo', 255);
            $table->string('tipo_permiso', 1);
            $table->string('status', 45);
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();

            // Claves foráneas de fichaUsuario
            $table->bigInteger('fichaUsuario_idFicha')->unsigned();
            $table->bigInteger('fichaUsuario_Cargo_idCargo')->unsigned();
            $table->bigInteger('fichaUsuario_Sector_idSector')->unsigned();
            $table->bigInteger('fichaUsuario_Sector_centros_idcentros')->unsigned();

            // Índices
            //$table->index(['fichaUsuario_idFicha', 'fichaUsuario_Cargo_idCargo', 'fichaUsuario_Sector_idSector', 'fichaUsuario_Sector_centros_idcentros'], 'fk_permisos_fichaUsuario1_idx');

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
