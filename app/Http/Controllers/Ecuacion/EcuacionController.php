<?php

namespace App\Http\Controllers\Ecuacion;

use App\Http\Controllers\Helpers\Ecuacion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcuacionController extends Controller
{
    public function index(Request $request){
        $respuesta = session('respuesta');

        return view('ecuacion.index', compact('respuesta'));
    }

    public function store(Request $request){
        $a = $request->a;
        $b = $request->b;

        $ecuacion = new Ecuacion ($a , $b);

        $respuesta = $ecuacion->resultado();

        session(['respuesta'=> $respuesta]);
       

        return redirect()->route('ecuacion.index');
    }
}





