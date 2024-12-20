<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('persona','App\Http\Controllers\personacontroller@getpersona');
Route::get('personas/(id)','App\Http\Controllers\personacontroller@getpersonaid');
Route::post('addpersona','App\Http\Controllers\personacontroller@insertpersona');
Route::put('updatepersona','App\Http\Controllers\personacontroller@updatepersona');
Route::delete('deletepersona','App\Http\Controllers\personacontroller@deletepersona');
