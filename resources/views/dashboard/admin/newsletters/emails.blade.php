@extends('layouts.dashboard');

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Newsletter emails</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Time created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($emails as $email)
                        <tr>
                            <td>{{$email->email}}</td>
                            <td>{{$email->created_at->diffForHumans()}}</td>
                        </tr>
                        @empty
                        <p>No emails found in our database</p>
                        @endforelse
                    </tbody>
                </table>

                {{ $emails->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
</div>
@endsection