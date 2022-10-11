<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Romawi;
class RomawiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Romawi::insert([
            [
                'name' => 'I'
            ],

            [
                'name' => 'II'
            ],

            [
                'name' => 'III'
            ],

            [
                'name' => 'IV'
            ],

            [
                'name' => 'V'
            ],

            [
                'name' => 'VI'
            ],

            [
                'name' => 'VII'
            ],

            [
                'name' => 'VIII'
            ],

            [
                'name' => 'IX'
            ],


        ]);
    }
}
