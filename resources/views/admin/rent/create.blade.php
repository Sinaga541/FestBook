@extends('admin.templates.default')

@section('content')
    <div class="box">
        <h3 class="box-title">Tambah Organizer</h3>
    </div>

    <div class="box-body">
        <form action="{{ route('admin.author.store') }}" method="POST">
            @csrf
            <div class="form-group @error('name') has-error @enderror">
                <label for="">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Organizer">
                @error('namme')
                    <span class="help">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" value="Tambah" class="btn btn-primary">
            </div>

        </form>
    </div>
@endsection