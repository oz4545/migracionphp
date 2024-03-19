<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CuerpoEjercito;

class CuerpoEjercitoController extends Controller
{

    public function create(){

        return view('cuerpos');

    }

    public function store(Request $request)
    {
        $cuerpo = new CuerpoEjercito();
        $cuerpo->denominacion = $request->denominacion;
        $cuerpo->save();

        return redirect()->route('exito')->with('success', 'Cuerpo de Ejército guardado exitosamente.');
    }
}
