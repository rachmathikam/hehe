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


           TahunPelajaran::insert([

                [
                    'tahun_akademik' => '2016',

                ],

                [
                    'tahun_akademik'=> '2017',

                ],

                ]) ;

    }
}
