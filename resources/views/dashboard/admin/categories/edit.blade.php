@extends('layouts.dashboard');

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Edit Category Form</div>
            <div class="card-body">
                <form action="{{route('dashboard.admin.categories.update', $category->id)}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Category
                            Name</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input class="form-control" type="text" name="cat_name" value="{{$category->cat_name}}">
                            @error('cat_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Category
                            Desc.</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <textarea name="cat_desc" class="form-control">{{$category->cat_desc}}</textarea>
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