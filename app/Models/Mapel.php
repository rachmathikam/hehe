<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $tabel = 'mapels';
    protected $guarded = [];


    public function aspek()
    {
        return $this->belongsToMany(Aspek::class,'mapel_aspeks', 'mapel_id', 'aspek_id');
    }

    public function kelas()
    {
        return $this->morphToMany(Kelas::class, 'kelasables');
    }

    public function guru()
    {
        return $this->belongsTo(Mapel::class);
    }
}
