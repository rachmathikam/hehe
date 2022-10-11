<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kode extends Model
{
    use HasFactory;

    protected $table = 'kodes';
    protected $guarded = [];
    // protected $with = ['kelass'];

    public function kelas()
    {
        return $this->hasOne(Kelas::class);
    }

    public function siswa()
    {
        return $this->hasOne(Kelas::class);
    }
}
