<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //

    public function index(){
        return view('task2.index');

    }

    public function create(){

        return view('task2.create');

    }
}
