@extends('layout2.master')

@section('content')
    <div class="col-sm-8 blog-main">


        <h1>{{$post->title}}</h1>

        {{$post->body}}

        <hr>

        <div class="comment">
            <ul class="list-group">

                @foreach ($post->comments as $comment)

                    <li class="list-group-item">

                        <strong>{{$comment->created_at->diffForHumans()}}: &nbsp</strong>

                            {{$comment->body}}


                    </li>
                @endforeach
            </ul>
        </div>

        <hr>

        <div class="card">
            <div class="card-block">

                <form method="POST" action="/testing/{{$post->id}}/comments">

                    {{csrf_field()}}

                    <div class="form-group">
                        <textarea class="form-control" placeholder="Your comment here" name="body" >

                        </textarea>
                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
            </div>
        </div>




    </div>

@endsection