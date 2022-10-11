<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kode;

class KodeKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kode::insert([
            [
                'kode'=> 'A'
            ],
            [
                'kode'=> 'B'
            ],
             [
                'kode'=> 'C'
             ],
             [
                'kode'=> 'D'
             ],


            ]);
    }
}
