<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            RoleSeeder::class,
            CreateMapelSeeder::class,
            // ClassSeeder::class,
            CreateUserSeeder::class,
            GuruSeeder::class,
            // CreateSiswaSeeder::class,
            // EskulSeeder::class
        ]);
}

}
