<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelass';
    protected $guarded = [];


    public function tahun_pelajaran()
    {
        return $this->belongsTo(TahunPelajaran::class, 'kelasables');
    }
}
