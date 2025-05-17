<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class productoController extends Controller
{
    public function index(Request $request) {
        
        
        $productos = Producto::get();

        return view('productos.index', compact('productos'));
    }
}
