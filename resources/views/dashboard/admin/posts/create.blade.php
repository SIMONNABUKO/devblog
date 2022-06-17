@extends('layouts.dashboard');

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Create Post Form</div>
            <div class="card-body">
                <form action="{{route('dashboard.admin.posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Post
                            Title</label>
                        <div class="col-12 col-sm-9 col-lg-9">
                            <input class="form-control" type="text" name="post_title">
                            @error('post_title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Post
                            Image</label>
                        <div class="col-12 col-sm-9 col-lg-9">
                            <input class="form-control" type="file" name="post_image">
                            @error('post_image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Post
                            Banner</label>
                        <div class="col-12 col-sm-9 col-lg-9">
                            <input class="form-control" type="file" name="post_banner">
                            @error('post_banner')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Post
                            Category</label>
                        <div class="col-12 col-sm-9 col-lg-9">
                            <select name="category_id" class="form-control" id="">
                                @forelse ($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                @empty

                                @endforelse
                            </select>
                            @error('post_title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <input class="form-control" name="user_id" type="number" value="{{auth()->id()}}" hidden>
                    <input class="form-control" name="author" type="text" value="{{auth()->user()->name}}" hidden>
                    <input class="form-control" name="author_email" type="text" value="{{auth()->user()->email}}"
                        hidden>


                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Post
                            Summary.</label>
                        <div class="col-12 col-sm-9 col-lg-9">
                            <textarea name="post_summary" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Post
                            Content.</label>
                        <div class="col-12 col-sm-9 col-lg-9">
                            <textarea name="post_content" id="editor" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group row text-center">
                        <button class="btn btn-primary " type="submit">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection