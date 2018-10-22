<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    //
    public function index(){


//    $tasks=DB::table('tasks')->get();
        $tasks=Task::all();
//    return $tasks;
        return view('tasks.index',compact('tasks'));
    }

    public function show(Task $task){

        //return $task;
//        dd($id);

        //$task=Task::find($id);

//        dd($task);

        return view('tasks/show',compact('task'));
    }


}
