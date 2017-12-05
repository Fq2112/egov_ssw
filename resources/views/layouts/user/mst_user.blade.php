<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co"/>
    <meta name="keywords"
          content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"/>
    <meta name="author" content="FreeHTML5.co"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/w3.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>
<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a
                                    href="{{route('dashboard')}}">S<span>.</span>S<span>.</span>W<span>.</span></a>
                        </div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        @yield('navigation')
                    </div>
                </div>

            </div>
        </div>
    </nav>
    @yield('content')
    <div id="map" class="fh5co-map"></div>
    <div id="fh5co-started" style="background-image:url({{asset('images/img_bg_2.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Legal Advice</h2>
                    <p>We help people effectively fight their offenders back and successfully defend their own
                        stand!</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <p><a href="#" class="btn btn-default btn-lg">Consultation</a></p>
                </div>
            </div>
        </div>
    </div>
    <footer id="fh5co-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 fh5co-widget">
                    <h4><a href="http://kerjanyata.id">#KE2JANYATA</a></h4>
                    <p style="text-transform: uppercase">"Surabaya kota sentosa, berkarakter, berdaya saing global, berbasis ekologi."</p>
                </div>
                <div class="col-md-3 col-md-push-1">
                    <h4>Navigation</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Practice Areas</a></li>
                        <li><a href="#">Won Cases</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-md-push-1">
                    <h4>Contact Information</h4>
                    <ul class="fh5co-footer-links">
                        <li>Jl. Jimerto 25-27, Ketabang,<br> Genteng, Surabaya, Jawa Timur, Indonesia 60295</li>
                        <li><a href="tel://+62315312144">+6231-5312144</a> | <a href="tel://+62315343051">+6231-5343051</a></li>
                        <li><a href="mailto:info@ssw.go.id">info@ssw.go.id</a> | <a href="http://surabaya.go.id/">surabaya.go.id</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-md-push-1">
                    <h4>Opening Hours</h4>
                    <ul class="fh5co-footer-links">
                        <li>Mon - Fri: 8 AM - 5 PM</li>
                        <li>Sat - Sun: Closed</li>
                    </ul>
                </div>

            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">Copyright &copy; 2017 SSW. All Rights Reserved.</small>
                        <small class="block">Designed by <a href="http://rabbit-media.net/" target="_blank">Rabbit Media</a>
                            &mdash; System by <a href="https://github.com/vreallyla" target="_blank">Fahmi Rizky</a></small>
                    </p>
                    <p>
                    <ul class="fh5co-social-icons">
                        <li>
                            <a href="https://facebook.com/sapawargakotasurabaya"><i class="icon-facebook"></i></a>
                        </li>
                        <li><a href="https://twitter.com/sapawargasby"><i class="icon-twitter"></i></a></li>
                        <li>
                            <a href="https://www.instagram.com/sapawargasby/"><i class="icon-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCjKrYWn5JL6dR48nvXKUibw"><i
                                        class="icon-youtube"></i></a>
                        </li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Stellar Parallax -->
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<!-- Carousel -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<!-- countTo -->
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/magnific-popup-options.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
<script src="{{asset('js/google_map.js')}}"></script>
<!-- Main -->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>

