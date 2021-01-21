<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviePerson extends Migration
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
                'actorIds' => [
                    1 => [
                        'title' => 'Сессилия',
                        'category' => 'actor'
                    ],
                    2 => [
                        'title' => 'Robie',
                        'category' => 'actor'
                    ],
                    3 => [
                        'title' => 'paul',
                        'category' => 'actor'
                    ],
                    4 => [
                        'title' => 'Bryan',
                        'category' => 'actor'
                    ]
                ]
            ],
            2 => [
                'actorIds' => [
                    5 => [
                        'title' => 'Nicole',
                        'category' => 'actor'
                    ],
                    6 => [
                        'title' => 'Charlie',
                        'category' => 'actor'
                    ],
                    7 => [
                        'title' => 'Nora',
                        'category' => 'actor'
                    ],
                    8 => [
                        'title' => 'paul',
                        'category' => 'actor'
                    ]
                ]
            ],
            3 => [
                'actorIds' => [
                    9 => [
                        'title' => 'Benua',
                        'category' => 'actor'
                    ],
                    10 => [
                        'title' => 'Marta',
                        'category' => 'actor'
                    ],
                    11 => [
                        'title' => 'Hue',
                        'category' => 'actor'
                    ],
                    12 => [
                        'title' => 'Linda',
                        'category' => 'actor'
                    ]
                ]
            ],
            4 => [
                'actorIds' => [
                    13 => [
                        'title' => 'Mike',
                        'category' => 'actor'
                    ],
                    14 => [
                        'title' => 'Marcus',
                        'category' => 'actor'
                    ],
                    15 => [
                        'title' => 'kelie',
                        'category' => 'actor'
                    ],
                    16 => [
                        'title' => 'dorn',
                        'category' => 'actor'
                    ]
                ]
            ],
            5 => [
                'actorIds' => [
                    17 => [
                        'title' => 'Tony',
                        'category' => 'actor'
                    ],
                    18 => [
                        'title' => 'Dohn',
                        'category' => 'actor'
                    ],
                    19 => [
                        'title' => 'dolores',
                        'category' => 'actor'
                    ]
                ]
            ],
            6 => [
                'actorIds' => [
                    20 => [
                        'title' => 'noy',
                        'category' => 'actor'
                    ],
                    21 => [
                        'title' => 'allie',
                        'category' => 'actor'
                    ],
                    22 => [
                        'title' => 'old noy',
                        'category' => 'actor'
                    ],
                    23 => [
                        'title' => 'old allie',
                        'category' => 'actor'
                    ]
                ]
            ],
            7 => [
                'actorIds' => [
                    24 => [
                        'title' => 'Luiza',
                        'category' => 'actor'
                    ], 25 => [
                        'title' => 'William',
                        'category' => 'actor'
                    ], 26 => [
                        'title' => 'Patric',
                        'category' => 'actor'
                    ], 27 => [
                        'title' => 'Katrina',
                        'category' => 'actor'
                    ]
                ]
            ],
            8 => [
                'actorIds' => [
                    28 => [
                        'title' => 'Anna',
                        'category' => 'actor'
                    ], 29 => [
                        'title' => 'Ellise',
                        'category' => 'actor'
                    ], 30 => [
                        'title' => 'Den',
                        'category' => 'actor'
                    ], 31 => [
                        'title' => 'Larry',
                        'category' => 'actor'
                    ]
                ]
            ],
            9 => [
                'actorIds' => [
                    32 => [
                        'title' => 'Simone',
                        'category' => 'actor'
                    ], 33 => [
                        'title' => 'Lea',
                        'category' => 'actor'
                    ], 34 => [
                        'title' => 'Abbie',
                        'category' => 'actor'
                    ], 35 => [
                        'title' => 'Martin',
                        'category' => 'actor'
                    ]
                ]
            ],
            10 => [
                'actorIds' => [
                    36 => [
                        'title' => 'Keroll',
                        'category' => 'actor'
                    ],
                    37 => [
                        'title' => 'Teresa',
                        'category' => 'actor'
                    ],
                    38 => [
                        'title' => 'Kirj',
                        'category' => 'actor'
                    ], 39 => [
                        'title' => 'Abbie',
                        'category' => 'actor'
                    ]
                ]
            ],
            11 => [
                'actorIds' => [
                    40 => [
                        'title' => 'Stanley',
                        'category' => 'actor'
                    ], 41 => [
                        'title' => 'Sofie',
                        'category' => 'actor'
                    ], 42 => [
                        'title' => 'Bryas',
                        'category' => 'actor'
                    ], 43 => [
                        'title' => 'ms',
                        'category' => 'actor'
                    ]
                ]
            ],
            12 => [
                'actorIds' => [
                    44 => [
                        'title' => 'Sloan',
                        'category' => 'actor'
                    ], 45 => [
                        'title' => 'Jekson',
                        'category' => 'actor'
                    ], 46 => [
                        'title' => 'unt',
                        'category' => 'actor'
                    ], 47 => [
                        'title' => 'Nail',
                        'category' => 'actor'
                    ]
                ]
            ],
            13 => [
                'actorIds' => [
                    48 => [
                        'title' => 'Nails',
                        'category' => 'actor'
                    ], 49 => [
                        'title' => 'Sarah',
                        'category' => 'actor'
                    ], 50 => [
                        'title' => 'Tala',
                        'category' => 'actor'
                    ], 51 => [
                        'title' => 'Eyb',
                        'category' => 'actor'
                    ]
                ]
            ],
            14 => [
                'actorIds' => [
                    52 => [
                        'title' => 'Frida',
                        'category' => 'actor'
                    ], 53 => [
                        'title' => 'Diego',
                        'category' => 'actor'
                    ], 54 => [
                        'title' => 'Nelson',
                        'category' => 'actor'
                    ]
                ]
            ]
        ];

        Schema::create('movie_person', function (Blueprint $table) {
            $table->unsignedBigInteger('person_id');
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('role_id');

            $table->foreign('person_id')->references('id')->on('people');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('role_id')->references('id')->on('roles');
        });

        foreach ($movies_actors as $movieId => $movie_actors) {
            $movie = App\Models\Movie::find($movieId);
            foreach ($movie_actors['actorIds'] as $movie_actor_id => $role) {
                $roleModel = App\Models\Role::create($role);
                $movie->people()->attach($movie_actor_id, ['role_id' => $roleModel->id]);
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
        Schema::dropIfExists('movie_person');
    }
}
