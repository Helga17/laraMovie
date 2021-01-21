<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $actors = [
            [
                'first_name' => 'Кіра',
                'last_name' => 'Найтлі',
                'birthday' => '26 березня 1985',
                'image' => 'images/knightley.png'
            ],
            [
                'first_name' => 'Джеймс',
                'last_name' => 'Макевой',
                'birthday' => '21 квітня 1979',
                'image' => 'images/McAvoy.png'
            ],
            [
                'first_name' => 'Бенедикт',
                'last_name' => 'Камбербетч',
                'birthday' => '19 липня 1976',
                'image' => 'images/cumberbatch.png'
            ],
            [
                'first_name' => 'Сірша',
                'last_name' => 'Ронан',
                'birthday' => '12 квітня 1994',
                'image' => 'images/ronan.png'
            ],
            [
                'first_name' => 'Скарлетт',
                'last_name' => 'Йоганссон',
                'birthday' => '22 листопада 1984',
                'image' => 'images/johansson.png'
            ],
            [
                'first_name' => 'Адам',
                'last_name' => 'Драйвер',
                'birthday' => '19 листопада 1983',
                'image' => 'images/driver.png'
            ],
            [
                'first_name' => 'Лора',
                'last_name' => 'Дерн',
                'birthday' => '10 лютого 1967',
                'image' => 'images/dern.png'
            ],
            [
                'first_name' => 'Алан',
                'last_name' => 'Алда',
                'birthday' => '28 січня 1936',
                'image' => 'images/alda.png'
            ],
            [
                'first_name' => 'Деніел',
                'last_name' => 'Крейг',
                'birthday' => '2 березня 1968',
                'image' => 'images/craig.png'
            ],
            [
                'first_name' => 'Ана де',
                'last_name' => 'Армас',
                'birthday' => '30 квітня 1988',
                'image' => 'images/armas.png'
            ],
            [
                'first_name' => 'Кріс',
                'last_name' => 'Еванс',
                'birthday' => '13 червня 1981',
                'image' => 'images/evans.png'
            ],
            [
                'first_name' => 'Джеймі Лі',
                'last_name' => 'Кертіс',
                'birthday' => '22 листопада 1958',
                'image' => 'images/curtis.png'
            ],
            [
                'first_name' => 'Вілл',
                'last_name' => 'Сміт',
                'birthday' => '25 вересня 1968',
                'image' => 'images/smith.png'
            ],
            [
                'first_name' => 'Мартін',
                'last_name' => 'Ловренс',
                'birthday' => '16 квітня 1965',
                'image' => 'images/lawrence.png'
            ],
            [
                'first_name' => 'Ванесса',
                'last_name' => 'Хадженс',
                'birthday' => '14 грудня 1988',
                'image' => 'images/hudgens.png'
            ],
            [
                'first_name' => 'Александр',
                'last_name' => 'Людвіг',
                'birthday' => '7 травня 1992',
                'image' => 'images/liudvig.png'
            ],
            [
                'first_name' => 'Вігго',
                'last_name' => 'Мортенсен',
                'birthday' => '20 жовтня 1958',
                'image' => 'images/mortensen.png'
            ],
            [
                'first_name' => 'Магершала',
                'last_name' => 'Алі',
                'birthday' => '16 лютого 1974',
                'image' => 'images/mahershala.png'
            ],
            [
                'first_name' => 'Лінда',
                'last_name' => 'Карделліні',
                'birthday' => '25 червня 1975',
                'image' => 'images/cardellini.png'
            ],
            [
                'first_name' => 'Раян',
                'last_name' => 'Гослінг',
                'birthday' => '12 листопада 1980',
                'image' => 'images/gosling.png'
            ],
            [
                'first_name' => 'Рейчел',
                'last_name' => 'МакАдамс',
                'birthday' => '17 листопада 1978',
                'image' => 'images/mcadams.png'
            ],
            [
                'first_name' => 'Джеймс',
                'last_name' => 'Гарнер',
                'birthday' => '7 квітня 1928',
                'image' => 'images/garner.png'
            ],
            [
                'first_name' => 'Джина',
                'last_name' => 'Роулендс',
                'birthday' => '19 червня 1930',
                'image' => 'images/rowlands.png'
            ],
            [
                'first_name' => 'Емілія',
                'last_name' => 'Кларк',
                'birthday' => '23 жовтня 1986',
                'image' => 'images/clark.png'
            ],
            [
                'first_name' => 'Сем',
                'last_name' => 'Клафлін',
                'birthday' => '27 червня 1986',
                'image' => 'images/claflin.png'
            ],
            [
                'first_name' => 'Метью',
                'last_name' => 'Льюїс',
                'birthday' => '27 червня 1989',
                'image' => 'images/lewis.png'
            ],
            [
                'first_name' => 'Дженна',
                'last_name' => 'Коулман',
                'birthday' => '27 квітня 1986',
                'image' => 'images/coleman.png'
            ],
            [
                'first_name' => 'Джулія',
                'last_name' => 'Робертс',
                'birthday' => '28 жовтня 1967',
                'image' => 'images/roberts.png'
            ],
            [
                'first_name' => 'Наталі',
                'last_name' => 'Портман',
                'birthday' => '9 червня 1981',
                'image' => 'images/portman.png'
            ],
            [
                'first_name' => 'Джуд',
                'last_name' => 'Лоу',
                'birthday' => '29 грудня 1972',
                'image' => 'images/law.png'
            ],
            [
                'first_name' => 'Клайв',
                'last_name' => 'Оуен',
                'birthday' => '3 жовтня 1964',
                'image' => 'images/owen.png'
            ],
            [
                'first_name' => 'Нік',
                'last_name' => 'Робінсон',
                'birthday' => '22 березня 1995',
                'image' => 'images/robinson.png'
            ],
            [
                'first_name' => 'Кетрін',
                'last_name' => 'Ленґфорд',
                'birthday' => '29 квітня 1996',
                'image' => 'images/langford.png'
            ],
            [
                'first_name' => 'Александра',
                'last_name' => 'Шіп',
                'birthday' => '16 липня 1991',
                'image' => 'images/shipp.png'
            ],
            [
                'first_name' => 'Лоґан',
                'last_name' => 'Міллер',
                'birthday' => '18 лютого 1992',
                'image' => 'images/miller.png'
            ],
            [
                'first_name' => 'Кейт',
                'last_name' => 'Бланшетт',
                'birthday' => '14 травня 1969',
                'image' => 'images/blanchett.png'
            ],
            [
                'first_name' => 'Руні',
                'last_name' => 'Мара',
                'birthday' => '17 квітня 1985',
                'image' => 'images/ronney.png'
            ],
            [
                'first_name' => 'Кайл',
                'last_name' => 'Чандлер',
                'birthday' => '17 вересня 1965',
                'image' => 'images/chendler.png'
            ],
            [
                'first_name' => 'Сара',
                'last_name' => 'Полсон',
                'birthday' => '17 лютого 1974',
                'image' => 'images/polson.png'
            ],
            [
                'first_name' => 'Колін',
                'last_name' => 'Ферт',
                'birthday' => '10 вересня 1960',
                'image' => 'images/firth.png'
            ],
            [
                'first_name' => 'Емма',
                'last_name' => 'Стоун',
                'birthday' => '6 листопада 1988',
                'image' => 'images/stone.png'
            ],
            [
                'first_name' => 'Геміш',
                'last_name' => 'Лінклейтер',
                'birthday' => '7 липня 1976',
                'image' => 'images/linklater.png'
            ],
            [
                'first_name' => 'Марсія Ґей',
                'last_name' => 'Гарден',
                'birthday' => '14 серпня 1959',
                'image' => 'images/garden.png'
            ],
            [
                'first_name' => 'Емма',
                'last_name' => 'Робертс',
                'birthday' => '10 лютого 1991',
                'image' => 'images/robertsE.png'
            ],
            [
                'first_name' => 'Люк',
                'last_name' => 'Брейсі',
                'birthday' => '26 квітня 1989',
                'image' => 'images/bracey.png'
            ],
            [
                'first_name' => 'Крістін',
                'last_name' => 'Ченоует',
                'birthday' => '24 липня 1968',
                'image' => 'images/chenoweth.png'
            ],
            [
                'first_name' => 'Ендрю',
                'last_name' => 'Бечелор',
                'birthday' => '26 червня 1988',
                'image' => 'images/bachelor.png'
            ],
            [
                'first_name' => 'Енді',
                'last_name' => 'Семберг',
                'birthday' => '18 серпня 1978',
                'image' => 'images/semberg.png'
            ],
            [
                'first_name' => 'Крістін',
                'last_name' => 'Міліоті',
                'birthday' => '16 серпня 1985',
                'image' => 'images/milioti.png'
            ],
            [
                'first_name' => 'Каміла',
                'last_name' => 'Мендес',
                'birthday' => '29 червня 1994',
                'image' => 'images/mendes.png'
            ],
            [
                'first_name' => 'Тайлер',
                'last_name' => 'Хеклін',
                'birthday' => '11 вересня 1987',
                'image' => 'images/hoechlin.png'
            ],
            [
                'first_name' => 'Сальма',
                'last_name' => 'Гаєк',
                'birthday' => '2 вересня 1966',
                'image' => 'images/hayek.png'
            ],
            [
                'first_name' => 'Альфред',
                'last_name' => 'Моліна',
                'birthday' => '24 травня 1953',
                'image' => 'images/molina.png'
            ],
            [
                'first_name' => 'Едвард',
                'last_name' => 'Нортон',
                'birthday' => '18 серпня 1969',
                'image' => 'images/norton.png'
            ],

        ];

        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birthday');
            $table->string('image');
            $table->timestamps();
        });


        foreach ($actors as $actor) {
            App\Models\Person::create($actor);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actors');
    }
}
