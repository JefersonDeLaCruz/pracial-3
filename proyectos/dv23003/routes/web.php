<?php

use App\Http\Controllers\CreditoController;
use App\Http\Controllers\DepartamentoController;
// use App\Http\Controllers\CreditoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});


Route::resource('/departamento', DepartamentoController::class);


Route::get('/credito', [CreditoController::class,'index'])->name('credito');
Route::post('/calcular', [CreditoController::class,'calculo'])->name('calcular');