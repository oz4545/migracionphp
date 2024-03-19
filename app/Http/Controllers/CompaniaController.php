<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compania;

class CompaniaController extends Controller
{

    public function create(){

        return view('compania');

    }

    public function store(Request $request)
    {
        $compania = new Compania();
        $compania->actividad = $request->actividad;
        $compania->save();

        return redirect()->route('exito')->with('success', 'Compañía guardada exitosamente.');
    }
}
