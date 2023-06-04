@extends('partials.template')
@include('layout.contactus')
@section('content')
{{-- {{ dd($testimonis[0]->rating) }} --}}
    <!--end-->
    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->

        <ol class="carousel-indicators">
            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel1" data-slide-to="1"></li>
            <li data-target="#myCarousel1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active"> <img src="images/carousel1.jpg" style="width:100%; height: 500px" alt="First slide">
                <!-- <div class="carousel-caption">
                                                        <h1>Welcome To Rita Park</h1>
                                                    </div> -->
            </div>
            <div class="item"> <img src="images/carousel2.jpg" style="width:100%; height: 500px" alt="Second slide">
                <!-- <div class="carousel-caption">
                                                        <h1>Welcome To Rita Park</h1>
                                                    </div> -->
            </div>
            <div class="item"> <img src="images/carousel3.jpg" style="width:100%; height: 500px" alt="Third slide">
                <!-- <div class="carousel-caption">
                                                        <h1>Welcome To Rita Park</h1>
                                                    </div> -->
            </div>
        </div>
        <!-- <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="images/icons/left-arrow.png" onmouseover="this.src = 'images/icons/left-arrow-hover.png'" onmouseout="this.src = 'images/icons/left-arrow.png'" alt="left"></a>
                                            <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="images/icons/right-arrow.png" onmouseover="this.src = 'images/icons/right-arrow-hover.png'" onmouseout="this.src = 'images/icons/right-arrow.png'" alt="left"></a> -->
    </div>
    <div class="clearfix"></div>

    <!-- promo -->
    <section class="promo-offer-block">
        <div class="promo-offer-bgbanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="promo-offer-details">
                            <h1>Promo Spesial</h1>
                            <!-- <h4>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.</h4> -->
                            <a href="{{ route('promo') }}" class="btn btn-default">Lihat Promo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End-->

    <!----wahana-overview--->
    <section class="resort-overview-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                    <div class="side-A">
                        <div class="product-thumb">
                            <div class="image">
                                <a><img src="images/bianglala.jpg" class="img-responsive" alt="image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="side-B">
                        <div class="product-desc-side">
                            <h3><a>Bianglala</a></h3>
                            <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus
                                non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>
                            <!-- <div class="links"><a href="#">Read more</a></div> -->
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                    <div class="side-A">
                        <div class="product-thumb">
                            <div class="image">
                                <a><img alt="image" class="img-responsive" src="images/roller coaster.jpeg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="side-B">
                        <div class="product-desc-side">
                            <h3><a>Roller Coaster</a></h3>
                            <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus
                                non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>
                            <!-- <div class="links"><a href="#">Read more</a></div> -->
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                    <div class="side-A">
                        <div class="product-desc-side">
                            <h3><a>Tornado</a></h3>
                            <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus
                                non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>
                            <!-- <div class="links"><a href="#">Read more</a></div> -->
                        </div>
                    </div>

                    <div class="side-B">
                        <div class="product-thumb">
                            <div class="image txt-rgt">
                                <a class="arrow-left"><img src="images/tornado.jpg" class="img-responsive"
                                        alt="imaga"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                    <div class="side-A">
                        <div class="product-desc-side">
                            <h3><a>Kicir-Kicir</a></h3>
                            <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus
                                non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>
                            <!-- <div class="links"><a href="#">Read more</a></div> -->
                        </div>
                    </div>

                    <div class="side-B">
                        <div class="product-thumb txt-rgt">
                            <div class="image">
                                <a class="arrow-left"><img src="images/kicirkicir.jpg" class="img-responsive"
                                        alt="imaga"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </section>

    <!-----blog slider----->
    <!--blog trainer block-->
    <section class="blog-block-slider">
        <div class="blog-block-slider-fix-image">
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <div class="container">
                    <!-- Wrapper for slides -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                        <li data-target="#myCarousel2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="blog-box">
                                <p>{{ $testimonis[0]->testimoni_text }}</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        {{-- <img src="images/client1.png" class="media-object"> --}}
                                    </div>
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h3 class="media-heading blog-title">{{ $testimonis[0]->nama_depan }}
                                                    {{ $testimonis[0]->nama_belakang }}</h3>
                                                <h5 class="blog-rev">{{ $testimonis[0]->tanggal }}</h5>
                                            </div>
                                            <div class="col-lg-5">
                                                @if ($testimonis[0]->rating === '1')
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                            @elseif($testimonis[0]->rating === '2')
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                            @elseif($testimonis[0]->rating === '3')
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                            @elseif($testimonis[0]->rating === '4')
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                            @elseif($testimonis[0]->rating === '5')
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                            @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box">
                                <p>{{ $testimonis[1]->testimoni_text }}</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        {{-- <img src="images/client2.png" class="media-object"> --}}
                                    </div>
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h3 class="media-heading blog-title">{{ $testimonis[1]->nama_depan }}
                                                    {{ $testimonis[1]->nama_belakang }}</h3>
                                                <h5 class="blog-rev">{{ $testimonis[1]->tanggal }}</h5>
                                            </div>
                                            <div class="col-lg-5">
                                                @if ($testimonis[1]->rating === '1')
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                            @elseif($testimonis[1]->rating === '2')
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                            @elseif($testimonis[1]->rating === '3')
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                            @elseif($testimonis[1]->rating === '4')
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star (1).png"
                                                    alt="" width="50px">
                                            @elseif($testimonis[1]->rating === '5')
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                                <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                    width="50px">
                                            @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box">
                                <p>{{ $testimonis[2]->testimoni_text }}</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        {{-- <img src="images/client3.png" class="media-object"> --}}
                                    </div>
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h3 class="media-heading blog-title">{{ $testimonis[2]->nama_depan }}
                                                    {{ $testimonis[2]->nama_belakang }}</h3>
                                                <h5 class="blog-rev">{{ $testimonis[2]->tanggal }}</h5>
                                            </div>
                                            <div class="col-lg-5">
                                                @if ($testimonis[2]->rating === '1')
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star (1).png"
                                                        alt="" width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star (1).png"
                                                        alt="" width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star (1).png"
                                                        alt="" width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star (1).png"
                                                        alt="" width="50px">
                                                @elseif($testimonis[2]->rating === '2')
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star (1).png"
                                                        alt="" width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star (1).png"
                                                        alt="" width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star (1).png"
                                                        alt="" width="50px">
                                                @elseif($testimonis[2]->rating === '3')
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star (1).png"
                                                        alt="" width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star (1).png"
                                                        alt="" width="50px">
                                                @elseif($testimonis[2]->rating === '4')
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star (1).png"
                                                        alt="" width="50px">
                                                @elseif($testimonis[2]->rating === '5')
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                    <img src="{{ asset('') }}images\icons\Star.png" alt=""
                                                        width="50px">
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
@endsection
