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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id('idPermiso'); // PRIMARY KEY

            $table->string('dias', 2)->nullable()->comment('Número de días con goce de sueldo');
            $table->timestamp('fecha_desde')->nullable();
            $table->timestamp('fecha_hasta')->nullable();
            $table->string('motivo', 255)->nullable();
            $table->string('tipo_permiso', 1)->nullable();
            $table->string('status', 45)->nullable();
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();

            // Claves foráneas
            $table->unsignedBigInteger('empleados_idFicha');

            // Asegurar que las claves foráneas tengan índices
            //$table->index(['empleados_idFicha']);

            // Definir la clave foránea correctamente
            /*$table->foreign(
                ['empleados_idFicha'],
                'fk_sol_emp'
            )->references(
                ['idFicha']
            )->on('empleados')->onDelete('cascade');
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
