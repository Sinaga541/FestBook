@extends('frontend.templates.default')

@section('content')
<div class="card horizontal">
                    <div class="jombotro">
                        <img width="850px" height="300px" src="https://weddings.planetfem.com/wp-content/uploads/2015/07/Thavorn_Wedding_Phuket_Romantic_Beachside.jpg">
                    
                    </div>
</div>

<div class="row">
                <div class="col 12 m6">
                    <div class="card horizontal hoverable">
                        <div class="card-image">
                            <img height ="270px" src="https://www.almerozhotel.com/images/wed1.jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                            <p>Get Your Wedding Package</p>
                            </div>
                            <div class="card-action">
                            <a class="btn red accent-1 right waves-effect waves-light" href="{{ route('packagepage') }}">Package</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col 12 m6">
                    <div class="card horizontal hoverable">
                        <div class="card-image">
                            <img height ="270px" src="https://cdn.shopify.com/s/files/1/0006/7118/7062/products/Vnox-Basic-Wedding-Bands-Rings-for-Women-Man-Customize-Name-Date-Love-Info-Promise-Alliance-Anniversary_4b0e8644-ccfd-4d23-9bbf-4c6855775127.jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                            <p>Costumization your Wedding</p>
                            </div>
                            <div class="card-action">
                            <a class="btn red accent-1 right waves-effect waves-light" href="{{ route('customizepage') }}">Costumize</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection
