<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residente extends Model
{
    use HasFactory;
    protected $table = 'residentes';

    protected $fillable = [
        'CI',
        'Nombre',
        'Apellido',
        'Estado',
        'TipoResidente',
        'Propiedad_id',
        'user_id',
    ];
}
