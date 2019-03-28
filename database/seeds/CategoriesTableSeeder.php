<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Vehicle',
                'created_at' => '2019-03-28 12:19:06',
                'updated_at' => '2019-03-28 12:19:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Phone',
                'created_at' => '2019-03-28 12:19:14',
                'updated_at' => '2019-03-28 12:19:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Laptop',
                'created_at' => '2019-03-28 12:19:19',
                'updated_at' => '2019-03-28 12:19:19',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Firearm',
                'created_at' => '2019-03-28 12:20:40',
                'updated_at' => '2019-03-28 12:20:40',
            ),
        ));
    }
}
