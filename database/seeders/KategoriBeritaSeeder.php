<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriBerita;
class KategoriBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       KategoriBerita::insert([
            [
                'nama_kategori' => 'pendidikan',

            ],
            [
                'nama_kategori' => 'acara',
            ],
            [
                'nama_kategori' => 'kerajinan',
            ],
            [
                'nama_kategori' => 'prestasi',
            ],
    ]);
    }
}
