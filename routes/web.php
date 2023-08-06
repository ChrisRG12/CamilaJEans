<?php

use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\ControladorBD;
use App\Http\Controllers\ControladorPro;

use Illuminate\Support\Facades\Route;


Route::get('/', [controladorVistas::class, 'showIndex']) -> name('Index');

//Mercancia
Route::get('Agregar', [controladorBD::class, 'create']) -> name('Productos.create');

Route::post('Productos', [ControladorBD::class, 'store']) -> name('Productos.store');

Route::get('VerProductos', [controladorBD::class, 'index']) -> name('Productos.index');

Route::get('EditarPro/{id}/edit', [controladorBD::class, 'edit']) -> name('Productos.edit');

Route::put('Productos/{id}', [ControladorBD::class, 'update']) -> name('Productos.update');

Route::delete('Productos/{id}', [ControladorBD::class, 'destroy']) -> name('Productos.destroy');

//Provedores
Route::get('Provedores/Create', [ControladorPro::class, 'create']) -> name('Provedores.create');

Route::post('Proveedor', [ControladorPro::class, 'store']) -> name('provedor.store');

Route::get('VerProveedores', [ControladorPro::class, 'index']) -> name('provedor.index');

Route::get('EditarProv/{id}/edit', [ControladorPro::class, 'edit']) -> name('provedor.edit');

Route::put('provedor/{id}', [ControladorPro::class, 'update']) -> name('provedor.update');

Route::delete('Provedor/{id}', [ControladorPro::class, 'destroy']) -> name('provedor.destroy');