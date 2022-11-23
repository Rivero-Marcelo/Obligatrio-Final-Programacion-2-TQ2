<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/producto/listado', [ProductoController::class, "Listado"]);

Route::get('/producto/nuevo', 
function(){
    return view('/Productos/NuevoProducto');
});

Route::post('/producto', [ProductoController::class, "nuevo"])->name('producto.nuevo');

Route::get('/login', [LogController::class, 'index'])->name('login');
Route::post('/login', [LogController::class, 'autenticar'])->name('autenticar');

Route::get('/register', [UserController::class, 'create'])->name('usuario.create');
Route::post('/register', [UserController::class, 'store'])->name('usuario.store');




