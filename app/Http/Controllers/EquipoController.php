<?php

namespace App\Http\Controllers;

use App\Models\Equipo;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        dd($equipos);
    }

    public function categoria($id)
    {
        $equipo = Equipo::findOrFail($id);
        dd($equipo->categoria);
    }

    public function Oncategoria($categoria)
    {
        $equipos = Equipo::with('categoria')->where('categoria_id', $categoria)->get();
        dd($equipos);
    }
}
