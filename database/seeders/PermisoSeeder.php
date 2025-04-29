<?php

namespace Database\Seeders;

use App\Models\Permiso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos = [
            // Dashboard
            'Ver dashboard',

            // Usuarios
            'Crear Usuario',
            'Listar Usuarios',
            'Editar Usuario',
            'Eliminar Usuario',

            // Roles
            'Crear Rol',
            'Listar Roles',
            'Editar Rol',
            'Eliminar Rol',

            // Permisos
            'Crear Permiso',
            'Listar Permisos',
            'Editar Permiso',
            'Eliminar Permiso',

            // Empleados
            'Crear Empleado',
            'Listar Empleados',
            'Editar Empleado',
            'Eliminar Empleado',

            // Cargos de Empleado
            'Listar CargosEmpleado',

            // Residentes
            'Crear Residente',
            'Listar Residentes',
            'Editar Residente',
            'Eliminar Residente',

            // Propiedades
            'Crear Propiedad',
            'Listar Propiedades',
            'Editar Propiedad',
            'Eliminar Propiedad',

            // Reservas
            'Crear Reserva',
            'Listar Reservas',
            'Editar Reserva',
            'Eliminar Reserva',

            // Cuotas
            'Crear Cuota',
            'Listar Cuotas',
            'Editar Cuota',
            'Eliminar Cuota',

            // Pagos
            'Crear Pago',
            'Listar Pagos',
            'Editar Pago',
            'Eliminar Pago',

            // Mantenimientos
            'Crear Mantenimiento',
            'Listar Mantenimientos',
            'Editar Mantenimiento',
            'Eliminar Mantenimiento',

            // Notificaciones
            'Crear Notificación',
            'Listar Notificaciones',
            'Eliminar Notificación',

            // Control de visitas
            'Autorizar Visita',
            'Listar AutorizacionesVisita',

            // Bitácora
            'Listar Bitácora',
        ];

        foreach ($permisos as $descripcion) {
            Permiso::create(['Descripcion' => $descripcion]);
        }
    }
}
