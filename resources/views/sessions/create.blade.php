@extends('layout2.master')

@section('content')


    <div class="col-sm-8 blog-main">


        <h1>Register</h1>

        <form action="/register" method="POST">

            {{csrf_field()}}

            <div class="form-group">

                <label for="name">Name: </label>
                <input type="text" class="form-control" id="name" name="name" required>

            </div>

            <div class="form-group">

                <label for="email">Email: </label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">

                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">

                <label for="password_confirmation">Password Confirmation :</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="form-group">


                <button type="submit" class="btn-primary btn">Register</button>
            </div>

            <div class="form-group">


                @include('layout2.error')
            </div>


        </form>

    </div><!-- /.blog-main -->



@endsection