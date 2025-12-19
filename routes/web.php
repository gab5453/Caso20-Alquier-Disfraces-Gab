<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DisfrazController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AlquilerController;

Route::get('/C', function () {
    return redirect()->route('Disfraces.index');

});
Route::get('/D', function () {
    return redirect()->route('Clientes.index');

});

Route::resource('Disfraces', DisfrazController::class);
Route::resource('Clientes', ClienteController::class);
Route::resource('Alquileres', AlquilerController::class);

