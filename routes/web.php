<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\tarjetaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/clientes', [clienteController::class, 'obtenerTodo'])->name('clientes');

Route::get('/cliente/crear', [clienteController::class, 'crearCliente'])->name('crear-cliente');

Route::post('/clientes/guardar',[clienteController::class, 'guardarCliente'])->name('guardar-cliente');

Route::get('/clientes/ver/{cod}', [clienteController::class, 'verCliente'])->name('ver-cliente');

Route::get('/clientes/editar/{dni}', [clienteController::class, 'editarCliente'])->name('editar-cliente');

Route::get('/clientes/actualizar/{dni}', [clienteController::class, 'actualizarCliente'])->name('actualizar-cliente');

Route::get('/clientes/eliminar/{cod}', [clienteController::class, 'eliminarCliente'])->name('eliminar-cliente');

Route::get('/clientes/destruir/{cod}', [clienteController::class, 'destruirCliente'])->name('destruir-cliente');

Route::get('/tarjetas', [tarjetaController::class, 'obtenerTodo'])->name('tarjetas');

Route::get('/tarjetas/crear', [tarjetaController::class, 'crearTarjeta'])->name('crear-tarjeta');

Route::post('/tarjetas/guardar',[tarjetaController::class, 'guardarTarjeta'])->name('guardar-tarjeta');

Route::get('/tarjetas/cls/', [tarjetaController::class, 'tarjetasCls'])->name('cls');

Route::get('/tarjetas/gld/', [tarjetaController::class, 'tarjetasGld'])->name('gld');

Route::get('/tarjetas/plt/', [tarjetaController::class, 'tarjetasPlt'])->name('plt');

Route::get('/tarjetas/ver/{cod}', [tarjetaController::class, 'verTarjeta'])->name('ver-tarjeta');

Route::get('/tarjetas/eliminar/{cod}', [tarjetaController::class, 'eliminarTarjeta'])->name('eliminar-tarjeta');

Route::get('/tarjetas/destroy/{cod}', [tarjetaController::class, 'destruirTarjeta'])->name('destruir-tarjeta');