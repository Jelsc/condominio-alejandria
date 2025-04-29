<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;
    protected $table = 'propiedads';

    protected $fillable = [
        'id',
        'RefCatastral',
        'Direccion',
        'Estado',
        'CantResidentes',
        'CantVehiculos',
        'CantMascotas'
    ];

    public $incrementing = false;   //porque el id es un string, no auto-incremental
    protected $keyType = 'string';  // porque el id es un string
    protected $primaryKey = 'id';   // porque el id es un string
}
