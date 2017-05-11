<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'fullname' => 'admin',
            'created' => date('Y-m-d H:i:s'),
            'remember_token' => '',
            'updated_at' => '',
        ]);
    }
}
