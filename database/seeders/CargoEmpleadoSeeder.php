<?php

namespace Database\Seeders;
use App\Models\CargoEmpleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CargoEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cargos = [
            'Guardia de Seguridad',
            'Portero',
            'Conserje',
            'Encargado de Mantenimiento',
            'Supervisor de Seguridad',
            'Personal de Limpieza'
        ];

        foreach ($cargos as $cargo) {
            CargoEmpleado::create([
                'Cargo' => $cargo
            ]);
        }
    }
}
