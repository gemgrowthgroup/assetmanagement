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

    /**
     * Admin
     * password: admin1234
     * User
     * password: employe123
    */
    public function run()
    {
        DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'email' => 'admin@company.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1wTnC.R9W3DXcWAom.yQAu.f9UGTHAp5wcz9DmLE1yF6hKv8xgiq.',
                'isAdmin' => 'true',
                'remember_token' => NULL,
                'created_at' => '2019-03-28 11:29:59',
                'updated_at' => '2019-03-28 11:29:59',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Employee',
                'email' => 'employee@company.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cT3.OZZo.rY7RrLZneZhlu6BQt3iBrABfu9.va6zk7ABNyMRNaaXi',
                'isAdmin' => 'false',
                'remember_token' => NULL,
                'created_at' => '2019-03-28 11:30:55',
                'updated_at' => '2019-03-28 11:30:55',
            ),
        ));
    }
}
