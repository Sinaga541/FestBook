@extends('admin.templates.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Rent</h3>
    </div>

    <div class="box-body">
       @include('admin.templates.partials.alerts')
        <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>           
        </table>
    </div>       
</div>

<form action="" method="post" id=returnForm>
    @csrf
    @method("PUT")
    <input type="submit" value="Return" style="display: none">
</form>

@endsection

@push('scripts')
<script>
    $(function (){
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.rent.data') }}',
            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false},
                { data: 'user'},
                { data: 'product_title'},
                { data: 'action'}
                
            
            ]
        });
    });
</script>    

@endpush