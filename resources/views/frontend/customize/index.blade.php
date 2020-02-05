@extends('frontend.templates.default')

@section('content')

<h2>Customize</h2>

<h4>Tenda</h4>
<div class="row">
                <div class="col 12 m6">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="image/Tenda(1).jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>Tenda Biru</p>
                                <p>Luas : 100 m2</p>
                                <p>Rp50.000,-</p>
                            </div>
                            <div class="card-action">
                            <a href="{{ route('packagepage') }}">Sewa</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col 12 m6">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="image/Tenda(1).jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>Tenda Biru</p>
                                <p>Luas : 100 m2</p>
                                <p>Rp50.000,-</p>
                            </div>
                            <div class="card-action">
                            <a href="{{ route('customizepage') }}">Sewa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <h4>Kursi</h4>
        <div class="row">
                <div class="col 12 m6">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="image/Kursi.jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>Futura FTR 405</p>
                                <p>Jumlah : 100 buah</p>
                                <p>Rp50.000,-</p>
                            </div>
                            <div class="card-action">
                            <a href="{{ route('packagepage') }}">Sewa</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col 12 m6">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="image/Kursi.jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>Tenda Biru</p>
                                <p>Luas : 100 m2</p>
                                <p>Rp50.000,-</p>
                            </div>
                            <div class="card-action">
                            <a href="{{ route('customizepage') }}">Sewa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <h4>Tenda</h4>
<div class="row">
                <div class="col 12 m6">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="image/makan.jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>Makanan Halal</p>
                                <p>Porsi : 100 orang</p>
                                <p>Rp1.300.000,-</p>
                            </div>
                            <div class="card-action">
                            <a href="{{ route('packagepage') }}">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col 12 m6">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="image/makan.jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>Makanan Halal</p>
                                <p>Porsi : 100 orang</p>
                                <p>Rp1.300.000,-</p>
                            </div>
                            <div class="card-action">
                            <a href="{{ route('customizepage') }}">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                         

@endsection