<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombreServicio',
        'descripcionServicio',
        'precioServicio'
    ];

    /* Un Servicio puede tener muchas Citas
    Se relaciona desde un Servicio sus Citas, 
    la cual tiene muchas instancias del modelo Cita (relacion muchos a muchos)*/
    public function citas()
    {
        return $this->belongsToMany(Cita::class);
    }
}
