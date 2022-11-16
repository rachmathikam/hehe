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

    // public function siswa()
    // {
    //     // return $this->belongsToMany(Kelas::class,'kelas_siswas','siswa_id');
    // }


    public function tahun_pelajaran()
    {
        return $this->morphedByMany(TahunPelajaran::class, 'kelasables');
    }

    public function mapel()
    {
        return $this->morphedByMany(Mapel::class, 'kelasables');
    }
    public function siswa()
    {
        return $this->morphedByMany(Siswa::class, 'kelasables');
    }

}
