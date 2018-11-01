<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
