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
        Siswa::create(
            [
            'user_id' => '5',
            'grade_id' => 1,
            'nis' => '857',
            'nama' => 'Ayu Adni Aurora',
            'gender' => 'perempuan',
            'tempat_lahir' =>'Sumenep',
            'tanggal_lahir' =>'2012-07-7',
            'alamat' => 'JL.Raung No.15 Block Timur ',
            'agama' => 'Islam'

            ],

    );
    }
}
