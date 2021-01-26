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
                        'title' => 'Сесілія Талліс',
                        'category' => 'actor'
                    ],
                    2 => [
                        'title' => 'Роббі Тернер',
                        'category' => 'actor'
                    ],
                    3 => [
                        'title' => 'Пол Маршал',
                        'category' => 'actor'
                    ],
                    4 => [
                        'title' => 'Брайоні Талліс',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                   55 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            2 => [
                'actorIds' => [
                    5 => [
                        'title' => 'Ніколь Барбер',
                        'category' => 'actor'
                    ],
                    6 => [
                        'title' => 'Чарлі Барбер',
                        'category' => 'actor'
                    ],
                    7 => [
                        'title' => 'Нора Феншоу',
                        'category' => 'actor'
                    ],
                    8 => [
                        'title' => 'Берт Спіц',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    56 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            3 => [
                'actorIds' => [
                    9 => [
                        'title' => 'Бенуа Бланк',
                        'category' => 'actor'
                    ],
                    10 => [
                        'title' => 'Марта',
                        'category' => 'actor'
                    ],
                    11 => [
                        'title' => "Г'ю Драйсдейл",
                        'category' => 'actor'
                    ],
                    12 => [
                        'title' => 'Лінда Драйсдейл',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    57 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            4 => [
                'actorIds' => [
                    13 => [
                        'title' => 'Майк Ловрі',
                        'category' => 'actor'
                    ],
                    14 => [
                        'title' => 'Маркус Бернетт',
                        'category' => 'actor'
                    ],
                    15 => [
                        'title' => 'Келлі',
                        'category' => 'actor'
                    ],
                    16 => [
                        'title' => 'Дорн',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    58 => [
                        'title' => '',
                        'category' => 'director'
                    ],
                    59 => [
                        'title' => '',
                        'category' => 'director'
                    ],
                    60 => [
                        'title' => '',
                        'category' => 'director'
                    ],
                ]
            ],
            5 => [
                'actorIds' => [
                    17 => [
                        'title' => 'Тоні Валлелонга',
                        'category' => 'actor'
                    ],
                    18 => [
                        'title' => 'Дон Ширлі',
                        'category' => 'actor'
                    ],
                    19 => [
                        'title' => 'Долорес',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    61 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            6 => [
                'actorIds' => [
                    20 => [
                        'title' => 'Ной Келхун',
                        'category' => 'actor'
                    ],
                    21 => [
                        'title' => 'Еллі Гамільтон',
                        'category' => 'actor'
                    ],
                    22 => [
                        'title' => 'старий Ной',
                        'category' => 'actor'
                    ],
                    23 => [
                        'title' => 'стара Еллі',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    62 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            7 => [
                'actorIds' => [
                    24 => [
                        'title' => 'Луїза Кларк',
                        'category' => 'actor'
                    ], 25 => [
                        'title' => 'Вільям Трейнор',
                        'category' => 'actor'
                    ], 26 => [
                        'title' => 'Патрік',
                        'category' => 'actor'
                    ], 27 => [
                        'title' => 'Катріна Кларк',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    63 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            8 => [
                'actorIds' => [
                    28 => [
                        'title' => 'Анна',
                        'category' => 'actor'
                    ], 29 => [
                        'title' => 'Еліс',
                        'category' => 'actor'
                    ], 30 => [
                        'title' => 'Ден',
                        'category' => 'actor'
                    ], 31 => [
                        'title' => 'Ларрі',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    64 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            9 => [
                'actorIds' => [
                    32 => [
                        'title' => 'Саймон Спір',
                        'category' => 'actor'
                    ], 33 => [
                        'title' => 'Леа Берк',
                        'category' => 'actor'
                    ], 34 => [
                        'title' => 'Еббі Сусо',
                        'category' => 'actor'
                    ], 35 => [
                        'title' => 'Мартін Еддісон',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    65 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            10 => [
                'actorIds' => [
                    36 => [
                        'title' => 'Керол Ейрд',
                        'category' => 'actor'
                    ],
                    37 => [
                        'title' => 'Тереза Беліве',
                        'category' => 'actor'
                    ],
                    38 => [
                        'title' => 'Гердж Ейрд',
                        'category' => 'actor'
                    ], 39 => [
                        'title' => 'Еббі',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    66 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            11 => [
                'actorIds' => [
                    40 => [
                        'title' => 'Стенлі Кроуфорд',
                        'category' => 'actor'
                    ], 41 => [
                        'title' => 'Софія Бейкер',
                        'category' => 'actor'
                    ], 42 => [
                        'title' => 'Брайс',
                        'category' => 'actor'
                    ], 43 => [
                        'title' => 'місіс Бейкер',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    67 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            12 => [
                'actorIds' => [
                    44 => [
                        'title' => 'Слоан Бенсон',
                        'category' => 'actor'
                    ], 45 => [
                        'title' => 'Джексон',
                        'category' => 'actor'
                    ], 46 => [
                        'title' => 'Сьюзан',
                        'category' => 'actor'
                    ], 47 => [
                        'title' => 'Ніл',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    68 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            13 => [
                'actorIds' => [
                    48 => [
                        'title' => 'Найлз',
                        'category' => 'actor'
                    ], 49 => [
                        'title' => 'Сара',
                        'category' => 'actor'
                    ], 50 => [
                        'title' => 'Тала',
                        'category' => 'actor'
                    ], 51 => [
                        'title' => 'Ейб',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    69 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            14 => [
                'actorIds' => [
                    52 => [
                        'title' => 'Фріда Кало',
                        'category' => 'actor'
                    ], 53 => [
                        'title' => 'Дієго Рівера',
                        'category' => 'actor'
                    ], 54 => [
                        'title' => 'Нельсон Рокфеллер',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    70 => [
                        'title' => '',
                        'category' => 'director'
                    ]
                ]
            ],
            15 => [
                'actorIds' => [
                    1 => [
                        'title' => 'Елізабет Беннет',
                        'category' => 'actor'
                    ], 71 => [
                        'title' => 'Фіцвільям Дарсі',
                        'category' => 'actor'
                    ], 72 => [
                        'title' => 'пан Беннет',
                        'category' => 'actor'
                    ]
                ],
                'directorIds' => [
                    55 => [
                        'title' => '',
                        'category' => 'director'
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

            if (!array_key_exists('directorIds', $movie_actors)) {
                continue;
            }
            foreach ($movie_actors['directorIds'] as $movie_actor_id => $role) {
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
