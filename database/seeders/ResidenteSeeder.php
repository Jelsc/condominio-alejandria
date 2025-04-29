<?php

namespace Database\Seeders;

use App\Models\Residente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResidenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $residentes = [
            // La Directiva también vive en el condominio
            [
                'CI'             => '33445566',
                'Nombre'         => 'María',
                'Apellido'       => 'Gómez',
                'TipoResidente'  => 'Propietario',
                'Propiedad_id'   => 'L01',
                'user_id'        => 2,           // Directiva Maria
            ],
            // Residentes
            [
                'CI'             => '98765432',
                'Nombre'         => 'Juan',
                'Apellido'       => 'Pérez',
                'TipoResidente'  => 'Propietario',
                'Propiedad_id'   => 'L01',
                'user_id'        => 3,           // Residente Juan
            ],
            [
                'CI'             => '87654321',
                'Nombre'         => 'Jhonny',
                'Apellido'       => 'López',
                'TipoResidente'  => 'Inquilino',
                'Propiedad_id'   => 'L02',
                'user_id'        => 4,           // Residente Jhonny
            ],
            [
                'CI'             => '22334455',
                'Nombre'         => 'Carlos',
                'Apellido'       => 'González',
                'TipoResidente'  => 'Familiar',
                'Propiedad_id'   => 'L03',
                'user_id'        => 5,           // Residente Carlos
            ],
        ];

        foreach ($residentes as $data) {
            Residente::create($data);
        }
    }
}
