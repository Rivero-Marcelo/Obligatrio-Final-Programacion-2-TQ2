<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroVentaController;
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

    Route::post('/', function(){
        return response()->json(['status' => 'OK'], 200);  
    });

Route::post('/ventas/registro', [RegistroVentaController::class, 'store']);
Route::get('/ventas/listado', [RegistroVentaController::class, 'index']);

});