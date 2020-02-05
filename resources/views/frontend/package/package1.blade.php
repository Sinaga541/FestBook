@extends('frontend.templates.default')

@section('content')
<h2>Jenis Jenis Package</h2>

<div class="row">
    @foreach($products as $product)
        @include('frontend.components.card-book',['product' => $product])
       
    @endforeach
</div>

{{$products->links('vendor.pagination.materialize') }}


@endsection
