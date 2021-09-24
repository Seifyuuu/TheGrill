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
            ["time" => "11h00 - 23h00",
             "jour" =>" Lundi"],
             ["time" => "11h00 - 23h00",
             "jour" =>" Mardi"],
             ["time" => "11h00 - 23h00",
             "jour" =>" Mercredi"],
             ["time" => "11h00 - 23h00",
             "jour" =>" Jeudi"],
             ["time" => "11h00 - 23h00",
             "jour" =>" Vendredi"],
             ["time" => "11h00 - 23h00",
             "jour" =>" Samedi"],
             ["time" => "11h00 - 23h00",
             "jour" =>" Dimanche"]
        ]);
    }
}
