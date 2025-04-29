<?php

namespace Database\Seeders;

use App\Models\Propiedad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $propiedades = [
            [
                'id' => 'L01',
                'RefCatastral' => 'RC-0001',
                'Direccion' => 'Calle 1, Manzana A, Casa 1',
                'CantResidentes' => 4,
                'CantVehiculos' => 2,
                'CantMascotas' => 1,
            ],
            [
                'id' => 'L02',
                'RefCatastral' => 'RC-0002',
                'Direccion' => 'Calle 1, Manzana A, Casa 2',
                'CantResidentes' => 3,
                'CantVehiculos' => 1,
                'CantMascotas' => 0,
            ],
            [
                'id' => 'L03',
                'RefCatastral' => 'RC-0003',
                'Direccion' => 'Calle 2, Manzana B, Casa 3',
                'CantResidentes' => 5,
                'CantVehiculos' => 2,
                'CantMascotas' => 2,
            ]
        ];

        foreach ($propiedades as $propiedad) {
            Propiedad::create($propiedad);
        }
    }
}
