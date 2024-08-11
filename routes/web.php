<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedicController;
use App\Http\Controllers\UserController;

Route::view('/','index');
Route::view('/servicio', 'servicio');
Route::view('/nosotros', 'nosotros');
Route::view('/contacto', 'contacto');

Route::get('/medic', [MedicController::class, 'inicio']);
Route::get('/medic/crear', [MedicController::class, 'crear']);
Route::get('/medic/usuarios', [MedicController::class, 'usuarios']);
Route::get('/medic/configuracion', [MedicController::class, 'configuracion']);

// Route::get('/medic/configuracion', [UserController::class, 'configuracion']);

