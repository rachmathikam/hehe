<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;
class GradeSeeder extends Seeder
{

    public function run()
    {
        Kelas::insert([
            [
                'kode' => 'C',
                'name' => 'VII'
            ],

            [
                 'kode' => 'D',
                 'name' => 'VII'
            ],
            [
                'kode' => 'D',
                'name' => 'VI'
           ]
    ]);
    }
}
