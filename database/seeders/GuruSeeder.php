<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use DB;
use App\Models\Mapel;



class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            [
                'user_id' => '3',
                'agama' => 'Islam',
                'alamat' => 'Jln.Guntur',
                'gender' => 'laki-laki',
                'nama' => 'Yasin',
                'nip' => '126732634343',
                'no_telp' => '088437643',
                'tanggal_lahir' => '1990-12-2',
                'tempat_lahir' => 'Sumenep',
                'mapel_id'  => 1
            ],
            [
                'user_id' => '2',
                'agama' => 'Islam',
                'alamat' => 'Jln.Meranggi',
                'gender' => 'laki-laki',
                'nip' => '126732632133',
                'nama' => 'Budiman',
                'no_telp' => '08943774363',
                'tanggal_lahir' => '1995-12-2',
                'tempat_lahir' => 'Sumenep',
                'mapel_id' => 2
            ],
            [
                'user_id' => '4',
                'agama' => 'Islam',
                'alamat' => 'Jln.Meranggi',
                'gender' => 'laki-laki',
                'nip' => '126732632133',
                'nama' => 'Rachmat Hikam',
                'no_telp' => '08943774363',
                'tanggal_lahir' => '1995-12-2',
                'tempat_lahir' => 'Sumenep',
                'mapel_id' => 5
            ]
        ]);

    }
}
