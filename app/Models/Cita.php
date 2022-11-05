<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $fillable = ['nombreUsuarioCita', 'emailUsuarioCita', 
                           /* 'confirmacionUsuarioCita', */ 'fechaUsuarioCita',
                           /* 'calificacionUsuarioCita', */ 'celularUsuarioCita', 'horaUsuarioCita'];

    public $timestamps = false;
}
