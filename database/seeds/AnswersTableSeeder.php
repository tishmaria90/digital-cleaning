<?php

use Illuminate\Database\Seeder;
use App\Answer;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class AnswersTableSeeder extends Seeder
{
    public function run()
    {
        Answer::create([
            'question_id' => 2,
            'name' => 'Витрины',
            'value' => 20,
            'code' => '2_vitrins',
        ]);
        Answer::create([
            'question_id' => 2,
            'name' => 'Сплошное стекло',
            'value' => 17,
            'code' => '2_solid',
        ]);
        Answer::create([
            'question_id' => 2,
            'name' => 'Большие окна',
            'value' => 14,
            'code' => '2_big',
        ]);
        Answer::create([
            'question_id' => 2,
            'name' => 'Маленькие окна',
            'value' => 12,
            'code' => '2_small',
        ]);

        Answer::create([
            'question_id' => 3,
            'name' => 'С пола',
            'value' => 1,
            'code' => 'floor',
        ]);
        Answer::create([
            'question_id' => 3,
            'name' => 'Альпинисты',
            'value' => 0.7,
            'code' => 'alp',
        ]);
        Answer::create([
            'question_id' => 3,
            'name' => 'Вышка',
            'value' => 0.7,
            'code' => 'high',
        ]);
        Answer::create([
            'question_id' => 3,
            'name' => 'Тура',
            'value' => 0.8,
            'code' => 'tyra',
        ]);

        Answer::create([
            'question_id' => 5,
            'name' => 'Нет',
            'value' => 1,
            'code' => '5_none',
        ]);
        Answer::create([
            'question_id' => 5,
            'name' => 'Мало',
            'value' => 0.9,
            'code' => '5_small',
        ]);
        Answer::create([
            'question_id' => 5,
            'name' => 'Средне',
            'value' => 0.7,
            'code' => '5_medium',
        ]);
        Answer::create([
            'question_id' => 5,
            'name' => 'Полностью',
            'value' => 0.5,
            'code' => '5_full',
        ]);

        Answer::create([
            'question_id' => 6,
            'name' => 'Нет',
            'value' => 1,
            'code' => '6_none',
        ]);
        Answer::create([
            'question_id' => 6,
            'name' => 'Мало',
            'value' => 0.97,
            'code' => '6_small',
        ]);
        Answer::create([
            'question_id' => 6,
            'name' => 'Средне',
            'value' => 0.93,
            'code' => '6_medium',
        ]);
        Answer::create([
            'question_id' => 6,
            'name' => 'Полностью',
            'value' => 0.9,
            'code' => '6_full',
        ]);

        Answer::create([
            'question_id' => 7,
            'name' => 'Нет',
            'value' => 1,
            'code' => '7_none',
        ]);
        Answer::create([
            'question_id' => 7,
            'name' => 'Мало',
            'value' => 0.97,
            'code' => '7_small',
        ]);
        Answer::create([
            'question_id' => 7,
            'name' => 'Средне',
            'value' => 0.93,
            'code' => '7_medium',
        ]);
        Answer::create([
            'question_id' => 7,
            'name' => 'Полностью',
            'value' => 0.9,
            'code' => '7_full',
        ]);

        Answer::create([
            'question_id' => 9,
            'name' => 'Доступ к стеклу не ограничен',
            'value' => 1,
            'code' => '9_full',
        ]);
        Answer::create([
            'question_id' => 9,
            'name' => 'Решетки на стекле',
            'value' => 0.6,
            'code' => 'cell',
        ]);
        Answer::create([
            'question_id' => 9,
            'name' => 'Двойные рамы, открываются',
            'value' => 0.95,
            'code' => 'double',
        ]);
        Answer::create([
            'question_id' => 9,
            'name' => 'Мойка наружного остекления окон из помещения',
            'value' => 0.9,
            'code' => 'frominside',
        ]);
        Answer::create([
            'question_id' => 9,
            'name' => 'Окно не открывается и оно труднодоступное',
            'value' => 0.5,
            'code' => 'hard',
        ]);

        Answer::create([
            'question_id' => 10,
            'name' => 'Выше +2',
            'value' => 1,
            'code' => '10_more',
        ]);
        Answer::create([
            'question_id' => 10,
            'name' => 'Ниже +2 и выше -2',
            'value' => 0.95,
            'code' => '10_less',
        ]);

        Answer::create([
            'question_id' => 11,
            'name' => 'Норма',
            'value' => 1,
            'code' => '11_norm',
        ]);
        Answer::create([
            'question_id' => 11,
            'name' => 'Далеко',
            'value' => 0.95,
            'code' => 'far',
        ]);
    }
}
