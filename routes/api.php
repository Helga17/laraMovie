<?php

use App\Http\Controllers\API\AuthController;
use App\Models\Genre;
use App\Models\Moment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/actors', function (Request $request) {
    return Person::all();
});

Route::get('/actors/{id}', function ($id) {
    return Person::with('movies')->find($id);
});

Route::get('/movies', function (Request $request) {
    $input = $request->only(['filter', 'per_page', 'page']);

    if (isset($input['limit'])) {
        return Movie::take($input['limit'])->get();
    }

    $per_page = $input['per_page'] ?? 10;

    return Movie::paginate($per_page);
});

Route::get('/genres', function (Request $request) {
   return Genre::all();
});

Route::get('/genres/{id}', function ($id) {
   return Genre::with(['movies'])->find($id);
});

Route::get('/movies/{id}', function ($id) {
    $movie = Movie::with('genres', 'moments')->find($id);

    $movie_people = DB::table('people')
        ->select([
            'people.id',
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

    $directors = $movie_people->where('category', '=', 'director')->toArray() ?? [];

    $movie->actors = $actors;
    $movie->directors = array_values($directors);

    return $movie;
});

Route::get('/test', function () {
    return asset('images/alda.png');
});
