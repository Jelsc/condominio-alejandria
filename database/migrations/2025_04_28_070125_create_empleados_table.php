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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->string('CI', 20)->unique(); //para que es el unique? esto es para que no se repita el mismo ci
            $table->date('FechaIngreso');
            $table->date('FechaSalida')->nullable();
            $table->tinyInteger('Estado')->default(1); // 1 = Activo, 0 = Inactivo

            //relacion con cargo_empleados
            $table->foreignId('cargo_empleado_id')
                ->constrained('cargo_empleados')
                ->onUpdate('cascade')   //onUpdate('cascade') es para que si se actualiza el id de cargo_empleado se actualice en empleados
                ->onDelete('restrict'); //onDelete('restrict') es para que no se pueda eliminar un cargo_empleado si tiene empleados relacionados

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
        Schema::dropIfExists('empleados');
    }
};
