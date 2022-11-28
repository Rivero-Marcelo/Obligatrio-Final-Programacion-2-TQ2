<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;
use App\Http\Middleware\ValidarAcceso;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});






Route::middleware([ValidarAcceso::class])->group(function(){

Route::post('/producto', [ProductoController::class, "store"]);
Route::get('/producto', [ProductoController::class, "index"]);
Route::get('/producto/{d}', [ProductoController::class, "show"]);
Route::put('/producto/{d}', [ProductoController::class, "update"]);
Route::delete('/producto/{d}', [ProductoController::class, "destroy"]);
Route::post('/producto/upds', [ProductoController::class, "updateStock"]);

});