<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chefs')->insert([
            [
                "name"=>"John Doe",
                "img"=>"1.jpg",

            ],
            [
                "name"=>"Barry Scott",
                "img"=>"2.jpg",

            ],
            [
                "name"=>"Tom Smooth",
                "img"=>"3.jpg",

            ],
            [
                "name"=>"Harvey Wallace",
                "img"=>"4.jpg",

            ],
            ]);
    }
}
