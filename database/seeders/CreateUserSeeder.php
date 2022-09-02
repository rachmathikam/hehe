<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    public function run()
    {
        User::insert([
            [
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'image' => 'storage/image/hero.jpg',
                'role_id' => '1'
            ],
            [
                'username' => 'Budiman',
                'email' => 'budi@gmail.com',
                'password' => bcrypt('budi123'),
                'image' => 'storage/image/hero.jpg',
                'role_id' => '3'
            ],
            [
                'username' => 'Yasin',
                'email' => 'yasin@gmail.com',
                'password' => bcrypt('yasin123'),
                'image' => 'storage/image/hero.jpg',
                'role_id' => '3'
            ],
            [
                'username' => 'Rachmat Hikam',
                'email' => 'hikam@gmail.com',
                'password' => bcrypt('hikam123'),
                'image' => 'storage/image/hero.jpg',
                'role_id' => '3'
            ],

            [
                'username' => 'Ayu Adni Aurora',
                'email' => 'aura@gmail.com',
                'password' => bcrypt('aura123'),
                'image' => 'storage/image/hero.jpg',
                'role_id' => '4'
            ],
        ]);
    }
}
