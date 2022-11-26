<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $fillable = ['nombreUsuarioCita', 'emailUsuarioCita', 'fechaUsuarioCita',
                           /* 'calificacionUsuarioCita', */ 'celularUsuarioCita', 'horaUsuarioCita', 'empleado_id', 'total'];

    public $timestamps = false;

    /* Una Cita puede ser asignada para un Empleado
    Se relaciona desde una Cita su Empleado, 
    la cual tiene una instancia del modelo Empleado */
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    /* Una Cita puede tener muchos Servicios
    Se relaciona desde una Cita sus Servicios, 
    la cual tiene muchas instancias del modelo Servicio (relacion muchos a muchos)*/
    public function servicios()
    {
        return $this->belongsToMany(Servicio::class);
    }
}
