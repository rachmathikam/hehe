<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MapelAspek;
class MapelAspekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            1,
            1
            ],
            [
            1,
            2
            ],
            [
            2,
            1
            ],
            [
            2,
            2
            ],
        ];

        foreach ($data as $datas ) {
            MapelAspek::create([
                'mapel_id' => $datas,
                'aspek_id' => $datas
            ]);
        }
    }
}
