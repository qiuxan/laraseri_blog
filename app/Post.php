<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    //

    protected $fillable=['title','body','user_id'];

    public function comments(){

        return $this->hasMany(comment::class);
    }


    public function User(){

        return $this->belongsTo(User::class);
    }



    public function scopeFilter($query,$filters){

        if($month=$filters['month']){

            $query->whereMonth('created_at',Carbon::parse($month)->month);

        }

        if($year=$filters['year']){

            $query->whereYear('created_at',$year);

        }
    }
}
