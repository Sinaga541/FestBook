@extends('frontend.templates.default')

@section('content')
<div class="row">
    <h2>Package yang Di Pesan</h2>
    @foreach ($products as $product)
    <div class="col 12 m12">
        <div class="card horizontal hoverable">
            
                <img src="{{ $product->getImage() }}" height="250px">
            
            <div class="card-stacked">
                <div class="card-content">
                    <h4><a href="{{ route('product.show', $product)}}">{{ $product->title}}</a></h4>
                    <blockquote>
                        <p>{{Str::limit ($product->description, 100) }}</p>
                    </blockquote>
                    <p>
                        <i class="material-icons">person</i> : {{ $product->author->name}}
                    </p>

                   

                </div>
                
            </div>
        </div>
    </div>      
    @endforeach

</div>
@endsection