<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function scopeTriplePeriod($query){
        return $query->where('title', 'LIKE', '...%');
    }
}
