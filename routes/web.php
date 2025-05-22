<?php

use App\Models\Cliente;
use App\Http\Controllers\Cliente\clienteController;
use App\Http\Controllers\Producto\productoController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    //$cliente = new Cliente();

    /*$cliente = Cliente::create( [
        'nombres'=> 'Frank',
        'pri_ape'=> 'Perez',
        'seg_ape'=> 'Bustillos',
        'doc_tip'=> 'M',
        'doc_num'=> '74896521',
    ]);

    return $cliente->nombres." ".$cliente->pri_ape;
    */

    /* $producto = Producto::create( [
        'nombre'=> 'Televisor',
        'marca'=> 'LG',
        'precio'=> '350.0',
        'descripcion'=> ' ',
        
    ]);

    return $producto->nombre." ".$producto->marca;
    */

    


    return view('welcome');

});

Route::get('/cliente/index', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/producto/index', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/cliente/store', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::post('/cliente/update', [ClienteController::class, 'update'])->name('cliente.update');
Route::get('/cliente/delete/{id}', [ClienteController::class, 'delete'])->name('cliente.delete');
Route::post('/cliente/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');