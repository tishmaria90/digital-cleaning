<?php

use Illuminate\Database\Seeder;
use App\Question;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        Question::create([
            'group_id' => 1,
            'name' => 'Площадь остекления',
            'question_type' => 'number',
            'code' => 'Ploshad',
        ]);
        Question::create([
            'group_id' => 2,
            'name' => 'Вид остекления',
            'question_type' => 'select',
            'code' => 'BaseNorma',
        ]);
        Question::create([
            'group_id' => 3,
            'name' => 'Высотность',
            'question_type' => 'select',
            'code' => 'K1',
        ]);/*
        Question::create([
            'group_id' => 3,
            'name' => 'Высота туры',
            'question_type' => 'select',
            'code' => 'Tura',
            'options' => json_encode([
                (10 * 100/60) => '1 этаж',
                (15 * 100/60) => '2 этаж',
                (20 * 100/60) => '3 этаж',
                (25 * 100/60) => '4 этаж'
            ]),
            'sort' => 504,
            'default' => 0,
            'condition' => '$K1$ == 0.8'
        ]);*/
        Question::create([
            'group_id' => 4,
            'name' => 'Грязь, пыль',
            'question_type' => 'checkbox',
            'code' => 'K2',
        ]);
        Question::create([
            'group_id' => 4,
            'name' => 'Послестроительные',
            'question_type' => 'select',
            'code' => 'K3',
        ]);
        Question::create([
            'group_id' => 4,
            'name' => 'Солевые подтеки',
            'question_type' => 'select',
            'code' => 'K4',
        ]);
        Question::create([
            'group_id' => 4,
            'name' => 'Скотч, наклейки',
            'question_type' => 'select',
            'code' => 'K5',
        ]);
        Question::create([
            'group_id' => 5,
            'name' => 'Только у окон',
            'question_type' => 'checkbox',
            'code' => 'K6',
        ]);
        Question::create([
            'group_id' => 6,
            'name' => 'Доступность',
            'question_type' => 'select',
            'code' => 'K7',
        ]);
        Question::create([
            'group_id' => 7,
            'name' => 'Температура воздуха',
            'question_type' => 'select',
            'code' => 'K8',
        ]);
        Question::create([
            'group_id' => 8,
            'name' => 'Удаленность воды и слива',
            'question_type' => 'select',
            'code' => 'K9',
        ]);
    }
}
