<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heures')->insert([
            ["time" => "11h00 - 23h00"],
            ["time" => "11h00 - 23h00"],
            ["time" => "11h00 - 23h00"],
            ["time" => "11h00 - 23h00"],
            ["time" => "11h00 - 01h00"],
            ["time" => "11h00 - 01h00"],
            ["time" => "11h00 - 01h00"],
        ]);
    }
}
