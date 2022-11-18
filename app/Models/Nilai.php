<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table =  'nilais';
    protected $guarded = [];

    public function mapel(){
        return $this->BelongSto(Mapel::class,'mapel_id','id');
    }

    public function siswa(){
        return $this->hasMany(Siswa::class,'id', 'siswa_id');
    }


    public function kelassiswa(){
        return $this->hasMany(KelasSiswa::class,'id', 'kelas_siswa_id');
    }

}
