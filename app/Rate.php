<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Rate extends Model
{
    protected $fillable = [''];

    public function category(){
        // return $this->belongsTo(Category::class);
        return $this->belongsTo(Category::class);
    }

}
