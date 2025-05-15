<?php
use App\Http\Controllers\Ecuacion\EcuacionController;
use App\Http\Controllers\Clinica\UsuarioController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/usuario',[UsuarioController::class, 'index']); 

Route::get('/ecuacion', function(){
   
    return view('ecuacion.index');
})->name('ecuacion.index');

Route::get('/ecuacion/index', [EcuacionController::class, 'index'])-> name('ecuacion.index');
Route::post('/ecuacion/store', [EcuacionController::class, 'store'])->name('ecuacion.store');
