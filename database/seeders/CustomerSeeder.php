<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                "photo"=>"img/team/small1.jpg",
                "name"=>"Frankenstein",
                "text"=>"Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.",
                "rating"=>5
            ],
            [
                "photo"=>"img/team/small1.jpg",
                "name"=>"Yop",
                "text"=>"Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.",
                "rating"=>4
            ],
            [
                "photo"=>"img/team/small1.jpg",
                "name"=>"Rayman",
                "text"=>"Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.",
                "rating"=>3
            ]
        ]);
    }
}
