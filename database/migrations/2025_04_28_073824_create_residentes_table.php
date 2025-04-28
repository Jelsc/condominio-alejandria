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
        Schema::create('residentes', function (Blueprint $table) {
            $table->id();
            $table->string('CI',20)->unique();
            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->tinyInteger('Estado')->default(1); // 1 = Activo, 0 = Inactivo
            $table->string('TipoResidente', 30); // Tipo de residente (Ej: Propietario, Inquilino, Visitante, familiar)

            //relacion con propiedads
            $table->string('Propiedad_id', 20);
            $table->foreign('Propiedad_id')
                ->references('id')
                ->on('propiedads')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            //relacion con usuarios
            $table->foreignId('user_id')->unique()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residentes');
    }
};
