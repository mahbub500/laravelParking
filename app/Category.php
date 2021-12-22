<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function rate(){
        return $this->hasMany(Rate::class);
    }
    public function parking(){
     return $this->hasMany(Parking::class);
}
}
