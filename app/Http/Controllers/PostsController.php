<?php

namespace App\Http\Controllers;

use App\Repositories\Posts;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

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

    public function index(Posts $posts){


//        dd($posts);

        $posts=$posts->all();
//        $posts=(new \App\Repositories\Posts)->all();
//        $posts = Post::latest()
//            ->filter(request(['month','year']))
//            ->get();
//        $posts= Post::all();
//        $posts= Post::latest();




//        $posts= Post::all();



     //   $posts= Post::latest();



        


     //   $archives=Post::archives();

        //return $archives;


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
