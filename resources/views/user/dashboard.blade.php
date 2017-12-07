@extends('layouts.user.mst_user')
@section('title', 'SSW - Surabaya Single Window | Home')
@section('nav')
    <li class="active"><a href="{{route('dashboard')}}">Home</a></li>
    <li><a href="{{route('dashboard.blog')}}">Blog</a></li>
    <li><a href="{{route('dashboard.about')}}">About</a></li>
    <li><a href="{{route('dashboard.contact')}}">Contact</a></li>
@endsection
@section('content')
    <div class="fh5co-loader"></div>

    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('images/img_bg_1.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h1>Expert Legal Solutions</h1>
                                    <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a>
                                    </h2>
                                    <p><a class="btn btn-primary btn-lg" href="#">Make An Appointment</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('images/img_bg_2.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h1>Business Law</h1>
                                    <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a>
                                    </h2>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">Make An Appointment</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('images/img_bg_3.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h1>Defend Your Constitutional Right with Legal Help</h1>
                                    <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a>
                                    </h2>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">Make An Appointment</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-counter" class="fh5co-counters fh5co-bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="icon-user"></i></span>
                    <span class="fh5co-counter js-counter" data-from="0" data-to="27539" data-speed="5000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Satisfied Clients</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="icon-speech-bubble"></i></span>
                    <span class="fh5co-counter js-counter" data-from="0" data-to="23563" data-speed="5000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Cases Won</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="icon-trophy"></i></span>
                    <span class="fh5co-counter js-counter" data-from="0" data-to="5067" data-speed="5000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Awards Won</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="icon-users"></i></span>
                    <span class="fh5co-counter js-counter" data-from="0" data-to="2587" data-speed="5000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Lawyers</span>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-practice" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Our Legal Practice Area</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.
                        Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-home"></i>
						</span>
                        <div class="desc">
                            <h3><a href="#">Real Estate Law</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
                        <div class="desc">
                            <h3><a href="#">Insurance Law</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-shopping-cart"></i>
						</span>
                        <div class="desc">
                            <h3><a href="#">Business Law</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-umbrella"></i>
						</span>
                        <div class="desc">
                            <h3><a href="#">Personal Injury</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-heart"></i>
						</span>
                        <div class="desc">
                            <h3><a href="#">Medical Neglegence</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-help"></i>
						</span>
                        <div class="desc">
                            <h3><a href="#">Criminal Defense</a></h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                                provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center animate-box">
                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">View More</a></p>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-project">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Counseling</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.
                        Odit ab aliquam dolor eius.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{asset('images/project-1.jpg')}}"
                                     alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>Business</h3>
                        <span>CEO. Hon Doe</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{asset('images/project-2.jpg')}}"
                                     alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>Legal Advice</h3>
                        <span>Atty. John Doe</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{asset('images/project-3.jpg')}}"
                                     alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>Read Bible</h3>
                        <span>Ptr. Jhon Doe</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{asset('images/project-4.jpg')}}"
                                     alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>Affidavit</h3>
                        <span>Atty. Boo Doe</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{asset('images/project-5.jpg')}}"
                                     alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>Sports</h3>
                        <span>Atty. Smith D</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{asset('images/project-6.jpg')}}"
                                     alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <h3>Photography</h3>
                        <span>Phtr. Arnt Tee</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-testimonial" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Testimonials</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row animate-box">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="{{asset('images/user-1.jpg')}}" alt="user">
                                    </figure>
                                    <span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
                                    <blockquote>
                                        <p>&ldquo;Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="{{asset('images/user-1.jpg')}}" alt="user">
                                    </figure>
                                    <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                    <blockquote>
                                        <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the
                                            Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="{{asset('images/user-1.jpg')}}" alt="user">
                                    </figure>
                                    <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                    <blockquote>
                                        <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the coast of the
                                            Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection