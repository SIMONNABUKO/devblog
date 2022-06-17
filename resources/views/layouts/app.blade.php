<?php

$settings = App\Models\Setting::latest()->first();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DevBlog - Bootstrap 5 Blog Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{asset('frontend/assets/fontawesome/js/all.min.js')}}"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('frontend/assets/css/theme-1.css')}}">
   <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/monokai-sublime.min.css">


 @toastr_css

</head>

<body>

    <header class="header text-center">
        <h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="index.html">{{$settings ? $settings->blog_author : ''}}</a></h1>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3 rounded-circle mx-auto" src="{{asset('storage/admin/profile/'.$settings->profile_image)}}" alt="image">

                    <div class="bio mb-3">{{$settings ? $settings->author_bio : ''}}</div>
                    <!--//bio-->
                    <ul class="social-list list-inline py-3 mx-auto">
                        <li class="list-inline-item"><a href="{{$settings ? $settings->twitter_link : '#'}}"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="{{$settings ? $settings->linkedin_link : '#'}}"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="{{$settings ? $settings->github_link : '#'}}"><i class="fab fa-github-alt fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="{{$settings ? $settings->stackoverflow_link : '#'}}"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                    </ul>
                    <!--//social-list-->
                    <hr>
                </div>
                <!--//profile-section-->

                <ul class="navbar-nav flex-column text-start">
                    <li class="nav-item">
                        <a class="nav-link active" href="/"><i class="fas fa-home fa-fw me-2"></i>Blog Home
                            <span class="sr-only">(current)</span></a>
                    </li>
  
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user fa-fw me-2"></i>About Me</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="main-wrapper">
        @yield('content')


        <footer class="footer text-center py-2 theme-bg-dark">

            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a
                    href="https://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

        </footer>

    </div>
    <!--//main-wrapper-->


    <!-- Javascript -->
    <script src="{{asset('frontend/assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/highlight.min.js"></script>
	<script>
		hljs.highlightAll();
	</script>
    @jquery
     @toastr_js
    @toastr_render
</body>

</html>