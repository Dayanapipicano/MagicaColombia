<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CreateHistoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('usuarios', [ApiController::class, 'index'])->name('user.index');

Route::post('register', [ApiController::class, 'register']);

Route::post('login', [ApiController::class, 'login']);
Route::post('chistorias', [CreateHistoryController::class, 'crearh']);
Route::get('mostrarhistorias', [CreateHistoryController::class, 'mostrarh']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//ELIMINAR CUENTA API
Route::middleware('auth:api')->delete('/delete-account', 'UserController@deleteAccount');
