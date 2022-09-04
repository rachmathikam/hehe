<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'grades';
    protected $guarded = [];
    protected $with = ['siswa'];

    public function siswa()
    {
        $this->hasOne(Siswa::class);
    }
}
