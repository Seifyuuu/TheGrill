<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tables')->insert([
            "name"=>"Florence Building",
            "address"=>"Kings Square",
            "address2"=>" London, LDN1 23",
            "num"=>"+448754 658 048"
        ]);
    }
}
