<div class="col 12 m6">
            <div class="card horizontal hoverable">
                <div class="card-image">
                    <img src="{{ $product->getImage() }}" heght="100px">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h6><a href="{{ route('product.show', $product)}}">{{ Str::limit ($product->title, 15) }}</a></h6>
                        <p>{{ Str::limit ($product->description, 100) }}</p>
                    </div>
                        <div class="card-action">
                        <form action="{{ route('product.rent', $product) }}" method="POST">
                                @csrf
                                <input type="submit" value="Beli Package" class="btn blue accent-1 right waves-effect waves-light">
 
                            </form>
                        </div>
                </div>
            </div>
        </div>