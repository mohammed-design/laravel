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
        DB::table('users')->insert([
            'name' => 'Mohammed',
            'email' => 'Mohammed@gmail.com',
            'password' =>'123456789',
        ]);
        DB::table('users')->insert([
            'name' => 'Anas',
            'email' => 'Anas@gmail.com',
            'password' =>'11223344',
        ]);

    }
}
