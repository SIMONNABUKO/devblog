@extends('layouts.dashboard');

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Edit Settings Form</div>
            <div class="card-body">
                @if (empty($settings)) <form action="{{route('dashboard.admin.settings.update')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Blog Author</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="text" name="blog_author">
                            @error('blog_author')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Profile
                            Image</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="file" name="profile_image">
                            @error('profile_image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Twitter
                            Link</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="text" name="twitter_link">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Github Link</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="text" name="github_link">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Stackoveflow
                            Link</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="text" name="stackoverflow_link">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">LinkedIn
                            Link</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="text" name="linkedin_link">

                        </div>
                    </div>



                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Author
                            Bio.</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <textarea name="author_bio" class="form-control"></textarea>
                        </div>
                    </div>


                    <div class="form-group row text-center">
                        <button class="btn btn-primary " type="submit">Save</button>
                    </div>

                </form>
                @else
                <form action="{{route('dashboard.admin.settings.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Blog
                            Author</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="text" name="blog_author"
                                value="{{$settings->blog_author}}">
                            @error('blog_author')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Profile
                            Image</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="file" name="profile_image">
                            @error('profile_image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Twitter
                            Link</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="text" name="twitter_link"
                                value="{{$settings->twitter_link}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Github
                            Link</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="text" name="github_link"
                                value="{{$settings->github_link}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Stackoveflow
                            Link</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="text" name="stackoverflow_link"
                                value="{{$settings->stackoverflow_link}}">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">LinkedIn
                            Link</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="text" name="linkedin_link"
                                value="{{$settings->linkedin_link}}">

                        </div>
                    </div>



                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Author
                            Bio.</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <textarea name="author_bio" class="form-control">{{$settings->author_bio}}</textarea>
                        </div>
                    </div>


                    <div class="form-group row text-center">
                        <button class="btn btn-primary " type="submit">Save</button>
                    </div>

                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection