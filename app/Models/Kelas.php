<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelass';
    protected $guarded = [];
    // protected $with = ['siswa'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class,'kelas_id');
    }

    public function kode()
    {
        return $this->belongsTo(Kode::class,'kode_id');
    }

    public function romawi()
    {
        return $this->belongsTo(Romawi::class,'romawi_id');
    }

    public function guru(){

    }
}
