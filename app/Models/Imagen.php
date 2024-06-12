<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $fillable = ['producto_id', 'ruta_imagen'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
