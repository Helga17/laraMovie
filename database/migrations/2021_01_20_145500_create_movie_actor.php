<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieActor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $movies_actors = [
            1 => [
                'actorIds' => [1, 2, 3, 4]
            ],
            2 => [
                'actorIds' => [5, 6, 7, 8]
            ],
            3 => [
                'actorIds' => [9, 10, 11, 12]
            ],
            4 => [
                'actorIds' => [13, 14, 15, 16]
            ],
            5 => [
                'actorIds' => [17, 18, 19]
            ],
            6 => [
                'actorIds' => [20, 21, 22, 23]
            ],
            7 => [
                'actorIds' => [24, 25, 26, 27]
            ],
            8 => [
                'actorIds' => [28, 29, 30, 31]
            ],
            9 => [
                'actorIds' => [32, 33, 34, 35]
            ],
            10 => [
                'actorIds' => [36, 37, 38, 39]
            ],
            11 => [
                'actorIds' => [40, 41, 42, 43]
            ],
            12 => [
                'actorIds' => [44, 45, 46, 47]
            ],
            13 => [
                'actorIds' => [48, 49, 50, 51]
            ],
            14 => [
                'actorIds' => [52, 53, 54]
            ]
        ];

        Schema::create('movie_actor', function (Blueprint $table) {
            $table->unsignedBigInteger('actor_id');
            $table->unsignedBigInteger('movie_id');

            $table->foreign('actor_id')->references('id')->on('actors');
            $table->foreign('movie_id')->references('id')->on('movies');
        });

        foreach ($movies_actors as $movieId => $movie_actors) {
            $movie = App\Models\Movie::find($movieId);
            foreach ($movie_actors['actorIds'] as $movie_actor_id) {
                $movie->actors()->attach($movie_actor_id);
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
        Schema::dropIfExists('movie_actor');
    }
}
