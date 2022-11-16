<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aspek;

class AspekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $data = [
                'pengetahunan',
                'keterampilan',
                'bacaan',
                'hafalan',
            ];

            foreach ($data as $datas ) {
                Aspek::create([
                    'aspek' => $datas,
                ]);
            }
    }
}
