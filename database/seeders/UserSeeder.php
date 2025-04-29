<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'  => 'Eduardo Admin',
                'email' => 'eduardo@condominio.test',
                'Telefono' => '+591 41565622',
                'rol_id'   => 1, // Administrador
            ],
            [
                'name'  => 'Directiva Maria',
                'email' => 'maria@condominio.test',
                'Telefono' => '+591 41565622',
                'rol_id'   => 2, // Directiva
            ],
            [
                'name'  => 'Residente Juan',
                'email' => 'juan@condominio.test',
                'Telefono' => '+591 41565622',
                'rol_id'   => 3, // Residente
            ],
            [
                'name'  => 'Residente Jhonny',
                'email' => 'jhonny@condominio.test',
                'Telefono' => '+591 41565622',
                'rol_id'   => 3, // Residente
            ],
            [
                'name'  => 'Residente Carlos',
                'email' => 'carlos@condominio.test',
                'Telefono' => '+591 41565622',
                'rol_id'   => 3, // Residente
            ],
            [
                'name'  => 'Seguridad Pedro',
                'email' => 'pedro@condominio.test',
                'Telefono' => '+591 41565622',
                'rol_id'   => 4, // Seguridad
            ],
            [
                'name'  => 'Seguridad Rodrigo',
                'email' => 'rodrigo@condominio.test',
                'Telefono' => '+591 41565622',
                'rol_id'   => 4, // Seguridad
            ],
            [
                'name'  => 'Seguridad Rolando',
                'email' => 'rolando@condominio.test',
                'Telefono' => '+591 41565622',
                'rol_id'   => 4, // Seguridad
            ],
            [
                'name'  => 'Seguridad Rosa',
                'email' => 'rosa@condominio.test',
                'Telefono' => '+591 41565622',
                'rol_id'   => 4, // Seguridad
            ],
        ];

        foreach ($users as $data) {
            User::create([
                'name'              => $data['name'],
                'email'             => $data['email'],
                'email_verified_at' => now(),
                'password'          => Hash::make('123456789'),  // contraseña cifrada
                'remember_token'    => Str::random(10),
                'Telefono'          => $data['Telefono'],
                'rol_id'            => $data['rol_id'],
                // 'Estado' defaults to 'Activo'
            ]);
        }
    }
}
