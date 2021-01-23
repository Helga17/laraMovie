<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $genres = [
            1 => [
                'title' => 'drama',
                'displayedTitle' => 'Драма'
            ],
            [
                'title' => 'biography',
                'displayedTitle' => 'Біографія'
            ],
            [
                'title' => 'romance',
                'displayedTitle' => 'Мелодрама'
            ],
            [
                'title' => 'fantasy',
                'displayedTitle' => 'Фантастика'
            ],
            [
                'title' => 'mystery',
                'displayedTitle' => 'Таємниці'
            ],
            [
                'title' => 'action',
                'displayedTitle' => 'Злочин'
            ],
            [
                'title' => 'thriller',
                'displayedTitle' => 'Трилер'
            ],
            [
                'title' => 'war',
                'displayedTitle' => 'Війна'
            ],
            9 => [
                'title' => 'comedy',
                'displayedTitle' => 'Комедія'
            ]
        ];

        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('displayedTitle');
            $table->timestamps();
        });

        foreach ($genres as $genre) {
            App\Models\Genre::create($genre);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres');
    }
}
