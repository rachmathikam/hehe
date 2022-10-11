<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Romawi extends Model
{
    use HasFactory;
    protected $table = 'romawis';
    protected $guarded = [];


    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
