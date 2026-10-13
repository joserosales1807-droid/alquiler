<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = [
        'codigo', 'nombre', 'descripcion', 'marca',
        'precio_dia', 'estado', 'categoria_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function detalles()
    {
        return $this->hasMany(DetalleAlquiler::class);
    }
}