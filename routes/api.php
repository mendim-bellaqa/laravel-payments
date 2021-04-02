<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoController;
use App\Http\Controllers\ZwController;
use App\Http\Controllers\ZboController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\ClientsController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-zw', [ZwController::class, 'index']);
Route::get('/zw', [ZwController::class, 'index']);
Route::get('/zo', [ZoController::class, 'index']);
Route::get('/clients', [ClientsController::class, 'index']);
Route::get('/bank', [BankController::class, 'index']);
Route::get('/zbo', [ZboController::class, 'index']);