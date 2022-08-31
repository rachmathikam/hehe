<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $tabel = 'mata_pelajarans';
    protected $guarded = [];


    public function guru(){
        return $this->hasOne(Guru::class,);
    }
}
