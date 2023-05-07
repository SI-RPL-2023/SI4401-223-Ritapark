@extends('partials.template')
@include('layout.contactus')
@section('content')
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
                            <button type="button" class="btn btn-default">Lihat Promo</button>
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
                            <p>wahana rekreasi yang berbentuk roda besar yang berputar dengan lambat dan berisi beberapa gerbong kecil yang dapat menampung beberapa orang di dalamnya.</p>
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
                            <p>Wahana ini terdiri dari rel berbentuk seperti jalan setapak yang membentang di atas tanah dan terkadang di atas bangunan atau struktur lainnya.</p>
                            <!-- <div class="links"><a href="#">Read more</a></div> -->
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                    <div class="side-A">
                        <div class="product-desc-side">
                            <h3><a>Tornado</a></h3>
                            <p>memiliki bentuk yang mirip dengan tornado, yaitu berbentuk kerucut dan berputar dengan kecepatan yang tinggi</p>
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
                            <p>Wahana ini terdiri dari kursi-kursi kecil yang tergantung pada sebuah tiang pusat</p>
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
                                <p>Sensasi yang saya rasakan sangat luar biasa! Saya suka kecepatan dan putaran yang membuat saya terasa seperti terbang.</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/client1.png" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Walter Hucko</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box">
                                <p>Bagian yang saya kurang sukai adalah saat wahana berbelok dengan tiba-tiba, terutama ketika kepala saya bergesekan dengan sandaran kursi. Mungkin bisa diperbaiki dengan membuat sudut belok yang lebih lembut.</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/client2.png" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Jules Boutin</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box">
                                <p>Bagian yang saya kurang sukai adalah saat wahana berbelok dengan tiba-tiba, terutama ketika kepala saya bergesekan dengan sandaran kursi. Mungkin bisa diperbaiki dengan membuat sudut belok yang lebih lembut.</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/client3.png" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Attilio Marzi</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
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
