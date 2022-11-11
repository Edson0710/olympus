<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $fillable = ['nombreEmpleado',  'rolEmpleado', 'generoEmpleado', 'telefonoEmpleado', 'curpEmpleado', 'fecha_NacEmpleado' /*, 'imagenEmpleado' */];
    //protected $guarded = ['id'];

    /* Un Empleado puede tener muchas Citas
    Se relaciona desde un Empleado sus Citas, 
    la cual tiene muchas instancias del modelo Cita */
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
