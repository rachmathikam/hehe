<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TahunPelajaran;

class TahunPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tahun_pelajaran =  TahunPelajaran::insert([

            [
                'tahun' =>  '2013',
                'semester' => 'ganjil'
            ],
            [
                'tahun' =>  '2013',
                'semester' => 'genap'
            ],

        ]);
    }
}
