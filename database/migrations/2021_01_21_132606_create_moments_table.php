<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMomentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $moments = [
            [
                'movie_id' => 1,
                'image' => 'images/moments/attonement1.png'
            ],
            [
                'movie_id' => 1,
                'image' => 'images/moments/attonement2.png'
            ],
            [
                'movie_id' => 1,
                'image' => 'images/moments/attonement3.png'
            ],
            [
                'movie_id' => 1,
                'image' => 'images/moments/attonement4.png'
            ],
            [
                'movie_id' => 2,
                'image' => 'images/moments/marriage1.png'
            ],
            [
                'movie_id' => 2,
                'image' => 'images/moments/marriage2.png'
            ],
            [
                'movie_id' => 2,
                'image' => 'images/moments/marriage3.png'
            ],
            [
                'movie_id' => 2,
                'image' => 'images/moments/marriage4.png'
            ],          [
                'movie_id' => 3,
                'image' => 'images/moments/knivesOut1.png'
            ],
            [
                'movie_id' => 3,
                'image' => 'images/moments/knivesOut2.png'
            ],
            [
                'movie_id' => 3,
                'image' => 'images/moments/knivesOut3.png'
            ],
            [
                'movie_id' => 3,
                'image' => 'images/moments/knivesOut4.png'
            ],
            [
                'movie_id' => 4,
                'image' => 'images/moments/badBoys1.png'
            ],
            [
                'movie_id' => 4,
                'image' => 'images/moments/badBoys2.png'
            ],
            [
                'movie_id' => 4,
                'image' => 'images/moments/badBoys3.png'
            ],
            [
                'movie_id' => 4,
                'image' => 'images/moments/badBoys4.png'
            ],
            [
                'movie_id' => 5,
                'image' => 'images/moments/greenBook1.png'
            ],
            [
                'movie_id' => 5,
                'image' => 'images/moments/greenBook2.png'
            ],
            [
                'movie_id' => 5,
                'image' => 'images/moments/greenBook3.png'
            ],
            [
                'movie_id' => 5,
                'image' => 'images/moments/greenBook4.png'
            ],
            [
                'movie_id' => 6,
                'image' => 'images/moments/noteBook1.png'
            ],
            [
                'movie_id' => 6,
                'image' => 'images/moments/noteBook2.png'
            ],
            [
                'movie_id' => 6,
                'image' => 'images/moments/noteBook3.png'
            ],
            [
                'movie_id' => 6,
                'image' => 'images/moments/noteBook4.png'
            ],          [
                'movie_id' => 7,
                'image' => 'images/moments/before1.png'
            ],
            [
                'movie_id' => 7,
                'image' => 'images/moments/before2.png'
            ],
            [
                'movie_id' => 7,
                'image' => 'images/moments/before3.png'
            ],
            [
                'movie_id' => 7,
                'image' => 'images/moments/before4.png'
            ],
            [
                'movie_id' => 8,
                'image' => 'images/moments/closer1.png'
            ],
            [
                'movie_id' => 8,
                'image' => 'images/moments/closer2.png'
            ],
            [
                'movie_id' => 8,
                'image' => 'images/moments/closer3.png'
            ],
            [
                'movie_id' => 8,
                'image' => 'images/moments/closer4.png'
            ],
            [
                'movie_id' => 9,
                'image' => 'images/moments/loveSimon1.png'
            ],
            [
                'movie_id' => 9,
                'image' => 'images/moments/loveSimon2.png'
            ],
            [
                'movie_id' => 9,
                'image' => 'images/moments/loveSimon3.png'
            ],
            [
                'movie_id' => 9,
                'image' => 'images/moments/loveSimon4.png'
            ],
            [
                'movie_id' => 10,
                'image' => 'images/moments/carol1.png'
            ],
            [
                'movie_id' => 10,
                'image' => 'images/moments/carol2.png'
            ],
            [
                'movie_id' => 10,
                'image' => 'images/moments/carol3.png'
            ],
            [
                'movie_id' => 10,
                'image' => 'images/moments/carol4.png'
            ],          
            [
                'movie_id' => 11,
                'image' => 'images/moments/magic1.png'
            ],
            [
                'movie_id' => 11,
                'image' => 'images/moments/magic2.png'
            ],
            [
                'movie_id' => 11,
                'image' => 'images/moments/magic3.png'
            ],
            [
                'movie_id' => 11,
                'image' => 'images/moments/magic4.png'
            ],
            [
                'movie_id' => 12,
                'image' => 'images/moments/holidate1.png'
            ],
            [
                'movie_id' => 12,
                'image' => 'images/moments/holidate2.png'
            ],
            [
                'movie_id' => 12,
                'image' => 'images/moments/holidate3.png'
            ],
            [
                'movie_id' => 12,
                'image' => 'images/moments/holidate4.png'
            ],
            [
                'movie_id' => 13,
                'image' => 'images/moments/palmSprings1.png'
            ],
            [
                'movie_id' => 13,
                'image' => 'images/moments/palmSprings2.png'
            ],
            [
                'movie_id' => 13,
                'image' => 'images/moments/palmSprings3.png'
            ],
            [
                'movie_id' => 13,
                'image' => 'images/moments/palmSprings4.png'
            ],          
            [
                'movie_id' => 14,
                'image' => 'images/moments/frida1.png'
            ],
            [
                'movie_id' => 14,
                'image' => 'images/moments/frida2.png'
            ],
            [
                'movie_id' => 14,
                'image' => 'images/moments/frida3.png'
            ],
            [
                'movie_id' => 14,
                'image' => 'images/moments/frida4.png'
            ],
        ];

        Schema::create('moments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movie_id');
            $table->string('image');
            $table->timestamps();
        });

        foreach ($moments as $moment) {
            App\Models\Moment::create($moment);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moments');
    }
}
