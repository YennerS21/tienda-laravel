<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'nombre',
        'descripcion',
        'cantidad',
        'precio',
    ];

    //Esto indica que un producto pertenece a una única categoría
    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}
