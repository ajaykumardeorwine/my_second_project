@extends('layouts.base')

@section('content')
    
<div class="container mt-5" style="padding-top: 100px; ">
    <h2 class="mb-4">Laravel 7|8 Yajra Datatables Example</h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category_Id</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
@endsection
@push('scripts')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> --}}

<meta name="csrf-token" content="{{ csrf_token() }}">


<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
            order: [
                [2, 'asc']
            ],
        serverSide: true,
        ajax: "{{ route('datatables.list') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name',
            render: function(data, type, row, meta) {
                        return data + ' '+row['price']
                    }},
            {data: 'price', name: 'price'},
            {data: 'category_id', name: 'category_id'},
            
            
            {
                data: 'action', 
                name: 'action',render: function(data, type, row, meta) {
                        return `<a href="{{ route('products.index') }}/${row['id']}" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>`
                },
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
@endpush