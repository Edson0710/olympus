<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'empleado_id',
        'ubicacionFileEmpledo',
        'nombreOriginalEmpleado',
        'mime'
    ];

    /**Una EmpeladoImage puede ser asignada por solo un Empleado
     * Se relaciona 1:1 (uno a uno)
     */
    public function empleado() {
        return $this->belongsTo(Empleado::class);
    }
}
