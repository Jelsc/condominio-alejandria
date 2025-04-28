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
        Schema::create('rol_permisos', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('Estado')->default(1); // 1=activo, 0=inactivo

            //relacion hacia rol
            $table->foreignId('rol_id')->constrained('rols')
                ->onUptade('Cascade')
                ->onDelete('restrict');

            //relacion hacia permisos
            $table->foreignId('permiso_id')->constrained('permisos')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            //clave unica compuesta para evitar duplicados
            $table->unique(['rol_id', 'permiso_id'], 'uk_rol_permiso');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_permisos');
    }
};
