@extends('admin.templates.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Organizer</h3>
        <a href="{{ route('admin.author.create') }}" class="btn btn-primary">Tambah Organizer</a>
    </div>

    <div class="box-body">
       @include('admin.templates.partials.alerts')
        <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>           
        </table>
    </div>       
</div>

<form action="" method="post" id=deleteForm>
    @csrf
    @method("DELETE")
    <input type="submit" value="Hapus" style="display: none">
</form>

@endsection

@push('scripts')
<script>
    $(function (){
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.author.data') }}',
            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false},
                { data: 'name'},
                { data: 'action'}
            ]
        });
    });
</script>    

@endpush