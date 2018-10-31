<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable=['title','body'];

    public function comments(){

        return $this->hasMany(comment::class);
    }


    public function comment(){

        return $this->belongsTo(User::class);
    }
}
