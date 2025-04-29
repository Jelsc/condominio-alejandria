<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'empleados';

    protected $fillable = [
        'Nombre',
        'Apellido',
        'CI',
        'FechaIngreso',
        'FechaSalida',
        'Estado',
        'cargo_empleado_id',
        'user_id'
    ];
}
