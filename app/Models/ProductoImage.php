<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto_id',
        'ubicacionFileProducto',
        'nombreOriginalProducto',
        'mime'
    ];

    /**Una ProductpImage puede ser asignada por solo un Producto
     * Se relaciona 1:1 (uno a uno)
     */
    public function producto() {
        return $this->belongsTo(Producto::class);
    }
}
