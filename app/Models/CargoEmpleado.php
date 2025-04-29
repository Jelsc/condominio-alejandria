<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoEmpleado extends Model
{
    use HasFactory;
    protected $table = 'cargo_empleados';

    protected $fillable = [
        'Cargo',
        'Estado'
    ];
}
