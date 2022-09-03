<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $tabel = 'grades';
    protected $guarded = [];


    public function siswa(){
        return $this->hasOne(Siswa::class,);
    }

}
