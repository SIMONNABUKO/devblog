@extends('layouts.app')

@section('content')
<article class="blog-post px-3 py-5 p-md-5">
    <div class="container single-col-max-width">
        <header class="blog-post-header">
            <h2 class="title mb-2">{{$post->post_title}}</h2>
            <div class="meta mb-3"><span class="date">Published {{$post->created_at->diffForHumans()}}</span><span
                    class="time">{{$post->category->cat_name}}</span><span class="comment"><a class="text-link"
                        href="#">{{$post->comments->count()}} comments</a></span></div>
        </header>

        <div class="blog-post-body">
            <figure class="blog-banner">
                <a href="#"><img class="img-fluid" src="{{asset('storage/posts/banners/'.$post->post_banner)}}"
                        alt="image"></a>

                {!!$post->post_content!!}


        </div>



        <div class="blog-comments-section">
            <div id="disqus_thread"></div>

        </div>
        <!--//blog-comments-section-->

    </div>
    <!--//container-->
</article>
@endsection