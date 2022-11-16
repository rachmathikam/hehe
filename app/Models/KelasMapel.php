<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasMapel extends Model
{
    use HasFactory;

    protected $table = 'kelas_mapels';
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'kelas_id','id');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class,'mapel_id','id');
    }
}
