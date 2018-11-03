<?php

namespace App\Http\Controllers;

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

    public function index(){

//        $posts= Post::all();
        $posts= Post::latest();

        if($month=request('month')){

            $posts->whereMonth('created_at',Carbon::parse($month)->month);

        }

        if($year=request('year')){

            $posts->whereYear('created_at',$year);

        }


        $posts=$posts->get();

//        if($year=request('year')){
//            $posts->whereYear('created_at',$year);
//
//        }

        $archives=Post::selectRaw('year(created_at) year,monthname(created_at) month,count(*) published')

            ->groupBy('year','month')
            ->orderByRaw('min(created_at)')
            ->get()->toArray();

        //return $archives;


        return view('task2.index',compact('posts','archives'));

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
