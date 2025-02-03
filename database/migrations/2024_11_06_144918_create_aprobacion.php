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
            $table->id('idAprobacion'); // bigint unsigned
            $table->timestamp('fechaAprobacion');
            $table->string('comentario', 255)->nullable();
            $table->string('status', 45);
            $table->timestamps();

            // Clave foránea a permisos
            $table->unsignedBigInteger('Permisos_idPermiso'); // Asegúrate de que sea unsignedBigInteger
          /*  $table->foreign('Permisos_idPermiso')
                ->references('idPermiso')
                ->on('permisos')
                ->onDelete('cascade')
                ->onUpdate('cascade');*/

            // Claves foráneas de fichaUsuario
            $table->unsignedBigInteger('Permisos_fichaUsuario_idFicha');
            $table->unsignedBigInteger('Permisos_fichaUsuario_Cargo_idCargo');
            $table->unsignedBigInteger('Permisos_fichaUsuario_Sector_idSector');
            $table->unsignedBigInteger('Permisos_fichaUsuario_Sector_centros_idcentros');
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
