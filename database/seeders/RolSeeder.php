<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Administrador',
            'Directiva',
            'Residente',
            'Seguridad'
        ];

        foreach ($roles as $nombre) {
            Rol::create([
                'Nombre' => $nombre
            ]);
        }
    }
}
