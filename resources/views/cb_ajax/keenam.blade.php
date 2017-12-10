@extends('layouts.user.mst_user_relog')
@section('title', 'SSWS - Surabaya Single Window Sanitary | Form Perizinan Apotek')
@section('content')
    <div style="padding: 3em 0;" id="fh5co-practice" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-bottom: 1em">
                    <h2><i class="fa fa-medkit"></i> Berkas Permohonan</h2>
                </div>
                <div class="col-lg-12">
                    <nav>
                        <ol class="cd-multi-steps text-bottom count">
                            <li class="visited"><a href="#1">Identitas Pemohon</a></li>
                            <li class="visited"><a href="#2">Identitas Apotek</a></li>
                            <li class="visited"><a href="#3">Identitas Pemilik</a></li>
                            <li class="visited"><a href="#4">Daftar Alat</a></li>
                            <li class="visited"><a href="#5">Identitas Apoteker</a></li>
                            <li class="current"><a href="#6">Cetak Dokumen</a></li>
                            <li><a href="#7">Upload Dokumen</a></li>
                            <li><a href="#8">Konfirmasi Permohonan</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-bottom: 1em">
                    <h2 style="padding-top: 5%;padding-bottom: 5%">Cetak Dokumen</h2>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <a target="_blank" href="{{route('cetak.permohonan')}}">
                        <div class="services">
                            <span class="icon">
                                <i class="fa fa-print" data-placement="bottom" data-toggle="tooltip"
                                   title="Klik disini untuk cetak berkas!"></i>
                            </span>
                            <div class="desc">
                                <h3><a target="_blank" href="{{route('cetak.permohonan')}}">Surat Permohonan
                                        Perizinan</a></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <a target="_blank" href="{{route('cetak.alat')}}">
                        <div class="services">
                            <span class="icon">
                                <i class="fa fa-print" data-placement="bottom" data-toggle="tooltip"
                                   title="Klik disini untuk cetak berkas!"></i>
                            </span>
                            <div class="desc">
                                <h3><a target="_blank" href="{{route('cetak.alat')}}">Daftar Alat dan Perlengkapan
                                        Apotik</a></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <a target="_blank" href="{{route('cetak.apoteker')}}">
                        <div class="services">
                            <span class="icon">
                                <i class="fa fa-print" data-placement="bottom" data-toggle="tooltip"
                                   title="Klik disini untuk cetak berkas!"></i>
                            </span>
                            <div class="desc">
                                <h3><a target="_blank" href="{{route('cetak.apoteker')}}">Surat Pernyataan Apoteker</a>
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <a target="_blank" href="{{route('cetak.uu')}}">
                        <div class="services">
                            <span class="icon">
                                <i class="fa fa-print" data-placement="bottom" data-toggle="tooltip"
                                   title="Klik disini untuk cetak berkas!"></i>
                            </span>
                            <div class="desc">
                                <h3><a target="_blank" href="{{route('cetak.uu')}}">Surat Pernyataan Apoteker (UU)</a>
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <a target="_blank" href="{{route('cetak.sarana')}}">
                        <div class="services">
                            <span class="icon">
                                <i class="fa fa-print" data-placement="bottom" data-toggle="tooltip"
                                   title="Klik disini untuk cetak berkas!"></i>
                            </span>
                            <div class="desc">
                                <h3><a target="_blank" href="{{route('cetak.sarana')}}">Surat Pernyataan Pemilk
                                        Sarana</a></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <a href="{{action('CekDataController@setsessionkeenam')}}">
                        <div class="services">
                            <span class="icon">
                                <i class="fa fa-arrow-right" data-placement="bottom" data-toggle="tooltip"
                                   title="Klik disini untuk menuju ke tahap Upload Dokumen!"></i>
                            </span>
                            <div class="desc">
                                <h3><a href="{{action('CekDataController@setsessionkeenam')}}">LANJUT KE TAHAP
                                        BERIKUTNYA</a></h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <script type="text/javascript">
        @if(\Session::has('status'))
swal({
            title: '{{ session('status') }}',
            type: 'info',
            timer: '1500'
        });
        @endif
    </script>
@endsection