<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corte extends Model
{
    use HasFactory;

    // Sirve para habilitar las columnas 'created_at' y 'updated_at' //
    public $timestamps = true;

    // Filtra los atributos que se van a poder manipular //
    protected $fillable = [
        'nombreCorte',
        'estiloCorte',
        'descripcionCorte'
    ];

    /* protected $guarded = ['id']; */

    /**Un Corte puede tener una o varias imagenes
     * Se relaciona 1:N (uno a muchos)
     */
    public function corteimages() {
        return $this->hasMany(CorteImage::class);
    }
}
