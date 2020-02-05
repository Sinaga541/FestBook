@extends('frontend.templates.default')

@section('content')
    <!-- {{ $product->title}} -->
    <h4>Detail Package</h4>
    <div class="col 12 m12">
        <div class="card horizontal hoverable">
            
                <img src="{{ $product->getImage() }}" width="270px" height="400px">
            
            <div class="card-stacked">
                <div class="card-content">
                    <h4><a href="{{ route('product.show', $product)}}">{{ $product->title}}</a></h4>
                    <blockquote>
                        <p>{{ $product->description}}</p>
                    </blockquote>
                    <p>
                        <i class="material-icons">person</i> : {{ $product->author->name}}
                    </p>

                    <p>
                        <i class="material-icons">book</i> : {{ $product->jumlah}}
                    </p>

                </div>
                <div class="card-action">
                    <form action="{{ route('product.rent', $product) }}" method="POST">
                                @csrf
                                <input type="submit" value="Beli Package" class="btn red accent-1 right waves-effect waves-light">
 
                            </form>
                </div>
            </div>
        </div>
</div>

<h5>Package lainnya dari Organizer {{ $product->author->name}}</h5>
    <div class="row">
    @foreach($product->author->products->shuffle()->take(4) as $product)
        @include('frontend.components.card-book',['product' => $product])
    @endforeach
</div>


@endsection