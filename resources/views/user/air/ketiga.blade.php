@extends('layouts.user.mst_user_relog')
@section('title', 'SSWS - Surabaya Single Window Sanitary | Form Perizinan Depo Air Minum')
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
                            <li class="visited"><a href="#2">Identitas Depo</a></li>
                            <li class="current"><a href="#3">Cetak Dokumen</a></li>
                            <li><a href="#4">Upload Dokumen</a></li>
                            <li><a href="#5">Konfirmasi Permohonan</a></li>
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
                    <a target="_blank" href="{{route('depot.cetak.permohonan')}}">
                        <div class="services">
                            <span class="icon">
                                <i class="fa fa-print" data-placement="bottom" data-toggle="tooltip"
                                   title="Klik disini untuk cetak berkas!"></i>
                            </span>
                            <div class="desc">
                                <h3><a target="_blank" href="{{route('depot.cetak.permohonan')}}">Surat
                                        Permohonan<br><br><br></a></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <a target="_blank" href="{{route('depot.cetak.uu')}}">
                        <div class="services">
                            <span class="icon">
                                <i class="fa fa-print" data-placement="bottom" data-toggle="tooltip"
                                   title="Klik disini untuk cetak berkas!"></i>
                            </span>
                            <div class="desc">
                                <h3><a target="_blank" href="{{route('depot.cetak.uu')}}">Surat Pernyataan Taat
                                        UU<br><br></a></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <a target="_blank" href="{{route('depot.cetak.bersedia')}}">
                        <div class="services">
                            <span class="icon">
                                <i class="fa fa-print" data-placement="bottom" data-toggle="tooltip"
                                   title="Klik disini untuk cetak berkas!"></i>
                            </span>
                            <div class="desc">
                                <h3><a target="_blank" href="{{route('depot.cetak.bersedia')}}">Surat Pernyataan
                                        Bersedia Diperiksa dan Diuji Kualitas Air Minum</a>
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 text-center animate-box">
                    <p><a class="btn btn-primary btn-lg btn-learn"
                          href="{{action('User\DepotAirController@setsessionketiga')}}">LANJUT KE TAHAP
                            BERIKUTNYA</a></p>
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