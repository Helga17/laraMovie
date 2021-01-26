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
            1 => [
                'first_name' => 'Кіра',
                'last_name' => 'Найтлі',
                'birthday' => '26 березня 1985',
                'image' => 'images/people/knightley.png'
            ],
            2 => [
                'first_name' => 'Джеймс',
                'last_name' => 'Макевой',
                'birthday' => '21 квітня 1979',
                'image' => 'images/people/McAvoy.png'
            ],
            3 => [
                'first_name' => 'Бенедикт',
                'last_name' => 'Камбербетч',
                'birthday' => '19 липня 1976',
                'image' => 'images/people/cumberbatch.png'
            ],
            4 => [
                'first_name' => 'Сірша',
                'last_name' => 'Ронан',
                'birthday' => '12 квітня 1994',
                'image' => 'images/people/ronan.png'
            ],
            5 => [
                'first_name' => 'Скарлетт',
                'last_name' => 'Йоганссон',
                'birthday' => '22 листопада 1984',
                'image' => 'images/people/johansson.png'
            ],
            6 => [
                'first_name' => 'Адам',
                'last_name' => 'Драйвер',
                'birthday' => '19 листопада 1983',
                'image' => 'images/people/driver.png'
            ],
            7 => [
                'first_name' => 'Лора',
                'last_name' => 'Дерн',
                'birthday' => '10 лютого 1967',
                'image' => 'images/people/dern.png'
            ],
            8 => [
                'first_name' => 'Алан',
                'last_name' => 'Алда',
                'birthday' => '28 січня 1936',
                'image' => 'images/people/alda.png'
            ],
            9 => [
                'first_name' => 'Деніел',
                'last_name' => 'Крейг',
                'birthday' => '2 березня 1968',
                'image' => 'images/people/craig.png'
            ],
            10 => [
                'first_name' => 'Ана де',
                'last_name' => 'Армас',
                'birthday' => '30 квітня 1988',
                'image' => 'images/people/armas.png'
            ],
            11 => [
                'first_name' => 'Кріс',
                'last_name' => 'Еванс',
                'birthday' => '13 червня 1981',
                'image' => 'images/people/evans.png'
            ],
            12 => [
                'first_name' => 'Джеймі Лі',
                'last_name' => 'Кертіс',
                'birthday' => '22 листопада 1958',
                'image' => 'images/people/curtis.png'
            ],
            13 => [
                'first_name' => 'Вілл',
                'last_name' => 'Сміт',
                'birthday' => '25 вересня 1968',
                'image' => 'images/people/smith.png'
            ],
            14 => [
                'first_name' => 'Мартін',
                'last_name' => 'Ловренс',
                'birthday' => '16 квітня 1965',
                'image' => 'images/people/lawrence.png'
            ],
            15 => [
                'first_name' => 'Ванесса',
                'last_name' => 'Хадженс',
                'birthday' => '14 грудня 1988',
                'image' => 'images/people/hudgens.png'
            ],
            16 => [
                'first_name' => 'Александр',
                'last_name' => 'Людвіг',
                'birthday' => '7 травня 1992',
                'image' => 'images/people/liudvig.png'
            ],
            17 => [
                'first_name' => 'Вігго',
                'last_name' => 'Мортенсен',
                'birthday' => '20 жовтня 1958',
                'image' => 'images/people/mortensen.png'
            ],
            18 => [
                'first_name' => 'Магершала',
                'last_name' => 'Алі',
                'birthday' => '16 лютого 1974',
                'image' => 'images/people/mahershala.png'
            ],
            19 => [
                'first_name' => 'Лінда',
                'last_name' => 'Карделліні',
                'birthday' => '25 червня 1975',
                'image' => 'images/people/cardellini.png'
            ],
            20 => [
                'first_name' => 'Раян',
                'last_name' => 'Гослінг',
                'birthday' => '12 листопада 1980',
                'image' => 'images/people/gosling.png'
            ],
            21 => [
                'first_name' => 'Рейчел',
                'last_name' => 'МакАдамс',
                'birthday' => '17 листопада 1978',
                'image' => 'images/people/mcadams.png'
            ],
            22 => [
                'first_name' => 'Джеймс',
                'last_name' => 'Гарнер',
                'birthday' => '7 квітня 1928',
                'image' => 'images/people/garner.png'
            ],
            23 => [
                'first_name' => 'Джина',
                'last_name' => 'Роулендс',
                'birthday' => '19 червня 1930',
                'image' => 'images/people/rowlands.png'
            ],
            24 => [
                'first_name' => 'Емілія',
                'last_name' => 'Кларк',
                'birthday' => '23 жовтня 1986',
                'image' => 'images/people/clark.png'
            ],
            25 => [
                'first_name' => 'Сем',
                'last_name' => 'Клафлін',
                'birthday' => '27 червня 1986',
                'image' => 'images/people/claflin.png'
            ],
            26 => [
                'first_name' => 'Метью',
                'last_name' => 'Льюїс',
                'birthday' => '27 червня 1989',
                'image' => 'images/people/lewis.png'
            ],
            27 => [
                'first_name' => 'Дженна',
                'last_name' => 'Коулман',
                'birthday' => '27 квітня 1986',
                'image' => 'images/people/coleman.png'
            ],
            28 => [
                'first_name' => 'Джулія',
                'last_name' => 'Робертс',
                'birthday' => '28 жовтня 1967',
                'image' => 'images/people/roberts.png'
            ],
            29 => [
                'first_name' => 'Наталі',
                'last_name' => 'Портман',
                'birthday' => '9 червня 1981',
                'image' => 'images/people/portman.png'
            ],
            30 => [
                'first_name' => 'Джуд',
                'last_name' => 'Лоу',
                'birthday' => '29 грудня 1972',
                'image' => 'images/people/law.png'
            ],
            31 => [
                'first_name' => 'Клайв',
                'last_name' => 'Оуен',
                'birthday' => '3 жовтня 1964',
                'image' => 'images/people/owen.png'
            ],
            32 => [
                'first_name' => 'Нік',
                'last_name' => 'Робінсон',
                'birthday' => '22 березня 1995',
                'image' => 'images/people/robinson.png'
            ],
            33 => [
                'first_name' => 'Кетрін',
                'last_name' => 'Ленґфорд',
                'birthday' => '29 квітня 1996',
                'image' => 'images/people/langford.png'
            ],
            34 => [
                'first_name' => 'Александра',
                'last_name' => 'Шіп',
                'birthday' => '16 липня 1991',
                'image' => 'images/people/shipp.png'
            ],
            35 => [
                'first_name' => 'Лоґан',
                'last_name' => 'Міллер',
                'birthday' => '18 лютого 1992',
                'image' => 'images/people/miller.png'
            ],
            36 => [
                'first_name' => 'Кейт',
                'last_name' => 'Бланшетт',
                'birthday' => '14 травня 1969',
                'image' => 'images/people/blanchett.png'
            ],
            37 => [
                'first_name' => 'Руні',
                'last_name' => 'Мара',
                'birthday' => '17 квітня 1985',
                'image' => 'images/people/ronney.png'
            ],
            38 => [
                'first_name' => 'Кайл',
                'last_name' => 'Чандлер',
                'birthday' => '17 вересня 1965',
                'image' => 'images/people/chenlder.png'
            ],
            39 => [
                'first_name' => 'Сара',
                'last_name' => 'Полсон',
                'birthday' => '17 лютого 1974',
                'image' => 'images/people/polson.png'
            ],
            40 => [
                'first_name' => 'Колін',
                'last_name' => 'Ферт',
                'birthday' => '10 вересня 1960',
                'image' => 'images/people/firth.png'
            ],
            41 => [
                'first_name' => 'Емма',
                'last_name' => 'Стоун',
                'birthday' => '6 листопада 1988',
                'image' => 'images/people/stone.png'
            ],
            42 => [
                'first_name' => 'Геміш',
                'last_name' => 'Лінклейтер',
                'birthday' => '7 липня 1976',
                'image' => 'images/people/linklater.png'
            ],
            43 => [
                'first_name' => 'Марсія',
                'last_name' => 'Гарден',
                'birthday' => '14 серпня 1959',
                'image' => 'images/people/garden.png'
            ],
            44 => [
                'first_name' => 'Емма',
                'last_name' => 'Робертс',
                'birthday' => '10 лютого 1991',
                'image' => 'images/people/robertsE.png'
            ],
            45 => [
                'first_name' => 'Люк',
                'last_name' => 'Брейсі',
                'birthday' => '26 квітня 1989',
                'image' => 'images/people/bracey.png'
            ],
            46 => [
                'first_name' => 'Крістін',
                'last_name' => 'Ченоует',
                'birthday' => '24 липня 1968',
                'image' => 'images/people/chenoweth.png'
            ],
            47 => [
                'first_name' => 'Ендрю',
                'last_name' => 'Бечелор',
                'birthday' => '26 червня 1988',
                'image' => 'images/people/bachelor.png'
            ],
            48 => [
                'first_name' => 'Енді',
                'last_name' => 'Семберг',
                'birthday' => '18 серпня 1978',
                'image' => 'images/people/semberg.png'
            ],
            49 => [
                'first_name' => 'Крістін',
                'last_name' => 'Міліоті',
                'birthday' => '16 серпня 1985',
                'image' => 'images/people/milioti.png'
            ],
            50 => [
                'first_name' => 'Каміла',
                'last_name' => 'Мендес',
                'birthday' => '29 червня 1994',
                'image' => 'images/people/mendes.png'
            ],
            51 => [
                'first_name' => 'Тайлер',
                'last_name' => 'Хеклін',
                'birthday' => '11 вересня 1987',
                'image' => 'images/people/hoechlin.png'
            ],
            52 => [
                'first_name' => 'Сальма',
                'last_name' => 'Гаєк',
                'birthday' => '2 вересня 1966',
                'image' => 'images/people/hayek.png'
            ],
            53 => [
                'first_name' => 'Альфред',
                'last_name' => 'Моліна',
                'birthday' => '24 травня 1953',
                'image' => 'images/people/molina.png'
            ],
            54 => [
                'first_name' => 'Едвард',
                'last_name' => 'Нортон',
                'birthday' => '18 серпня 1969',
                'image' => 'images/people/norton.png'
            ],
            // director
            55 => [
                'first_name' => 'Джо',
                'last_name' => 'Райт',
                'birthday' => '25 серпня 1972',
                'image' => 'images/people/wright.png'
            ],
            56 => [
                'first_name' => 'Ноа',
                'last_name' => 'Баумбах',
                'birthday' => '3 вересня 1969 ',
                'image' => 'images/people/baumbach.png'
            ],
            57 => [
                'first_name' => 'Раян',
                'last_name' => 'Джонсон',
                'birthday' => '17 грудня 1973',
                'image' => 'images/people/johnson.png'
            ],
            58 => [
                'first_name' => 'Аділь Ель',
                'last_name' => 'Арбі',
                'birthday' => '30 червня 1988',
                'image' => 'images/people/adil.png'
            ],
            59 => [
                'first_name' => 'Білал',
                'last_name' => 'Фалла',
                'birthday' => ' 4 січня 1986',
                'image' => 'images/people/fallah.png'
            ],
            60 => [
                'first_name' => 'Майкл',
                'last_name' => 'Бей',
                'birthday' => '17 лютого 1965',
                'image' => 'images/people/bay.png'
            ],
            61 => [
                'first_name' => 'Пітер',
                'last_name' => 'Фарреллі',
                'birthday' => '17 грудня 1956',
                'image' => 'images/people/farrelly.png'
            ],
            62 => [
                'first_name' => 'Нік',
                'last_name' => 'Кассаветіс',
                'birthday' => '21 травня 1959',
                'image' => 'images/people/cassavetes.png'
            ],
            63 => [
                'first_name' => 'Теа',
                'last_name' => 'Шеррок',
                'birthday' => '04 серпня 1969',
                'image' => 'images/people/sharrock.png'
            ],
            64 => [
                'first_name' => 'Майк',
                'last_name' => 'Ніколс',
                'birthday' => '6 листопада 1931',
                'image' => 'images/people/nichols.png'
            ],
            65 => [
                'first_name' => 'Грег',
                'last_name' => 'Берланті',
                'birthday' => '24 травня 1972',
                'image' => 'images/people/berlanti.png'
            ],
            66 => [
                'first_name' => 'Тодд',
                'last_name' => 'Гейнс',
                'birthday' => ' 2 січня 1961',
                'image' => 'images/people/haynes.png'
            ],
            67 => [
                'first_name' => 'Вуді',
                'last_name' => 'Аллен',
                'birthday' => '1 грудня 1935 ',
                'image' => 'images/people/allen.png'
            ],
            68 => [
                'first_name' => 'Джон',
                'last_name' => 'Вайтселл',
                'birthday' => '12 липня 1961',
                'image' => 'images/people/whitesell.png'
            ],
            69 => [
                'first_name' => 'Макс',
                'last_name' => 'Барбаков',
                'birthday' => '',
                'image' => 'images/people/barbakow.png'
            ],
            70 => [
                'first_name' => 'Джулі',
                'last_name' => 'Теймор',
                'birthday' => '15 грудня 1952 ',
                'image' => 'images/people/taymor.png'
            ],
            71 => [
                'first_name' => 'Меттью',
                'last_name' => 'Макфедьєн',
                'birthday' => '17 жовтня 1974',
                'image' => 'images/people/macfadyen.png'
            ],
            72 => [
                'first_name' => 'Дональд',
                'last_name' => 'Сазерленд',
                'birthday' => '17 липня 1935 ',
                'image' => 'images/people/sutherland.png'
            ]

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
