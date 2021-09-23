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
                "name"=>"twitter"
            ],
            [
                "name"=>"pinterest"
            ],
            [
                "name"=>"dribbble"
            ],
            [
                "name"=>"facebook"
            ],
            [
                "name"=>"behance"
            ],
            [
                "name"=>"linkedin"
            ],
        ]);
    }
}
