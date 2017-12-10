@extends('layouts.user.mst_user_relog')
@section('title', 'SSWS - Surabaya Single Window Sanitary | Form Perizinan Apotek')
@section('content')
    <div style="padding: 3em 0;" id="fh5co-contact">
        <div class="container">
            <div class="row">
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
                                <li class="current"><a href="#4">Daftar Alat</a></li>
                                <li><a href="#5">Identitas Apoteker</a></li>
                                <li><a href="#6">Cetak Dokumen</a></li>
                                <li><a href="#7">Upload Dokumen</a></li>
                                <li><a href="#8">Konfirmasi Permohonan</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="w3-panel w3-card">
                            <h2 style="padding-top: 5%;padding-bottom: 3%" class="text-center">Daftar Terperinci
                                Alat-Alat Apotek</h2>
                            <form action="{{route('save.keempat')}}" method="post" class="form-horizontal"
                                  data-toggle="validator">
                                {{ csrf_field() }}  {{ method_field('post') }}
                                <div id="satu">
                                    <div class="row form-group">
                                        <div class="col-lg-12">
                                            <label for="satu">1. Alat Pembuatan, Pengolahan, dan Peracikan</label>
                                        </div>
                                    </div>
                                    <div id="g_ukur">
                                        <div class="row form-group">
                                            <div class="col-lg-4">
                                                <label for="g_ukur">GELAS UKUR</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">10 ml</span>
                                                    <input id="g_ukur" class="form-control" placeholder="0"
                                                           type="number" min="0"
                                                           name="gelasu10">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="g_ukur">&nbsp;</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">100 ml</span>
                                                    <input class="form-control" placeholder="0" type="number" min="0"
                                                           name="gelasu100">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="g_ukur">&nbsp;</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">250 ml</span>
                                                    <input class="form-control" placeholder="0" type="number" min="0"
                                                           name="gelasu250">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="bgelas">
                                        <div class="row form-group">
                                            <div class="col-lg-4">
                                                <label for="bgelas">BENKER GELAS</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">100 ml</span>
                                                    <input id="bgelas" class="form-control" placeholder="0"
                                                           type="number" min="0" name="bgelas100">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="bgelas">&nbsp;</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">500 ml</span>
                                                    <input class="form-control" placeholder="0" type="number" min="0"
                                                           name="bgelas500">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="bgelas">&nbsp;</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">1000 ml</span>
                                                    <input class="form-control" placeholder="0" type="number" min="0"
                                                           name="bgelas1000">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="labu">
                                        <div class="row form-group">
                                            <div class="col-lg-4">
                                                <label for="labu">LABU ELEMEYER</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">100 ml</span>
                                                    <input id="labu" class="form-control" placeholder="0"
                                                           type="number" min="0" name="labu100">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labu">&nbsp;</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">500 ml</span>
                                                    <input class="form-control" placeholder="0" type="number" min="0"
                                                           name="labu500">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="labu">&nbsp;</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">1000 ml</span>
                                                    <input class="form-control" placeholder="0" type="number" min="0"
                                                           name="labu1000">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="panci">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <label for="panci">PANCI PENGUKUR</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">10 ml</span>
                                                    <input id="panci" class="form-control" placeholder="0"
                                                           type="number" min="0" name="panci10">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="corong">
                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label for="corong">CORONG</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">6 cm</span>
                                                    <input id="corong" class="form-control" placeholder="0"
                                                           type="number" min="0" name="corong6">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="corong">&nbsp;</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">7,5 cm</span>
                                                    <input id="corong" class="form-control" placeholder="0"
                                                           type="number" min="0" name="corong7">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="spatel">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <label for="spatel">SPATEL TANDUK/LOGAM/PLASTIK</label>
                                                <div class="input-group">
                                                    <input id="spatel" class="form-control" placeholder="0"
                                                           type="number" min="0" name="spantel">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cawan">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <label for="cawan">CAWAN PENGUAP BERGARIS TENGAH (Buah)</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">6 cm</span>
                                                    <input id="cawan" class="form-control" placeholder="0"
                                                           type="number" min="0" name="cawan6">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">7 cm</span>
                                                    <input id="cawan" class="form-control" placeholder="0"
                                                           type="number" min="0" name="cawan7">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">8 cm</span>
                                                    <input id="cawan" class="form-control" placeholder="0"
                                                           type="number" min="0" name="cawan8">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">9 cm</span>
                                                    <input id="cawan" class="form-control" placeholder="0"
                                                           type="number" min="0" name="cawan9">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pengaduk">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <label for="pengaduk">BATANG PENGADUK</label>
                                                <div class="input-group">
                                                    <input id="pengaduk" class="form-control" placeholder="0"
                                                           type="number" min="0" name="pengaduk">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pemanas">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <label for="pemanas">PEMANAS AIR</label>
                                                <div class="input-group">
                                                    <input id="pemanas" class="form-control" placeholder="0"
                                                           type="number" min="0" name="pemananas">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="kompor">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <label for="kompor">KOMPOR/ALAT PEMANAS LAINNYA</label>
                                                <div class="input-group">
                                                    <input id="kompor" class="form-control" placeholder="0"
                                                           type="number" min="0" name="kompor">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="panci">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <label for="panci">PANCI</label>
                                                <div class="input-group">
                                                    <input id="panci" class="form-control" placeholder="0"
                                                           type="number" min="0" name="panci">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="rak">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <label for="rak">RAK TEMPAT PENGERINGAN ALAT</label>
                                                <div class="input-group">
                                                    <input id="rak" class="form-control" placeholder="0"
                                                           type="number" min="0" name="rak">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="termo">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <label for="termo">THERMOMETER BERKALA 100&#8451;</label>
                                                <div class="input-group">
                                                    <input id="termo" class="form-control" placeholder="0"
                                                           type="number" min="0" name="termo">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="mortir">
                                        <div class="row form-group">
                                            <div class="col-lg-4">
                                                <label for="mortir">MORTIR BERGARIS TENGAH</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">10 cm</span>
                                                    <input id="mortir" class="form-control" placeholder="0"
                                                           type="number" min="0" name="mortir10">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="mortir">&nbsp;</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">13 cm</span>
                                                    <input class="form-control" placeholder="0" type="number" min="0"
                                                           name="mortir13">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="mortir">&nbsp;</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">16 cm</span>
                                                    <input class="form-control" placeholder="0" type="number" min="0"
                                                           name="mortir16">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="timbanganmg">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <label for="timbanganmg">TIMBANGAN MILIGRAM DENGAN ANAK TIMBANGAN YANG
                                                    TERTERA</label>
                                                <div class="input-group">
                                                    <input id="timbanganmg" class="form-control" placeholder="0"
                                                           type="number" min="0" name="timbanganmg">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="timbangang">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <label for="timbangang">TIMBANGAN GRAM DENGAN ANAK TIMBANGAN YANG
                                                    TERTERA</label>
                                                <div class="input-group">
                                                    <input id="timbangang" class="form-control" placeholder="0"
                                                           type="number" min="0" name="timbangang">
                                                    <span class="input-group-addon">Buah</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="dua">
                                    <div class="row form-group">
                                        <div class="col-lg-12">
                                            <label for="dua">2. Perlengkapan dan Alat Perbekalan Farmasi</label>
                                        </div>
                                    </div>
                                    <div id="BOTOL_LEMARI">
                                        <div class="row form-group">
                                            <div class="col-lg-3">
                                                <label class="tgl tgl-gray">
                                                    <input id="status" name="botol" type="checkbox">
                                                    BOTOL SEGALA UKURAN
                                                    <span style="font-size: 22px" data-on="Ya" data-off="Tidak"></span>
                                                </label>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="tgl tgl-gray">
                                                    <input id="status" name="lemari" type="checkbox">
                                                    LEMARI DAN RAK OBAT
                                                    <span style="font-size: 22px" data-on="Ya" data-off="Tidak"></span>
                                                </label>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="tgl tgl-gray">
                                                    <input id="status" name="lemaripendingin" type="checkbox">
                                                    LEMARI PENDINGIN
                                                    <span style="font-size: 22px" data-on="Ya" data-off="Tidak"></span>
                                                </label>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="tgl tgl-gray">
                                                    <input id="status" name="lemarinarkotika" type="checkbox">
                                                    LEMARI UNTUK NAPZA
                                                    <span style="font-size: 22px" data-on="Ya" data-off="Tidak"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tiga">
                                    <div class="row form-group">
                                        <div class="col-lg-12">
                                            <label for="tiga">3. Kepustakaan</label>
                                        </div>
                                    </div>
                                    <div id="kepustakaan">
                                        <div class="row form-group">
                                            <div class="col-lg-4">
                                                <label class="tgl tgl-gray">
                                                    <input id="status" name="fi_iv" type="checkbox">
                                                    FI EDISI IV
                                                    <span style="font-size: 22px" data-on="Ya" data-off="Tidak"></span>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="tgl tgl-gray">
                                                    <input id="status" name="iso" type="checkbox">
                                                    ISO EDISI TERBARU
                                                    <span style="font-size: 22px" data-on="Ya" data-off="Tidak"></span>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="tgl tgl-gray">
                                                    <input id="status" name="uu" type="checkbox">
                                                    UU TENTANG NAPZA
                                                    <span style="font-size: 22px" data-on="Ya" data-off="Tidak"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-12">
                                        <input type="submit" value="SUBMIT" class="btn btn-primary btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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