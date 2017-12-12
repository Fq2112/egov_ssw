@extends('layouts.user.mst_user_relog')
@section('title', 'SSWS - Surabaya Single Window Sanitary | Form Perizinan Operasional Pengendalian Hama')
@section('content')
    <div id="fh5co-content">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-bottom: 1em">
                <h2><i class="fa fa-bug"></i> Berkas Permohonan</h2>
            </div>
            <div class="col-lg-12">
                <nav>
                    <ol class="cd-multi-steps text-bottom count">
                        <li class="visited"><a href="#1">Identitas Pemohon</a></li>
                        <li class="visited"><a href="#2">Identitas Perusahaan</a></li>
                        <li class="visited"><a href="#3">Cetak Dokumen</a></li>
                        <li class="visited"><a href="#4">Upload Dokumen</a></li>
                        <li class="current"><a href="#5">Konfirmasi Permohonan</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="video fh5co-video animate-box" style="background-image: url({{asset('images/konfirm.jpg')}})"></div>
        <div class="choose animate-box">
            <div class="row form-group">
                <div class="col-lg-12 text-center">
                    <label style="font-size: 25px">KONFIRMASI PERMOHONAN</label>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <label for="nik">NIK</label>
                    <input type="text" id="nik" class="form-control" value="{{$data->nik}}" disabled>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" class="form-control" value="{{$data->name}}" disabled>
                </div>
                <div class="col-md-6">
                    <label for="jk">Jenis Kelamin</label>
                    <select id="jk" class="form-control" disabled>
                        <option value="Pria" <?php if ('Pria' == $data->jk) {
                            echo 'selected';
                        } ?>>Pria
                        </option>
                        <option value="Wanita" <?php if ('Wanita' == $data->jk) {
                            echo 'selected';
                        } ?>>Wanita
                        </option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <label for="tempat_lahir">Tempat, Tanggal Lahir</label>
                    <input type="text" id="tempat_lahir" class="form-control"
                           value="{{$data->tempat_lahir}}, {{\Carbon\Carbon::createFromFormat('Y-m-d',
                               $data->tgl_lahir)->formatLocalized('%A %d %B %Y')}}" disabled>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <label for="alamat">Message</label>
                    <textarea id="alamat" class="form-control" disabled>{{$data->alamat}}</textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <label for="sk">Pengambilan SK</label>
                    <select id="sk" class="form-control" disabled>
                        <option value="UPTSA Pusat" <?php if ('UPTSA Pusat' == $data2->tempat_sk) {
                            echo 'selected';
                        } ?>>UPTSA PUSAT
                        </option>
                        <option value="UPTSA Timur" <?php if ('UPTSA Timur' == $data2->tempat_sk) {
                            echo 'selected';
                        } ?>>UPTSA TIMUR
                        </option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        <p align="justify">Dengan ini saya menyatakan bahwa data yang saya isikan adalah benar dan
                            tanpa paksaan dari pihak manapun. Apabila dilain waktu data tersebut terbukti tidak
                            benar, maka saya bersedia menerima sanksi apapun sesuai peraturan perundang-undangan
                            yang berlaku.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12">
                    <button type="submit" value="KONFIRMASI"
                            onclick="window.location.href='{{route('hama.save.kelima')}}'"
                            class="btn btn-primary btn-block">KONFIRMASI
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <script>
        @if(\Session::has('status'))
    swal({
            title: '{{ session('status') }}',
            type: 'info',
            timer: '1500'
        });
        @endif
    </script>
@endsection