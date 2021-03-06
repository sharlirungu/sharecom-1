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
            'name' => 'admin',
            'title' => 'Supreme',
            'email' => 'admin@thePips.com',
            'role' => 'Administrator',
            'password' => bcrypt('123456'),
            'verified' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'title' => 'Mr',
            'email' => 'user@thePips.com',
            'password' => bcrypt('123456'),
            'verified' => 1,
        ]);
    }
}
