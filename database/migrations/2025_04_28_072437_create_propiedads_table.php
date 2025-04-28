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
        Schema::create('propiedads', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('RefCatastral', 30)->unique()->nullable();
            $table->string('Direccion', 100);
            $table->tinyInteger('Estado')->default(1); // 1: Activo, 0: Inactivo
            $table->tinyInteger('CantResidentes')->nullable();
            $table->tinyInteger('CantVehiculos')->nullable();
            $table->tinyInteger('CantMascotas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedads');
    }
};
