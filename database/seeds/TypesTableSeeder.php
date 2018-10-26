<?php

use Illuminate\Database\Seeder;
use App\Type;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class TypesTableSeeder extends Seeder
{
    public function run()
    {
        $type = new Type;
        $type->name = 'Мойка остекления';
        $type->save();
    }
}
