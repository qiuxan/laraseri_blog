<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable=[
        'body','post_id','user_id'

    ];


    public function post(){

        return $this->belongsTo(Post::class);
    }

    public function comment(){

        return $this->belongsTo(User::class);
    }
}
