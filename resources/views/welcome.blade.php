@extends('layouts.app')

@section('content')
<section class="cta-section theme-bg-light py-5">
    <div class="container text-center single-col-max-width">
        <h2 class="heading">Welcome to the Developers Tutorials blog</h2>
        <div class="intro">Please subscribe to our newsletter receive updates everytime I make a post.</div>
        <div class="single-form-max-width pt-3 mx-auto">
            <form class="signup-form row g-2 g-lg-2 align-items-center" action="{{route('newsletter.email.store')}}"
                method="POST">
                @csrf
                <div class="col-12 col-md-9">
                    <label class="sr-only" for="email">Your email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                </div>
                <div class="col-12 col-md-2">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </div>
            </form>
            <!--//signup-form-->
        </div>
        <!--//single-form-max-width-->
    </div>
    <!--//container-->
</section>


<section class="blog-list px-3 py-5 p-md-5">
    <div class="container single-col-max-width">

        @forelse ($posts as $post)
        <div class="item mb-5">
            <div class="row g-3 g-xl-0">
                <div class="col-2 col-xl-3">
                    <img class="img-fluid post-thumb " src="{{asset('storage/posts/images/'.$post->post_image)}}"
                        alt="image">
                </div>
                <div class="col">
                    <h3 class="title mb-1"><a class="text-link" href="blog-post.html">{{$post->title}}</a></h3>
                    <div class="meta mb-1"><span class="date">Published
                            {{$post->created_at->diffForHumans()}}</span><span
                            class="time">{{$post->category->cat_name}}</span><span class="comment"><a class="text-link"
                                href="#">{{$post->comments->count()}}
                                comments</a></span></div>
                    <div class="intro">{{$post->post_summary}}</div>
                    <a class="text-link" href="{{route('post.show', $post->post_slug)}}">Read more &rarr;</a>
                </div>
                <!--//col-->
            </div>
            <!--//row-->
        </div>
        @empty
        <h1>No posts available</h1>
        @endforelse








        <nav class="blog-nav nav nav-justified my-5">
            <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i
                    class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
            <a class="nav-link-next nav-item nav-link rounded" href="#">Next<i
                    class="arrow-next fas fa-long-arrow-alt-right"></i></a>
        </nav>

    </div>
</section>
@endsection