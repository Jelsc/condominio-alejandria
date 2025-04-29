<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $empleados = [
            [
                'Nombre'            => 'Pedro',
                'Apellido'          => 'Lopez',
                'CI'                => '99998877',    // único por unique()
                'FechaIngreso'      => '2025-01-15',
                'cargo_empleado_id' => 1,             // Guardia de Seguridad
                'user_id'           => 6,             // Seguridad Pedro
            ],
            [
                'Nombre'            => 'Rodrigo',
                'Apellido'          => 'Garcia',
                'CI'                => '88887766',
                'FechaIngreso'      => '2025-02-01',
                'cargo_empleado_id' => 5,             // Supervisor de Seguridad
                'user_id'           => 7,             // Seguridad Rodrigo
            ],
            [
                'Nombre'            => 'Rolando',
                'Apellido'          => 'Perez',
                'CI'                => '77776655',
                'FechaIngreso'      => '2025-02-15',
                'cargo_empleado_id' => 2,             // Portero
                'user_id'           => 8,             // Seguridad Rolando
            ],
            [
                'Nombre'            => 'Rosa',
                'Apellido'          => 'Martinez',
                'CI'                => '66665544',
                'FechaIngreso'      => '2025-03-01',
                'cargo_empleado_id' => 3,             // Conserje
                'user_id'           => 9,             // Seguridad Rosa
            ],
        ];

        foreach ($empleados as $data) {
            Empleado::create($data);
        }
    }
}
