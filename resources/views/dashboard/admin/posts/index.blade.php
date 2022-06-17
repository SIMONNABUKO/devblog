 @extends('layouts.dashboard');

 @section('content')
 <div class="row">
     <div class="col-md-10 offset-md-1">
         <div class="card-body">
             <table class="table" id="posts-table">
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>Post Title</th>
                         <th>Category</th>
                         <th>Post Summary</th>
                         <th>Status</th>
                         <th class="actions">Action</th>
                     </tr>
                 </thead>
                 <tbody>

                 </tbody>
             </table>
         </div>
     </div>
 </div>
 @endsection

 @section('scripts')
 <script type="text/javascript">
     $(function() {

         var table = $('#posts-table').DataTable({
             processing: true,
             serverSide: true,
             ajax: "{{route('dashboard.admin.posts.all')}}",
             columns: [{
                     data: 'DT_RowIndex',
                     name: 'DT_RowIndex'
                 },
                 {
                     data: 'post_title',
                     name: 'post_title'
                 },
                 {
                     data: 'category',
                     name: 'category'
                 },
                 {
                     data: 'post_summary',
                     name: 'post_summary'
                 },
                 {
                     data: 'status',
                     name: 'status'
                 },
                 {
                     data: 'action',
                     name: 'action',
                     orderable: true,
                     searchable: true
                 },
             ]
         });

     });
 </script>
 @endsection