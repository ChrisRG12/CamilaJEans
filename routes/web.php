<?php

use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\ControladorBD;
use App\Http\Controllers\ControladorPro;
use App\Http\Controllers\ControladorLogin;
use App\Http\Controllers\ControladorUsuarios;
use App\Http\Controllers\PDFController;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\Route;

//------------------LOGIN----------------------------
Route::get('/', [ControladorLogin::class, 'login'])->name('login');
Route::post('Incia/Sesion', [ControladorLogin::class, 'log'])->name('Iniciar.Sesion');
Route::get('Cierra/Sesion', [ControladorLogin::class, 'logout'])->name('Cierra.Sesion');



Route::get('inicio', [controladorVistas::class, 'showIndex']) -> name('Index');
Route::get('InicioT', [controladorVistas::class, 'showinicio']) -> name('Inicio');

Route::get('Registro', [controladorVistas::class, 'Registro']) -> name('Inicio');

//Mercancia
Route::get('Agregar', [controladorBD::class, 'create']) -> name('Productos.create');

Route::post('Productos', [ControladorBD::class, 'store']) -> name('Productos.store');

Route::get('VerProductos', [controladorBD::class, 'index']) -> name('Productos.index');

Route::get('EditarPro/{id}/edit', [controladorBD::class, 'edit']) -> name('Productos.edit');

Route::put('Productos/{id}', [ControladorBD::class, 'update']) -> name('Productos.update');

Route::delete('Productos/{id}', [ControladorBD::class, 'destroy']) -> name('Productos.destroy');

//Busqueda
Route::get('Buscar', [controladorBD::class, 'realizarBusqueda']) -> name('Productos.buscados');


//Disponibilidad
Route::get('Disponibilidad', [controladorBD::class, 'show']) -> name('Productos.show');

//Stock
Route::get('Cambiar/{id}/Cambiar', [controladorBD::class, 'Cambiar']) -> name('Productos.Cambiar');

Route::put('Productoss/{id}', [ControladorBD::class, 'stock']) -> name('Productos.stock');

//Provedores
Route::get('Provedores/Create', [ControladorPro::class, 'create']) -> name('Provedores.create');

Route::post('Proveedor', [ControladorPro::class, 'store']) -> name('provedor.store');

Route::get('VerProveedores', [ControladorPro::class, 'index']) -> name('provedor.index');

Route::get('EditarProv/{id}/edit', [ControladorPro::class, 'edit']) -> name('provedor.edit');

Route::put('provedor/{id}', [ControladorPro::class, 'update']) -> name('provedor.update');

Route::delete('Provedor/{id}', [ControladorPro::class, 'destroy']) -> name('provedor.destroy');


//Usuarios y Tiendas
Route::get('Registro', [ControladorUsuarios::class, 'create']) -> name('Usuarios.create');
//store
Route::post('Usuario', [ControladorUsuarios::class, 'store'])->name('Usuario.store');
//index
Route::get('Vistausuario', [ControladorUsuarios::class, 'index'])->name('Usuario.index');
//edit
Route::get('Usuario/{id}/edit', [ControladorUsuarios::class, 'edit'])->name('Usuario.edit');