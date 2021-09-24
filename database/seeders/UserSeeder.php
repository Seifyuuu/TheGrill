<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            "name"=>"admin",
            "email"=>"admin@admin.com",
            "password"=>Hash::make("Admin123"),
            "role_id"=>1
        ],
        [
            "name"=>"webmaster",
            "email"=>"web@web.com",
            "password"=>Hash::make("Web12345"),
            "role_id"=>2

        ],
        [
            "name"=>"editeur",
            "email"=>"edit@edit.com",
            "password"=>Hash::make("Edit1234"),
            "role_id"=>3
        ]]);
    }
}
