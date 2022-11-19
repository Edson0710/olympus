<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorteImage extends Model
{
    use HasFactory;

    // Sirve para habilitar las columnas 'created_at' y 'updated_at' //
    public $timestamps = true;

    // Filtra los atributos que se van a poder manipular //
    protected $fillable = [
        'corte_id',
        'ubicacionFileCorte',
        'nombreOriginalCorte',
        'mime'
    ];

    /**Una CorteImage puede ser asignada por solo un Corte
     * Se relaciona 1:1 (uno a uno)
     */
    public function corte() {
        return $this->belongsTo(Corte::class);
    }
}
