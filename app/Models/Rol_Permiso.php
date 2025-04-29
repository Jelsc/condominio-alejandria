<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol_Permiso extends Model
{
    use HasFactory;
    protected $table = 'rol_permisos';

    protected $fillable = [
        'Estado',
        'rol_id',
        'permiso_id'
    ];
}
