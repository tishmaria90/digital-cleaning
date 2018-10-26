<?php

use Illuminate\Database\Seeder;
use App\Group;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class GroupsTableSeeder extends Seeder
{
    public function run()
    {
        Group::create([
            'type_id' => 1,
            'name' => 'Площадь остекления',
        ]);
        Group::create([
            'type_id' => 1,
            'name' => 'Вид остекления',
        ]);
        Group::create([
            'type_id' => 1,
            'name' => 'Высотность',
        ]);
        Group::create([
            'type_id' => 1,
            'name' => 'Вид загрязнения',
        ]);
        Group::create([
            'type_id' => 1,
            'name' => 'Подоконники',
        ]);
        Group::create([
            'type_id' => 1,
            'name' => 'Доступность',
        ]);
        Group::create([
            'type_id' => 1,
            'name' => 'Температура воздуха',
        ]);
        Group::create([
            'type_id' => 1,
            'name' => 'Удаленность воды и слива',
        ]);
    }
}
