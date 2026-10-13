<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre_completo', 'cargo', 'telefono', 'correo'];

    public function alquileres()
    {
        return $this->hasMany(Alquiler::class);
    }
}