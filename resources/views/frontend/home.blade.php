@extends('layouts.frontend')

@section('content')
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Penawaran pealtih terbaik</h4>
                                    <h1 class="animated fw-900 text-brand">Berbagai pelatih</h1>
                                    <p class="animated">Berkualitas dan berpengalaman</p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <section class="py">
            <div class="container">
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach ($mobils as $mobil)
                                <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{route('detail',$mobil->slug)}}">
                                                    <img class="default-img" src="{{ url('/storage/'.$mobil->gambar) }}"
                                                        alt="{{ $mobil->nama }}">
                                                </a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">{{ $mobil->ketersediaan }}</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a>{{ $mobil->merek }}</a>
                                            </div>
                                            <h2><a href="{{route('detail',$mobil->slug)}}">{{ $mobil->nama }}</a></h2>
                                            <div class="product-price">
                                                <span>{{ $mobil->harga }} </span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Detail" class="action-btn hover-up" href="{{route('detail',$mobil->slug)}}"><i class="fi-rs-file"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- <div class="bg-square"></div>
            <div class="container">
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-5">
                            @foreach ($mobils as $mobil)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('detail') }}">
                                                    <img class="default-img"
                                                        src="{{ asset('frontend/imgs/car/mobil-G1693PYQ.png') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a>{{$mobil->merek}}</a>
                                            </div>
                                            <h2><a href="{{ route('detail') }}">{{$mobil->nama}}</a></h2>
                                            <div class="product-price">
                                                <span>{{$mobil->harga}}  </span>
                                            </div>
                                            <div class="card-footer border-top-0 bg-transparent">
                                                <a class="btn btn-info mt-auto text-white" herf="#"></a>
                                            </div>
                                        </div>

                                    </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}
            </div>
        </section>

       
    </main>
@endsection
