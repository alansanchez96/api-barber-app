<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\CiteController;
use App\Http\Controllers\ServiceController;

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

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/barbers', [BarberController::class, 'getAllBarbers'])->name('api.getAllBarbers');
    Route::get('/barbers/{id}', [BarberController::class, 'getBarber'])->name('api.getBarber');
});

Route::get('/services', [ServiceController::class, 'getAllServices'])->name('api.getAllServices');
Route::get('/services/{id}', [ServiceController::class, 'getService'])->name('api.getService');

Route::get('/cites', [CiteController::class, 'getAllCites'])->name('api.getAllCites');
Route::get('/cites/{id}', [CiteController::class, 'getCite'])->name('api.getCite');
