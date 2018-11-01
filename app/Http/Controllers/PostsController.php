<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    //

//    public function show($id){
//
//        $post=Post::find($id);
//        return view('task2.show',compact('post'));
//    }


    public function show(Post $post){

        return view('task2.show',compact('post'));
    }

    public function index(){

//        $posts= Post::all();
        $posts= Post::latest()->get();



        return view('task2.index',compact('posts'));

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

        //dd(auth()->user()->id);

        $this->validate(request(),[

            'title'=>'required',
            'body'=>'required'

        ]);


        Post::create(//this way of creating a record needs $fillable or $garded in model
          [
              'title'=>request('title'),
              'body'=>request('body'),
              'user_id'=>auth()->user()->id,
          ]
        );

        return redirect('/testing');

    }
}
