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
        Schema::create('comuna', function (Blueprint $table) {
            $table->id('idComuna');
            $table->string('nombreComuna', 45);
            $table->string('status', 1);
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();
            $table->integer('Region_idregion');

            //$table->index(['Region_idregion'], 'fk_Comuna_Region1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comuna');
    }
};
