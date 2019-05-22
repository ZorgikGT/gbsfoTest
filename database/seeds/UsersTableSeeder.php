<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ivan',
            'surname' => 'Ivan',
            'email' => 'ivan@gmail.com',
            'password' => bcrypt('ivan'),
        ]);

        DB::table('users')->insert([
            'name' => 'test',
            'surname' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('test'),
        ]);

        DB::table('users')->insert([
            'name' => 'fix',
            'surname' => 'fix',
            'email' => 'fix@gmail.com',
            'password' => bcrypt('fix'),
        ]);
    }
}
