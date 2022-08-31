<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'role'  => 'admin',
                'deskripsi' => '-'
            ],
            [
                'role'  => 'wali kelas',
                'deskripsi' => '-'
            ],
            [
                'role'  => 'guru',
                'deskripi' => '-'
            ],
            [
                'role'  => 'siswa',
                'deskripsi' => '-'
            ]
        ]);
    }
}
