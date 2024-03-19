<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuartel;

class CuartelController extends Controller
{

    public function create(){

        return view('cuartel');

    }

    public function store(Request $request)
    {
        $cuartel = new Cuartel();
        $cuartel->nombre = $request->nombre;
        $cuartel->ubicacion = $request->ubicacion;
        $cuartel->save();

        return redirect()->route('exito')->with('success', 'Cuartel guardado exitosamente.');
    }
}
