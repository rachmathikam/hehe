<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert([

        [
            'user_id' => '5',
            'nis' => '857',
            'nama' => 'Ayu Adni Aurora',
            'gender' => 'perempuan',
            'tempat_lahir' =>'Sumenep',
            'tanggal_lahir' =>'2012-07-7',
            'alamat' => 'JL.Raung No.15 Block Timur ',
            'agama' => 'Islam',

        ],

            [
            'user_id' => '6',
            'nis' => '992',
            'nama' => 'Sultan Arya',
            'gender' => 'Laki-Laki',
            'tempat_lahir' =>'Sumenep',
            'tanggal_lahir' =>'2014-01-5',
            'alamat' => 'JL.Raung No.15 Block Timur ',
            'agama' => 'Islam',

        ],

            [
            'user_id' => '7',
            'nis' => '1009',
            'nama' => 'Navisa Oktavia',
            'gender' => 'Perempuan',
            'tempat_lahir' =>'Sumenep',
            'tanggal_lahir' =>'2012-08-2',
            'alamat' => 'JL.Raung No.15 Block Timur ',
            'agama' => 'Islam',

        ],


         ]);
    }
}
