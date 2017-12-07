@extends('layouts.user.mst_user')
@section('title', 'SSW - Surabaya Single Window | Blog')
@section('nav')
    <li><a href="{{route('dashboard')}}">Home</a></li>
    <li class="active"><a href="{{route('dashboard.blog')}}">Blog</a></li>
    <li><a href="{{route('dashboard.about')}}">About</a></li>
    <li><a href="{{route('dashboard.contact')}}">Contact</a></li>
@endsection
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('images/img_bg_1.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h1>Blog</h1>
                                    <p class="fh5co-lead">Designed with <i class="icon-heart3"></i> by the fine folks at <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-blog" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Recent Post</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.
                        Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="{{asset('images/project-4.jpg')}}" alt=""></a>
                        <div class="blog-text">
                            <span class="posted_on">Nov. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <h3><a href="#">Legal Consultation</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="{{asset('images/project-2.jpg')}}" alt=""></a>
                        <div class="blog-text">
                            <span class="posted_on">Nov. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <h3><a href="#">Criminal Case</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="{{asset('images/project-3.jpg')}}" alt=""></a>
                        <div class="blog-text">
                            <span class="posted_on">Nov. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <h3><a href="#">Business Law</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection