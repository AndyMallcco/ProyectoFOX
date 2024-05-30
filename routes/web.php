<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contactos', function () {
    return view('contactos');
})->name('contactos');

// Ruta para el registro
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', function () {
    // Lógica para el registro aquí
});

// Rutas para la autenticación
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Rutas para las mascotas (CRUD)
Route::middleware('auth')->group(function () {
    Route::resource('pets', App\Http\Controllers\PetController::class);
});
