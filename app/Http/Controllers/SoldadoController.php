<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soldado;

class SoldadoController extends Controller
{

    public function create(){

        return view('soldado');

    }

    public function store(Request $request)
    {
        $soldado = new Soldado();
        $soldado->nombre = $request->nombre;
        $soldado->apellido = $request->apellido;
        $soldado->grado = $request->grado;
        $soldado->save();

        return redirect()->route('exito')->with('success', 'Soldado guardado exitosamente.');
    }
}
