<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jadwal;
class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jadwal = Jadwal::insert([
            [
                'hari' => 'senin',
                'mapel_id' => 1
            ],

            [
                'hari' => 'selasa',
                'mapel_id' => 2

            ],
            ]);
    }
}
