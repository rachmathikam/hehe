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
            AspekSeeder::class,
            CreateUserSeeder::class,
            CreateMapelSeeder::class,
            TahunPelajaranSeeder::class,
            GuruSeeder::class,
            JadwalSeeder::class,
            SiswaSeeder::class,
            KategoriBeritaSeeder::class,
            KelasSeeder::class,
            // MapelAspek::class,

        ]);
}

}
