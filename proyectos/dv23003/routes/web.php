<?php

use App\Http\Controllers\Credito;
use App\Http\Controllers\DepartamentoController;
// use App\Http\Controllers\CreditoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});


Route::resource('/departamento', DepartamentoController::class);
Route::resource('/credito', Credito::class);