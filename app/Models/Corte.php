<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corte extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'nombreCorte',
        'estiloCorte',
        'descripcionCorte'
    ];

    /* protected $guarded = ['id']; */
}
