<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        $user = new \App\User;
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123456');
        $user->is_admin = 1;
        $user->save();

        $user = new \App\User;
        $user->name = 'test';
        $user->email = 'test@test.com';
        $user->password = Hash::make('qwerty');
        $user->is_admin = 0;
        $user->save();
    }
}
