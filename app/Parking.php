<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Parking extends Model
{
    // public function getCheckinAttribute($value){
    //     return $this->in_time->diffForHumans($value);
    // }
    // public function getCreateDateAttribute(){
    //     return $this->created_at->diffForHumans();
    // }
    public function parkingcategory(){
        // return $this->belongsTo(Category::class);
        return $this->belongsTo(Category::class);
    }
}
