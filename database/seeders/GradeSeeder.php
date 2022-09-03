<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grade;
class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::insert([
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
