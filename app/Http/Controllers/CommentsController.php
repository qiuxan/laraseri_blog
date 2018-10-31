<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //

    public function store($id){



        $comment= new Comment;

        $comment->body=request('body');

        $comment->post_id=$id;

        $comment->user_id=$id;

        $comment->save();

        return back();



    }
}
