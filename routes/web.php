<?php

use App\Http\Controllers\ClientesController;
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

Route::get('/', [ClientesController::class,'index'])->name('clientes.index');
Route::get('/cliente', [ClientesController::class,'create']);
Route::post('/cliente', [ClientesController::class, 'store'])->name('cliente.store');
Route::get('/cliente/{idcliente}', [ClientesController::class,'view'])->name('cliente.view');
Route::post('/cliente/update', [ClientesController::class,'update'])->name('cliente.update');
Route::get('/cliente/delete/{id}', [ClientesController::class,'delete'])->name('cliente.delete');
