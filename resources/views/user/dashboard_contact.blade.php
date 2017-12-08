@extends('layouts.user.mst_user')
@section('title', 'SSWS - Surabaya Single Window Sanitary | Contact')
@section('nav')
    <li><a href="{{route('dashboard')}}">Home</a></li>
    <li><a href="{{route('dashboard.about')}}">About</a></li>
    <li class="active"><a href="{{route('dashboard.contact')}}">Contact</a></li>
@endsection
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('images/contact.jpeg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h1>Get in Touch with Us</h1>
                                    <p class="fh5co-lead">Feel free to ask or maybe give us some advices/critics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-push-1 animate-box">

                    <div class="fh5co-contact-info">
                        <h3>Contact Information</h3>
                        <ul>
                            <li class="address">Jl. Jemursari 197 Surabaya,<br>Surabaya, Jawa Timur, 60243</li>
                            <li class="phone"><a href="tel://+62318439473">+6231-8439473</a></li>
                            <li class="email"><a href="mailto:dinkes.surabaya@gmail.com">dinkes.surabaya@gmail.com</a>
                            </li>
                            <li class="url"><a href="http://surabaya.go.id">surabaya.go.id</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6 animate-box">
                    <h3>Send A Message</h3>
                    <form method="post" action="{{route('submit_contact')}}">
                        {{csrf_field()}}
                        <div class="row form-group">
                            @if(Auth::check())
                                <div class="col-md-6">
                                    <input value="{{Auth::user()->name}}" type="text" name="name" id="fname"
                                           class="form-control" placeholder="Name">
                                </div>
                                <div class="col-md-6">
                                    <input value="{{Auth::user()->email}}" type="email" name="email" id="email"
                                           class="form-control" placeholder="E-mail">
                                </div>
                            @else
                                <div class="col-md-6">
                                    <input type="text" name="name" id="fname" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
                                </div>
                            @endif
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input name="subject" type="text" id="subject" class="form-control"
                                       placeholder="Subject">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                          placeholder="Say something about us"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="SEND MESSAGE" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

    <div id="map" class="fh5co-map"></div>
@endsection