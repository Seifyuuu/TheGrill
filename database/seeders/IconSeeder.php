<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            [
                "name"=>"twitter",
                "footer_id"=>1
            ],
            [
                "name"=>"pinterest",
                "footer_id"=>1
            ],
            [
                "name"=>"dribbble",
                "footer_id"=>1
            ],
            [
                "name"=>"facebook",
                "footer_id"=>1
            ],
            [
                "name"=>"behance",
                "footer_id"=>1
            ],
            [
                "name"=>"linkedin",
                "footer_id"=>1
            ],
        ]);
    }
}
