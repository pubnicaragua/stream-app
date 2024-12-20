<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen_url',
        'categoria_id'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
