<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/testing/{{$post->id}}">{{$post->title}}</a>

    
    </h2>
    <p class="blog-post-meta">

        {{$post->user->name}} on
        {{$post->created_at->format('jS \\  F Y h:i:s A')}} by <a href="#"></a></p>


    <p>{{$post->body}}</p>
</div><!-- /.blog-post -->