@extends('layouts.user.mst_user_relog')
@section('title', 'SSWS - Surabaya Single Window Sanitary | Form Perizinan Operasional Pengendalian Hama')
@section('content')
    <div style="padding: 3em 0;" id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-bottom: 1em">
                        <h2><i class="fa fa-bug"></i> Berkas Permohonan</h2>
                    </div>
                    <div class="col-lg-12">
                        <nav>
                            <ol class="cd-multi-steps text-bottom count">
                                <li class="visited"><a href="#1">Identitas Pemohon</a></li>
                                <li class="current"><a href="#2">Identitas Perusahaan</a></li>
                                <li><a href="#3">Cetak Dokumen</a></li>
                                <li><a href="#4">Upload Dokumen</a></li>
                                <li><a href="#5">Konfirmasi Permohonan</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="w3-panel w3-card">
                            <h2 style="padding-top: 5%" class="text-center">Identitas Perusahaan Pengendalian Hama</h2>
                            <form action="{{route('hama.save.kedua')}}" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="row form-group">
                                    <div class="col-lg-12">
                                        <input placeholder="Nama perusahaan" class="form-control" type="text"
                                               id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-12">
                                        <input class="form-control" placeholder="Phone" type="text" name="phone"
                                               value="{{\Illuminate\Support\Facades\Auth::user()->phone}}"
                                               maxlength="13" onkeypress="return hanyaAngka(event, false)"
                                               required>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-lg-6">
                                        <label for="provinsi">Provinsi</label>
                                        <select name="provinsi" id="provinsi" class="form-control provinsi">
                                            <option value="0" disabled selected>-- Pilih --</option>
                                            @foreach($data1 as $dt)
                                                <option value="{{$dt->id}}">{{$dt->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="kota">Kota</label>
                                        <select class="form-control" name="kota" id="kota">
                                            <option value="0" disabled selected>-- Pilih --</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-lg-6">
                                        <label for="kecamatan">Kecamatan</label>
                                        <select class="form-control" name="kecamatan" id="kecamatan">
                                            <option value="0" disabled selected>-- Pilih --</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="desa">Desa</label>
                                        <select class="form-control" name="desa" id="desa">
                                            <option value="0" disabled selected>-- Pilih --</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-lg-12">
                                                <textarea class="form-control" placeholder="Alamat" id="alamat"
                                                          name="alamat" required></textarea>
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

        $(document).ready(function () {
            $(document).on('change', '#provinsi', function () {
                console.log("hmm its change");

                var kota_id = $(this).val();
                console.log(kota_id);

                var div = $(this).parent();
                var op = " ";
                var op2 = " ";
                var op3 = " ";


                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('apotek/carikota/')!!}',
                    data: {'id': kota_id},
                    success: function (data) {
                        console.log('success');

                        console.log(data);

                        console.log(data.length);
//                    if (!data.length){
//                        op += '<option value="0"  selected disabled>Sesi Habis</option>';
//                    }

                        op += '<option value="0" selected disabled>-- Pilih Kota --</option>';
                        for (var i = 0; i < data.length; i++) {

                            op += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                        }
                        op2 += '<option value="0" selected disabled>-- Pilih Kecamatan --</option>';
                        op3 += '<option value="0" selected disabled>-- Pilih Desa --</option>';


                        $('#kota').html(" ");
                        $('#kota').append(op);
                        $('#kecamatan').html(" ");
                        $('#kecamatan').append(op2);
                        $('#desa').html(" ");
                        $('#desa').append(op3);

                    },
                    error: function () {
                        swal({
                            title: 'Oops...',
                            text: 'something wrong!',
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });

            })

            $(document).on('change', '#kota', function () {
                console.log("hmm its change");

                var kecamatan = $(this).val();
                console.log(kecamatan);

                var div = $(this).parent();
                var op = " ";
                var op2 = " ";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('apotek/carikecamatan/')!!}',
                    data: {'id': kecamatan},
                    success: function (data) {
                        console.log('success');

                        console.log(data);

                        console.log(data.length);
                        if (!data.length) {
                            op += '<option value="0"  selected disabled>Data Kosong</option>';
                        }

                        op += '<option value="0" selected disabled>-- Pilih Kecamatan --</option>';
                        for (var i = 0; i < data.length; i++) {

                            op += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                        }
                        op2 += '<option value="0" selected disabled>-- Pilih Desa --</option>';

                        $('#kecamatan').html(" ");
                        $('#kecamatan').append(op);
                        $('#desa').html(" ");
                        $('#desa').append(op2);

                    },
                    error: function () {
                        swal({
                            title: 'Oops...',
                            text: 'something wrong!',
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });

            })

            $(document).on('change', '#kecamatan', function () {
                console.log("hmm its change");

                var desa = $(this).val();
                console.log(desa);

                var div = $(this).parent();
                var op = " ";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('apotek/caridesa/')!!}',
                    data: {'id': desa},
                    success: function (data) {
                        console.log('success');

                        console.log(data);

                        console.log(data.length);
//                    if (!data.length){
//                        op += '<option value="0"  selected disabled>Data Kosong</option>';
//                    }
                        op += '<option value="0" selected disabled>-- Pilih Desa --</option>';
                        for (var i = 0; i < data.length; i++) {

                            op += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                        }

                        $('#desa').html(" ");
                        $('#desa').append(op);

                    },
                    error: function () {
                        swal({
                            title: 'Oops...',
                            text: 'something wrong!',
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });

            })
        })
        @if(\Session::has('status'))
swal({
            title: '{{ session('status') }}',
            type: 'info',
            timer: '1500'
        });
        @endif
    </script>
@endsection