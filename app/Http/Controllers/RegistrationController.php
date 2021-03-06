<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\Welcome;
use App\User;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;

class RegistrationController extends Controller
{
    //

    public function create(){

        return view('registration.create');

    }

    public function store(RegistrationRequest $request){





       $user= User::create(request(['name','email','password']));

       auth()->login($user);

       \Mail::to($user)->send(new Welcome($user));

        session()->flash('message','thank for signing up');


        return redirect()->home();
    }
}
