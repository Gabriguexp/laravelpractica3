<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsolaController;
use App\Http\Controllers\ReparacionController;
use App\Http\Controllers\AdminController;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::resource('consola', ConsolaController::class, ['except'=>['create', 'edit']]);
Route::resource('reparacion', ReparacionController::class, ['except' => ['create', 'edit']]);
Route::resource('admin', AdminController::class, ['except' => ['create', 'edit']]);
