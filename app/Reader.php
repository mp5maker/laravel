<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    public function books(){
        return $this->belongsToMany(Book::class);
    }
}
