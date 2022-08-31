<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $tabel = 'gurus';
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class,);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class,);
    }

}
