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
        return $this->belongsTo(KelasSiswa::class,'kelas_siswa_id','id');
    }

    public function tapel(){
        return $this->belongsTo(TahunPelajaran::class,'tahun_pelajaran_id','id');
    }

    public function mapelaspek(){
        return $this->belongsTo(MapelAspek::class,'mapel_aspek_id','id');
    }

}
