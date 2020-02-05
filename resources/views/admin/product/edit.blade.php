@extends('admin.templates.default')

@section('content')
    <div class="box">
        <h3 class="box-title">Edit Produk</h3>
    </div>

    <div class="box-body">
        <form action="{{ route('admin.product.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <div class="form-group @error('title') has-error @enderror">
                <label for="">Produk</label>
                <input type="text" name="title" class="form-control" placeholder="Masukkan Produk" value="{{ $product->title ?? old('title') }}">
                @error('title')
                    <span class="help-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group @error('description') has-error @enderror">
                <label for="">Deskripsi</label>
                <textarea name="description" id="" rows="3" class="form-control" placeholder="Tuliskan Deskripsi Produk">
                {{$product->description ?? old('description') }}</textarea>
                @error('description')
                    <span class="help-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group @error('authors') has-error @enderror">
                <label for="">Organizer</label>
                <select name="author_id" id="" class="form-control select2">  

                    @foreach($authors as $author )
                        <option 
                            value="{{ $author->id }}"
                            @if ($author ->id === $product->author_id)
                                selected
                            @endif
                        >
                            {{ $author->name}}
                        </option>
                    @endforeach
                </select>
                @error('authors')
                    <span class="help-block">{{ $message }}</span>
                @enderror


                <div class="form-group @error('image') has-error @enderror">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
                @error('image')
                    <span class="help-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group @error('jumlah') has-error @enderror">
                <label for="">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" placeholder="Masukkan Jumlah Produk" value="{{$product->jumlah ?? old('jumlah') }}">
                @error('jumlah')
                    <span class="help-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>

        </form>
    </div>
@endsection
    
@push('select2css')
<link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css') }}"></a>
@endpush

@push('scripts')
    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
        $('.select2').select2();
    </script>
@endpush