<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "productos";

    protected $guarded = [];

    public function getRouteKeyName(){
        return 'slug';
    }

    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'medida',
        'categoria_id',
        'precio',
        'stock'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function imagenes()
    {
        return $this->hasMany(Imagen::class, 'producto_id');
    }
}
