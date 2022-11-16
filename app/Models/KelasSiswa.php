<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasSiswa extends Model
{
    use HasFactory;

    protected $table = 'kelas_siswas';
    protected $guarded = [];

    // public function kelas()
    // {
    //     return $this->belongsTo(Kelas::class,'kelas_id','id');
    // }

    // public function siswa()
    // {
    //     return $this->belongsTo(Siswa::class,'siswa_id','id');
    // }

}
