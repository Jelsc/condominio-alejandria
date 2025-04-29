<?php

namespace Database\Seeders;

use App\Models\Rol_Permiso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolPermisos = [];

        // 1) Administrador (rol_id = 1) → todos los permisos (1 a 48)
        for ($permisoId = 1; $permisoId <= 48; $permisoId++) {
            $rolPermisos[] = ['rol_id' => 1, 'permiso_id' => $permisoId];
        }

        // 2) Directiva (rol_id = 2)
        $directiva = [
            1,    // Ver dashboard
            2, 3, 4, 5,      // Usuarios CRUD
            6, 7, 8, 9,      // Roles CRUD
            10,11,12,13,     // Permisos CRUD
            14,15,16,17,     // Empleados CRUD
            19,20,21,22,     // Residentes CRUD
            23,24,25,26,     // Propiedades CRUD
            27,28,29,30,     // Reservas CRUD
            31,32,33,34,     // Cuotas CRUD
            35,36,37,38,     // Pagos CRUD
            39,40,41,42,     // Mantenimientos CRUD
            43,44,45,        // Notificaciones
            48,              // Bitácora
        ];
        foreach ($directiva as $pid) {
            $rolPermisos[] = ['rol_id' => 2, 'permiso_id' => $pid];
        }

        // 3) Residente (rol_id = 3)
        $residente = [1, 27, 28, 31, 32, 35, 36, 44];
        foreach ($residente as $pid) {
            $rolPermisos[] = ['rol_id' => 3, 'permiso_id' => $pid];
        }

        // 4) Seguridad (rol_id = 4)
        $seguridad = [1, 46, 47, 48];
        foreach ($seguridad as $pid) {
            $rolPermisos[] = ['rol_id' => 4, 'permiso_id' => $pid];
        }

        // Creamos cada pivote usando Eloquent
        foreach ($rolPermisos as $rp) {
            Rol_Permiso::create($rp);
        }
    }
}
