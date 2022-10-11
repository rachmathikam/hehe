<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\Romawi;
use App\Models\Kode;
use App\Models\Guru;
class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $romawis = Romawi::all();
        $kodes = Kode::all();

        // Kelas::insert([
        //     [
        //         'kode_id'=> '1',
        //         'romawi_id'=> '',


        //     ],

        //     [
        //         'kode_id' => '2',


        //     ],

        //     [
        //         'kode_id' => '3',


        //     ],

        //     [
        //         'kode_id' => '4',


        //     ]

        // ]);

        foreach ($romawis as $romawi) {
            foreach ($kodes as $kode) {
                $kelas = Kelas::create([
                    'romawi_id' => $romawi['id'],
                    'kode_id'   => $kode['id'],
                    'guru_id'   => mt_rand(1, Guru::count()),
                ]);
            }
        }
    }
}
