<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    // public function getCheckinAttribute($value){
    //     return $this->in_time->diffForHumans($value);
    // }
    public function getCreateDateAttribute(){
        return $this->created_at->diffForHumans();
    }
    protected $fillable = [''];
    protected $table = 'parking';
    public function category(){
        // return $this->belongsTo(Category::class);
        return $this->belongsTo(Category::class);
    }
    public static function boot(){
        parent::boot();
        static::creating(function($model){
            $model->parking_code = Parking::where('parking_code', $model->parking_code)->max('id')+1;
        });
    }
}
