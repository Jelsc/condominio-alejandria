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
        Schema::table('Users', function (Blueprint $table) {
            $table->string('Estado', 20)->default('Activo'); // Activo/Suspendido/Eliminado(de manera logica)
            $table->string('Telefono', 20);

            // Relación con la tabla rols
            $table->foreignId('idRol')->constrained('rols')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Users', function (Blueprint $table) {
            $table->dropForeign(['idRol']); // Eliminar la clave foránea
            $table->dropColumn(['Estado', 'Telefono', 'idRol']); // Eliminar las columnas
        });
    }
};
