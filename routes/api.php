<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Actor;
use App\Models\Movie;

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

Route::get('/actors', function (Request $request) {
    return Actor::all();
});

Route::get('/actors/{id}', function ($id) {
    return Actor::find($id);
});

Route::get('/movies', function (Request $request) {
    return Movie::all();
});

Route::get('/movies/{id}', function ($id) {
    return Movie::with(['genres', 'actors'])->find($id);
});

Route::get('/test', function () {
    return asset('images/alda.png');
});