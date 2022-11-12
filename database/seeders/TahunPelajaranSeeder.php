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


           $data = [
                '2016',
                '2017',
                '2018',
                '2019',
                '2020',
                '2021',
                '2022',
           ];

           foreach ($data as $datas) {
                TahunPelajaran::create([
                    'tahun_akademik' => $datas
                ]);
           }
    }
}
