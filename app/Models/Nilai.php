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
        return $this->BelongSto(Mapel::class,);
    }

    public function siswa(){
        return $this->hasMany(Siswa::class,'id', 'siswa_id');
    }
}
