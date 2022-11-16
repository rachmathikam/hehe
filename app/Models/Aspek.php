<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspek extends Model
{
    use HasFactory;

    protected $table = 'aspeks';
    protected $guarded = [];



    /**
     * The roles that belong to the Aspek
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function mapel()
    {
        return $this->belongsToMany(Mapel::class, 'mapel_aspeks', 'mapel_id', 'aspek_id');
    }
}
