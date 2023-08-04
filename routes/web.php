<?php

use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\ControladorBD;

use Illuminate\Support\Facades\Route;


Route::get('/', [controladorVistas::class, 'showIndex']) -> name('Index');

Route::get('Agregar', [controladorBD::class, 'create']) -> name('Productos.create');

Route::post('Productos', [ControladorBD::class, 'store']) -> name('Productos.store');

Route::get('VerProductos', [controladorBD::class, 'index']) -> name('Productos.index');

Route::get('EditarPro/{id}/edit', [controladorBD::class, 'edit']) -> name('Productos.edit');

Route::put('Productos/{id}', [ControladorBD::class, 'update']) -> name('Productos.update');

Route::delete('Productos/{id}', [ControladorBD::class, 'destroy']) -> name('Productos.destroy');

