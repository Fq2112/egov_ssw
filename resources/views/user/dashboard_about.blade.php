@extends('layouts.user.mst_user')
@section('title', 'SSWS - Surabaya Single Window Sanitary | About')
@section('nav')
    <li><a href="{{route('dashboard')}}">Home</a></li>
    <li class="active"><a href="{{route('dashboard.about')}}">About</a></li>
    <li><a href="{{route('dashboard.contact')}}">Contact</a></li>
@endsection
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('images/about.jpeg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h1>About Us</h1>
                                    <p class="fh5co-lead">Wanna know more about us? You're in the right place.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-content">
        <div class="video fh5co-video" style="background-image: url({{asset('images/video.jpg')}});">
            <a href="https://youtu.be/0-he-Xv4vJ0" class="popup-youtube"><i class="icon-video2"></i></a>
            <div class="overlay"></div>
        </div>
        <div class="choose animate-box">
            <div class="fh5co-heading">
                <h2>Why Choose Us?</h2>
                <p>Because we, {{config('app.name')}} (Surabaya Single Window - Sanitary) are the best agency of licensing online especially in the health sector.</p>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100"
                     aria-valuemin="0" aria-valuemax="100" style="width:100%">
                    Healthy Law 100%
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90"
                     aria-valuemin="0" aria-valuemax="100" style="width:90%">
                    Pharmacy Law 90%
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80"
                     aria-valuemin="0" aria-valuemax="100" style="width:80%">
                    Water-Mart Law 80%
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    Pest Control Law 70%
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-about">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Our Crew</h2>
                    <p>{{config('app.name')}} (Surabaya Single Window - Sanitary) have 4 passionate crews. Feel free to
                        get in touch with them.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img style="-webkit-filter: grayscale(100%); filter: grayscale(100%);" src="{{asset('images/fq.jpg')}}" alt="Fiqy Ainuzzaqy">
                        <h3>Fiqy Ainuzzaqy</h3>
                        <strong class="role">Front-end Developer</strong>
                        <p>20th years old student, an Informatics Engineering student in UNESA (State University of
                            Surabaya). He plays role as a <em>front-end developer</em> since 2015.</p>
                        <ul class="fh5co-social-icons">
                            <li><a href="https://twitter.com/fqnkk"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://facebook.com/FqNkk"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://instagram.com/fq_whysoserious/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://github.com/Fq2124/"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img style="-webkit-filter: grayscale(100%); filter: grayscale(100%);" src="{{asset('images/fahmi.jpg')}}" alt="Fahmi Rizky Maulidy">
                        <h3>Fahmi Rizky</h3>
                        <strong class="role">Back-end Developer</strong>
                        <p>20th years old student, an Informatics
                            Engineering student in UNESA (State University of Surabaya). He
                            plays role as a <em>back-end developer</em> since 2015.</p>
                        <ul class="fh5co-social-icons">
                            <li><a href="https://twitter.com/fahmir009"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://facebook.com/fahmir009"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://instagram.com/fahmir009/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://github.com/Vreallyla/"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img style="-webkit-filter: grayscale(100%); filter: grayscale(100%);" src="{{asset('images/delia.jpg')}}" alt="Delia Mediana">
                        <h3>Delia Mediana</h3>
                        <strong class="role">System Analyst</strong>
                        <p>20th years old student, an Informatics
                            Engineering student in UNESA (State University of Surabaya). She
                            plays role as a <em>system analyst</em> since 2015.</p>
                        <ul class="fh5co-social-icons">
                            <li><a href="https://twitter.com/deliamediana"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://facebook.com/deliamediana"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/deliamediana/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://github.com/deliamediana/"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img style="-webkit-filter: grayscale(100%); filter: grayscale(100%);" src="{{asset('images/rena.JPG')}}" alt="Delia Mediana">
                        <h3>Rena Larasati</h3>
                        <strong class="role">Database Designer</strong>
                        <p>20th years old student, an Informatics
                            Engineering student in UNESA (State University of Surabaya). She
                            plays role as a <em>database designer</em> since 2015.</p>
                        <ul class="fh5co-social-icons">
                            <li><a href="https://twitter.com/renaariastana"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://facebook.com/rena.ariastana"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/renaariastana/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://github.com/renaariastana/"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection