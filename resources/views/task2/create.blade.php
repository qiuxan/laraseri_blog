@extends('layout2.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Create a Post</h1>
        <form method="POST" action="/post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>

                <textarea name="body" id="body"  class="form-control"></textarea>

            </div>


            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>


    @endsection