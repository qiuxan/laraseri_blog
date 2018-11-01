@extends('layout2.master')

@section('content')

    <div class="col-md-8">
        <h1>Sign in</h1>
        <form action="POST" method="/login">

            {{csrf_field()}}

            <div class="form-group">

                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">

            </div>

            <div class="form-group">

                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">


                <button type="submit" class="btn-primary btn">Sign in</button>
            </div>

        </form>
    </div>



@endsection