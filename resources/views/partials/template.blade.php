<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        <title>Rita Park</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('') }}css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('') }}font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="{{ asset('') }}css/style.css" rel="stylesheet">
        <link href="{{ asset('') }}fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link href="{{ asset('') }}css/responsive.css" rel="stylesheet">
        <script src="{{ asset('') }}js/jquery.min.js" type="text/javascript"></script>
        <script src="{{ asset('') }}js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{{ asset('') }}js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="{{ asset('') }}js/instafeed.min.js" type="text/javascript"></script>
        <script src="{{ asset('') }}js/custom.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="page">
            <!--header--->
            <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                                    <a href="{{ route('home') }}"><span>Rita Park</span></a>
                                </div>
                            </div>
                            <div class="col-sm-6 visible-sm">
                                @if (Auth::user())
                                <div class="text-right"><a href="{{ route('logout') }}" class="masuk-btn">Logout</a></div>
                                @else
                                <div class="text-right"><a href="{{ route('login') }}" class="masuk-btn">Masuk</a></div>
                                @endif
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                @include('partials.menu')
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12 hidden-sm" style="margin-left: -120px;margin-top:10px">
                                @if (Auth::user())
                                <div class="text-right"><a href="{{ route('my_ticket') }}" class="masuk-btn">My Ticket</a></div>
                                @endif
                            </div>
                            <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm" style="margin-top: -17px">
                                @if (Auth::user())
                                <div class="text-right"><a href="{{ route('logout') }}" class="masuk-btn">Logout</a></div>
                                @else
                                <div class="text-right"><a href="{{ route('login') }}" class="masuk-btn">Masuk</a></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            @yield('content')

            <!---footer--->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                            <div class="footer-details">
                                <h4>Get in touch</h4>
                                <ul class="list-unstyled footer-contact-list">
                                    <li>
                                        <i class="fa fa-map-marker fa-lg"></i>
                                        <p>Bandung</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-lg"></i>
                                        <p><a href="tel:+1-202-555-0100">0812-3456-7890</a></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o fa-lg"></i>
                                        <p><a href="mailto:demo@info.com">abc@gmail.com</a></p>
                                    </li>
                                </ul>
                                <!-- <div class="footer-social-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div> -->
                                <!-- <div class="input-group" id="subscribe">
                                    <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
                                    </span>
                                </div> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </footer>

            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
        @stack('js')
    </body>
</html>
