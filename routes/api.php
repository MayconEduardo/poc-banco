<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContaController;

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

Route::get('conta', 'ContaController@index');
Route::post('conta', 'ContaController@store');
Route::get('conta/saldo/{id}', 'ContaController@saldo');
Route::post('conta/deposito/{id}', 'ContaController@deposito');
Route::post('conta/saque/{id}', 'ContaController@saque');