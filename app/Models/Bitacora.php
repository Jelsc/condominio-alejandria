<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;
    protected $table = 'bitacoras';

    protected $fillable = [
        'Descripcion',
        'FechaHora',
        'Fecha',  //para los filtros desde fecha, hasta fecha
        'Ip',
        'user_id'
    ];
}
