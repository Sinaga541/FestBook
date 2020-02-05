@extends('admin.templates.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Organizer</h3>
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Tambah produk</a>
    </div>

    <div class="box-body">
       @include('admin.templates.partials.alerts')
        <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Jenis Package</th>
                        <th>Deskripsi</th>
                        <th>Organizer</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>           
        </table>
    </div>       
</div>

<form action="" method="post" id=deleteForm>
    @csrf
    @method("DELETE")
    <input type="submit" value="Hapus" style= "display: none">
</form>

@endsection

@push('scripts')
<script>
    $(function (){
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.product.data') }}',
            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false},
                { data: 'title'},
                { data: 'description'},
                { data: 'author'},
                { data: 'image'},
                { data: 'action'}
            ]
        });
    });
</script>    

@endpush