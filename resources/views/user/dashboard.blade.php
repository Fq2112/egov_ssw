@extends('layouts.user.mst_user')
@section('title', 'SSWS - Surabaya Single Window Sanitary | Home')
@section('nav')
    <li class="active"><a href="{{route('dashboard')}}">Home</a></li>
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
                                    <h1>Perizinan Apotek</h1>
                                    <h2>Melakukan proses pengajuan permohonan Surat Izin Apotek</h2>
                                    <p><a class="btn btn-primary btn-lg" href="{{route('apotek.dashboard').'#fh5co-contact'}}">AJUKAN
                                            PERMOHONAN SEKARANG</a></p>
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
                                    <h1>Perizinan Depot Air Minum</h1>
                                    <h2>Melakukan proses pengajuan permohonan Surat Izin
                                        Penyelenggaraan Depot Air Minum</h2>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="{{route('air.dashboard').'#fh5co-contact'}}">
                                            AJUKAN PERMOHONAN SEKARANG</a></p>
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
                                    <h1>Perizinan Pengendalian Hama</h1>
                                    <h2>Melakukan proses pengajuan permohonan Surat Izin
                                        Operasional Perusahaan Pengendalian Hama</h2>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="{{route('hama.dashboard').'#fh5co-contact'}}">AJUKAN PERMOHONAN
                                            SEKARANG</a></p>
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
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Jumlah Pemohon Surat Izin</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="fa fa-medkit"></i></span>
                    <span class="fh5co-counter js-counter" data-from="0" data-to="{{$apotik}}" data-speed="1000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Apotek</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="fa fa-bitbucket"></i></span>
                    <span class="fh5co-counter js-counter" data-from="0" data-to="{{$depo}}" data-speed="1000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Depot Air Minum</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="fa fa-bug"></i></span>
                    <span class="fh5co-counter js-counter" data-from="0" data-to="{{$hama}}" data-speed="1000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Pengendalian Hama</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="icon-users"></i></span>
                    <span class="fh5co-counter js-counter" data-from="0" data-to="{{$user}}" data-speed="900"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Member/Pemohon</span>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-practice" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Layanan Perizinan Kami</h2>
                    <p>{{config('app.name')}} (Surabaya Single Window - Sanitary), yang akan selalu siap membantu Anda
                        untuk melakukan semua proses perizinan yang berkaitan dengan Kesehatan.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <a href="{{route('apotek.dashboard')}}">
                        <div class="services">
                            <span class="icon">
                                <i class="fa fa-medkit"></i>
                            </span>
                            <div class="desc">
                                <h3><a href="{{route('apotek.dashboard')}}">Apotek</a></h3>
                                <p>Apakah Anda ingin mengajukan permohonan Surat Izin Apotek?
                                    Kami {{config('app.name')}} akan membantu dan memudahkan Anda untuk mendapatkan
                                    surat izin tersebut.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <a href="{{route('air.dashboard')}}">
                        <div class="services">
                            <span class="icon">
                                <i class="fa fa-bitbucket"></i>
                            </span>
                            <div class="desc">
                                <h3><a href="{{route('air.dashboard')}}">Depot Air Minum</a></h3>
                                <p>Apakah Anda ingin mengajukan perizinan Penyelenggaraan Depot Air Minum?
                                    Kami {{config('app.name')}} akan membantu dan memudahkan Anda untuk mendapatkan surat
                                    izin tersebut.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <a href="{{route('hama.dashboard')}}">
                        <div class="services">
                            <span class="icon">
                                <i class="fa fa-bug"></i>
                            </span>
                            <div class="desc">
                                <h3><a href="{{route('hama.dashboard')}}">Pengendalian Hama</a></h3>
                                <p>Apakah Anda ingin mengajukan perizinan Perusahaan Pengendalian Hama?
                                    Kami {{config('app.name')}} akan membantu dan memudahkan Anda untuk mendapatkan surat
                                    izin tersebut.</p>
                            </div>
                        </div>
                    </a>
                </div>
                {{--<div class="col-md-12 text-center animate-box">
                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">View More</a></p>
                </div>--}}
            </div>
        </div>
    </div>
@endsection