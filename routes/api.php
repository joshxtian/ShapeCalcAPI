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


Route::get('/per-rect', 'App\Http\Controllers\Math@CalcPerRect');
Route::get('/vol-cub', 'App\Http\Controllers\Math@CalcVolCub');
Route::get('/area-square', 'App\Http\Controllers\Math@AreaSquare');


