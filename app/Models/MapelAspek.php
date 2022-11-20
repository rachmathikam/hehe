<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelAspek extends Model
{
    use HasFactory;
    protected $table = 'mapel_aspeks';
    protected $guarded = [];


    public function nilai(){
        return $this->belongsTo(Nilai::class,'id');
    }

    public function aspek()
    {
        return $this->belongsTo(Aspek::class,'aspek_id','id');
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class,'mapel_id','id');
    }
}
