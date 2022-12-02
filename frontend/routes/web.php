<?php

use App\Http\Controllers\CompraController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Sesion;

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

Route::middleware('sesion')->group(function(){

// ************** Rutas hacia api-registroVentas ******************* \\
Route::get('/compras', [CompraController::class, "create"])->name('compra.create');
Route::get('/compra/confirmar', [CompraController::class, "confirmarCompra"])->name('compra.confirmar');
Route::post('/compra/confirmar', [CompraController::class, "store"])->name('compra.store');
Route::get('/compra/listado', [CompraController::class, "showAll"])->name('compra.showAll');

// ***************************************************************** \\

// *********** Rutas hacia api-productos ************** \\ 
    Route::get('/home', function (){
        return view('home'); 
    })->name('home');

    Route::post('/producto/nuevo', [ProductoController::class, "store"])->name('producto.store');
    Route::get('/producto/nuevo', [ProductoController::class, "create"])->name('producto.create');
    Route::get('/producto', [ProductoController::class, "showAll"])->name('producto.showAll');
    Route::get('/producto/{id}', [ProductoController::class, "destroy"])->name('producto.destroy');
});
// *************************************************** \\

// ******* rutas hacia api.auth ************ \\

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/logout', [LogController::class, 'logout'])->name('logout')->middleware('sesion');
Route::get('/login', [LogController::class, 'index'])->name('login');
Route::post('/login', [LogController::class, 'autenticar'])->name('autenticar');
Route::get('/register', [UserController::class, 'create'])->name('usuario.create');
Route::post('/register', [UserController::class, 'store'])->name('usuario.store');

// ****************************************** \\