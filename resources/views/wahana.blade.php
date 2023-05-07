@extends('partials.template')
@include('layout.contactus') 
@section('content')
    <!--end-->
    <section class="image-head-wrapper" style="background-image: url('images/carousel2.jpg');">
        <div class="inner-wrapper">
            <h1>Wahana</h1>
        </div>
    </section>
    <div class="clearfix"></div>

    <!--gallery block--->
    <section class="gallery-block gallery-front">
        <div class="container">
            <div class="row d-flex">
                @foreach ($wahana as $item)
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="{{ $item->foto }}">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive" href="{{ $item->foto }}" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>{{ $item->nama }}</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="images/tornado.jpg">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive" href="images/tornado.jpg" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>Tornado</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="images/roller coaster.jpeg">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive" href="images/roller coaster.jpeg" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>Roller Coaster</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="images/kicirkicir.jpg">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive" href="images/kicirkicir.jpg" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>Kicir-Kicir</a></p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection