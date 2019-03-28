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
        	'name' => 'Glenly Pilapil',
        	'email' => 'glenly.pilapil@gmail.com',
        	'isAdmin' => 'true',
        	'password' => 'glenly1234'
        	]);

        DB::table('users')->insert([
        	'name' => 'Charles Ambridge',
        	'email' => 'caambridge0328@yahoo.com',
        	'isAdmin' => 'false',
        	'password' => 'charles1234'
        	]);
    }
}
