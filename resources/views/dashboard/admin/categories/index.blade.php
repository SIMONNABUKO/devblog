 @extends('layouts.dashboard');

 @section('content')
 <div class="row">
     <div class="col-md-10 offset-md-1">
         <div class="card-body">
             <table class="table">
                 <thead>
                     <tr>
                         <th style="width:30%;">Name</th>
                         <th style="width:20%;">Status</th>
                         <th style="width:20%;">Date</th>
                         <th class="actions"></th>
                     </tr>
                 </thead>
                 <tbody>
                     @forelse ($categories as $cat)
                     <tr>
                         <td>{{$cat->cat_name}}</td>
                         <td>
                             @if ($cat->status == 1)
                             <a href="{{route('dashboard.admin.categories.status.update', $cat->id)}}"
                                 class="btn btn-space btn-success active"><i
                                     class="icon icon-left mdi mdi-check"></i>Active</a>
                             @else
                             <a href="{{route('dashboard.admin.categories.status.update', $cat->id)}}"
                                 class="btn btn-space btn-danger active"><i
                                     class="icon icon-left mdi mdi-alert-circle"></i>Disabled</a>
                             @endif


                         </td>
                         <td>{{$cat->created_at->diffForHumans()}}</td>
                         <td class="actions">
                             <a class="icon btn" href="{{route('dashboard.admin.categories.edit', $cat->id)}}"><i
                                     class="text-primary mdi mdi-edit"></i></a>
                             <a class="icon btn" href="{{route('dashboard.admin.categories.delete', $cat->id)}}"><i
                                     class="text-danger mdi mdi-delete"></i></a>
                         </td>
                     </tr>
                     @empty
                     <p>No Categories found.</p>
                     @endforelse


                 </tbody>
             </table>
         </div>
     </div>
 </div>
 @endsection