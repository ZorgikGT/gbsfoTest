<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'name' => 'Ivan1'
        ]);

        DB::table('books')->insert([
            'name' => 'Ivan2'
        ]);

        DB::table('books')->insert([
            'name' => 'test1'
        ]);

        DB::table('books')->insert([
            'name' => 'test2'
        ]);
    }
}
