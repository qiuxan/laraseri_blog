<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //

    public function index(){
        return view('task2.index');

    }

    public function create(){

        return view('task2.create');

    }

    public function store(){


//
//        $post= new Post;
//
//        $post->title=request('title');
//        $post->body=request('body');
//
//        $post->save();

        $this->validate(request(),[

            'title'=>'required',
            'body'=>'required'

        ]);


        Post::create(//this way of creating a record needs $fillable or $garded in model
          [
              'title'=>request('title'),
              'body'=>request('body'),
          ]
        );

        return redirect('/');

    }
}
