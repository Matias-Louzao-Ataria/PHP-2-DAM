<?php

namespace Database\Seeders;

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
        \DB::table('users')->insert([
        'name' => 'Matias',
        'email' => 'a@a.com',
        'password' => bcrypt('')]);
    }
}
