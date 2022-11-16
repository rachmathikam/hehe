<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mapel;

class CreateMapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mapel::insert([
            [
                'name' => 'Bahasa Indonesia',

            ],
            [
                'name' => 'Matematika',
            ],
            [
                'name' => 'Ilmu Pengetahuan Alam',
            ],
            [
                'name' => 'Ilmu Pengetahuan Sosial',
            ],
            [
                'name' => 'Bahasa Arab',
            ],
            [
                'name' => 'Agama',
            ],
            [
                'name' => 'Bahasa Inggris',
            ]

        ]);
    }
}
