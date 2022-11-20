<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'marca',
        'tipo', 'precio', 'cantidad',
    ];

    public $timestamps = false; 

    /**Un Producto puede tener una imagen
     * Se relaciona 1:1 (uno a uno)
     */
    public function productoimages() {
        return $this->hasMany(ProductoImage::class);
    }
}
