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

}
