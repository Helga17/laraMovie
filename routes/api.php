<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Person;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::post('/register', 'API\AuthController@register');
Route::post('/register', [\App\Http\Controllers\API\AuthController::class, 'register']);
//Route::post('/login', 'API\AuthController@login');
Route::post('/login', [\App\Http\Controllers\API\AuthController::class, 'login']);

Route::get('/actors', function (Request $request) {
    return Person::all();
});

Route::get('/actors/{id}', function ($id) {
    return Person::find($id);
});

Route::get('/movies', function (Request $request) {
    return Movie::all();
});

Route::get('/movies/{id}', function ($id) {
    $movie = Movie::with('genres')->find($id);

    $movie_people = \Illuminate\Support\Facades\DB::table('people')
        ->select([
            'people.first_name',
            'people.last_name',
            'people.birthday',
            'people.image',
            'roles.title as role_title',
            'roles.category'
        ])
        ->join('movie_person', function($q) use ($id) {
            $q->on('people.id', '=', 'movie_person.person_id')
                ->where('movie_person.movie_id', '=', $id);
        })
        ->join('roles', 'roles.id', '=', 'movie_person.role_id')
        ->get();

    $actors = $movie_people->where('category', '=', 'actor') ?? [];

    $directors = $movie_people->where('category', '=', 'directors') ?? [];

    $movie->actors = $actors;
    $movie->directors = $directors;

    return $movie;
});

Route::get('/test', function () {
    return asset('images/alda.png');
});
