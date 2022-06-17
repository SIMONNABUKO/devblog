@extends('layouts.dashboard');

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Registered Users</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Is Admin</th>
                            <th>Time created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                @if ($user->is_admin == 1)
                                <a href="{{route('dashboard.admin.users.status.toggle', $user->id)}}"
                                    class="btn btn-space btn-success active"><i
                                        class="icon icon-left mdi mdi-check"></i>Yes</a>
                                @else
                                <a href="{{route('dashboard.admin.users.status.toggle', $user->id)}}"
                                    class="btn btn-space btn-danger active"><i
                                        class="icon icon-left mdi mdi-alert-circle"></i>No</a>
                                @endif


                            </td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                        </tr>
                        @empty
                        <p>No users found in our database</p>
                        @endforelse
                    </tbody>
                </table>

                {{ $users->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
</div>
@endsection