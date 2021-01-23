<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieGenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $movies_genres = [
            1 => [
                'genreIds' => [1, 3, 8],
            ],
            2 => [
                'genreIds' => [1, 3, 9],
            ],
            3 => [
                'genreIds' => [1, 5, 7, 9],
            ],
            4 =>[
                'genreIds' => [6, 7, 9],
            ],
            5 => [
                'genreIds' => [1, 2, 9],
            ],
            6 => [
                'genreIds' => [1, 3],
            ],
            7 => [
                'genreIds' => [1, 3],
            ],
            8 => [
                'genreIds' => [1, 3],
            ],
            9 => [
                'genreIds' => [1, 3, 9],
            ],
            10 => [
                'genreIds' => [1, 3],
            ],
            11 => [
                'genreIds' => [1, 2, 9],
            ],
            12 => [
                'genreIds' => [3, 9],
            ],
            13 => [
                'genreIds' => [3, 4, 5, 9],
            ],
            14 => [
                'genreIds' => [1, 2, 3],
            ],
            15 => [
                'genreIds' => [1, 3],
            ]
        ];

        Schema::create('movie_genre', function (Blueprint $table) {
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('genre_id');

            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('genre_id')->references('id')->on('genres');
        });

        foreach ($movies_genres as $movieId => $movie_genres) {
            $movie = App\Models\Movie::find($movieId);
            foreach ($movie_genres['genreIds'] as $movie_genre_id) {
                $movie->genres()->attach($movie_genre_id);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_genre');
    }
}
