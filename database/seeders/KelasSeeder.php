<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;
class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::insert([
            [
                'nama_kelas' => 'VII',
                'kode_kelas' => 'A',
            ],
            [
                'nama_kelas' => 'VII',
                'kode_kelas' => 'B',
            ],
            [
                'nama_kelas' => 'VII',
                'kode_kelas' => 'C',
            ],
            [
                'nama_kelas' => 'VII',
                'kode_kelas' => 'D',
            ],
            [
                'nama_kelas' => 'VIII',
                'kode_kelas' => 'A',
            ],
            [
                'nama_kelas' => 'VIII',
                'kode_kelas' => 'B',
            ],
            [
                'nama_kelas' => 'VIII',
                'kode_kelas' => 'C',
            ],
            [
                'nama_kelas' => 'VIII',
                'kode_kelas' => 'D',
            ],
            [
                'nama_kelas' => 'IX',
                'kode_kelas' => 'A',
            ],
            [
                'nama_kelas' => 'IX',
                'kode_kelas' => 'A',
            ],
            [
                'nama_kelas' => 'IX',
                'kode_kelas' => 'A',
            ],
            [
                'nama_kelas' => 'IX',
                'kode_kelas' => 'A',
            ]


        ]);
    }
}
