<?php

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






// *********** Rutas hacia api-productos ************** \\ 

Route::middleware([Sesion::class])->group(function(){

    Route::get('/home', function (){
        return view('home'); 
    })->name('home');

    Route::post('/producto/nuevo', [ProductoController::class, "store"])->name('producto.store');
    Route::get('/producto/nuevo', [ProductoController::class, "create"])->name('producto.create');
    Route::get('/producto', [ProductoController::class, "showAll"])->name('producto.showAll');

});

// *************************************************** \\



// ******* rutas hacia api.auth ************ \\

Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/logout', [LogController::class, 'logout'])->name('logout')->middleware(Sesion::class);
Route::get('/login', [LogController::class, 'index'])->name('login');
Route::post('/login', [LogController::class, 'autenticar'])->name('autenticar');
Route::get('/register', [UserController::class, 'create'])->name('usuario.create');
Route::post('/register', [UserController::class, 'store'])->name('usuario.store');


// ****************************************** \\

