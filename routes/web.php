<?php

use App\Http\Controllers\ControladorVistas;

use Illuminate\Support\Facades\Route;


Route::get('/', [controladorVistas::class, 'showIndex']) -> name('Index');

Route::get('Prod', [controladorVistas::class, 'showProductos']) -> name('Prod');
