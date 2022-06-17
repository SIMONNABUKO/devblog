@extends('layouts.dashboard');

@section('content')
<div class="row">
    <div class="col-12 col-lg-6 col-xl-3">
        <div class="widget widget-tile">
            <div class="icon mdi mdi-view-list-alt"></div>
            <div class="data-info">
                <div class="desc"><a href="{{route('dashboard.admin.categories.all')}}">Categories</a></div>
                <div class="value"><span class="number" data-toggle="counter"
                        data-end="{{$categories->count()}}">{{$categories->count()}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-3">
        <div class="widget widget-tile">
            <div class="icon mdi mdi-view-list-alt"></div>
            <div class="data-info">
                <div class="desc"><a href="{{route('dashboard.admin.posts.all')}}">Total Posts</a></div>
                <div class="value"><span class="number" data-toggle="counter"
                        data-end="{{$posts->count()}}">{{$posts->count()}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-3">
        <div class="widget widget-tile">
            <div class="icon mdi mdi-settings"></div>
            <div class="data-info">
                <div class="desc"><a href="{{route('dashboard.admin.settings.all')}}">Settings</a></div>
                <div class="value"><span class="number" data-toggle="counter"
                        data-end="{{$settings->count()}}">{{$settings->count()}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-3">
        <div class="widget widget-tile">
            <div class="icon mdi mdi-email"></div>
            <div class="data-info">
                <div class="desc"><a href="{{route('dashboard.admin.newsletter.emails')}}">Subscribers</a></div>
                <div class="value"><span class="number" data-toggle="counter"
                        data-end="{{$emails->count()}}">{{$emails->count()}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection