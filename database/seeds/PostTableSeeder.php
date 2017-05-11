<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'code' => '100',
            'title' => 'hello world',
            'despction' => 'hello i go to with you',
        ]);
    }
}
