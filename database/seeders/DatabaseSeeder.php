<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AboutSeeder::class,
            ChefSeeder::class,
            FooterSeeder::class,
            IconSeeder::class,
            SociallinkSeeder::class,
            ServiceSeeder::class,
            CustomerSeeder::class,
            TableSeeder::class,
            HeureSeeder::class,
            CustomerSeeder::class
        ]);
    }
}
