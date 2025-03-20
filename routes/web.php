<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\ProfileController;
use App\Models\Pedido;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*PAGINA PRINCIPAL*/ 
Route::get('/', function () {
    return view('Inicio');
});
/*Inicio*/ 
Route::get('/', [PlatoController::class, 'Inicio'])->name('inicio');
/*PLATOS*/ 
Route::get('/platos', [PlatoController::class, 'indice'])->name('indicePlatos');
Route::post('/pedidofinalizado', [ClienteController::class, 'AnyadirCliente'])->name('añadir_cliente');
Route::get('/precio/{totalprecio}', [PlatoController::class, 'almacenarPrecio'])->name('almacenarprecio');
/*Empresas*/ 
Route::get('/empresas', [EmpresaController::class, 'indice'])->name('indiceEmpresas');
Route::get('/platos/formularioCliente', [EmpresaController::class, 'nombre_de_empresas'])->name('formcliente');
/*Pedidos*/ 
Route::get('/pedidos', [PedidoController::class, 'indice'])->name('indicePedidos');
/*FinPedido*/ 
Route::get('/finpedido', [ClienteController::class, 'findelpedido'])->name('FinPedido');

/*///////////////////////////////////////////////////////////////////////////////*/ 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
