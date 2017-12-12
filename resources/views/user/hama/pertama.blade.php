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
                                <li class="current"><a href="#1">Identitas Pemohon</a></li>
                                <li><a href="#2">Identitas Perusahaan</a></li>
                                <li><a href="#3">Cetak Dokumen</a></li>
                                <li><a href="#4">Upload Dokumen</a></li>
                                <li><a href="#5">Konfirmasi Permohonan</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="w3-panel w3-card">
                            <h2 style="padding-top: 5%" class="text-center">Identitas Pemohon</h2>
                            <div id="cek-data">
                                <form style="padding: 5%" action="" method="post" class="form-horizontal"
                                      data-toggle="validator">
                                    {{ csrf_field() }} {{ method_field('post') }}
                                    <div class="row form-group">
                                        <div class="col-lg-12">
                                            <div class="input-bar">
                                                <div class="input-bar-item width100">
                                                    <div class="input-group">
                                                        <input placeholder="NIK" class="form-control width100"
                                                               type="text" id="id" name="nik" required>
                                                        <input type="hidden" id="cek" name="cek" value="0">
                                                        <div class="input-group-btn">
                                                            <button style="height: 53px" class="btn btn-primary"
                                                                    type="submit">
                                                                <i class="fa fa-search"></i> CEK
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="jadi-data">
                                <form action="{{route('hama.save.pertama')}}" method="post" class="form-horizontal"
                                      data-toggle="validator">
                                    {{ csrf_field() }}
                                    <p class="harga_recorder content2"></p>
                                    <input type="hidden" id="nik" name="nik">
                                    <div class="row form-group">
                                        <div class="col-lg-12">
                                            <input placeholder="Nama pemohon" class="form-control" type="text"
                                                   id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-6">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input placeholder="Tempat lahir" class="form-control" id="tempat_lahir"
                                                   name="tempat_lahir" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="tgl_lahir">Tanggal Lahir</label>
                                            <input class="form-control" type="date" id="tgl_lahir"
                                                   name="tgl_lahir" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-6">
                                            <select class="form-control jk" name="jk" id="jk" required>
                                                <option value="0" disabled selected>-- Jenis Kelamin --</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="agama" id="agama" required>
                                                <option value="0" disabled selected>-- Agama --</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
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
                                        <div class="col-lg-6">
                                            <input class="form-control" placeholder="Kode pos" type="text"
                                                   name="kodepos" maxlength="5"
                                                   onkeypress="return hanyaAngka(event, false)" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control" placeholder="Phone" type="text" name="phone"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->phone}}"
                                                   maxlength="13" onkeypress="return hanyaAngka(event, false)"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-12">
                                            <input placeholder="E-mail" class="form-control" type="email"
                                                   name="email"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->email}}"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-12">
                                            <label for="no_Hygiene">Nomor Izin Sertifikasi Laik Hygiene Sanitasi</label>
                                            <input placeholder="Nomor hygiene" type="text" id="no_Hygiene"
                                                   class="form-control" name="no_Hygiene"
                                                   onkeypress="return hanyaAngka(event, false)">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-12">
                                            <select class="form-control" name="tempat_sk" required>
                                                <option value="0" disabled selected>
                                                    -- Tempat Pengambilan SK --
                                                </option>
                                                <option value="UPTSA Pusat">UPTSA Pusat</option>
                                                <option value="UPTSA Timur">UPTSA Timur</option>
                                            </select>
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
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <script type="text/javascript">

        $(function () {
            $('#cek-data form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()) {
                    var nik_id = $('#id').val();
                    var status = $('#cek').val();
                    if (status == 0) url = "{!!\Illuminate\Support\Facades\URL::to('apotek/cekdata/')!!}";
                    else url = "{{   'dalsjd/' }}" + id;
                    $('#jadi-data form')[0].reset();
                    $.ajax({
                        url: url,
                        type: "GET",
                        data: {'id': nik_id},
                        success: function (data) {
                            swal({
                                title: 'OK',
                                text: 'NIK ditemukan!',
                                type: 'success',
                                timer: '1500'
                            });
                            if (data.id > 0) {
                                $('.content2').show();
                                $('#name').val(data.name);
                                $('#nik').val(data.nik);
                                $('#tempat_lahir').val(data.tempat_lahir);
                                $('#tgl_lahir').val(data.tgl_lahir);
                                if (data.jk == 'Pria') {
                                    $('#jk').empty().append('<option value="0" disabled >--Pilih--</option>' +
                                        '<option value="Pria" selected>Pria</option>' +
                                        '<option value="Wanita">Wanita</option>');
                                }
                                else {
                                    $('#jk').empty().append('<option value="0" disabled >--Pilih--</option>' +
                                        '<option value="Pria" >Pria</option>' +
                                        '<option value="Wanita" selected>Wanita</option>');
                                }
                                if (data.agama == 'Islam') {
                                    $('#agama').empty().append(
                                        '<option value="0" disabled>--Pilih--</option>' +
                                        '<option value="Islam" selected>Islam</option>' +
                                        '<option value="Kristen">Kristen</option>' +
                                        '<option value="Katolik">Katolik</option>' +
                                        '<option value="Hindu">Hindu</option>' +
                                        '<option value="Budha">Budha</option>'
                                    );

                                }
                                else if (data.agama == 'Kristen') {
                                    $('#agama').empty().append(
                                        '<option value="0" disabled>--Pilih--</option>' +
                                        '<option value="Islam" >Islam</option>' +
                                        '<option value="Kristen" selected>Kristen</option>' +
                                        '<option value="Katolik">Katolik</option>' +
                                        '<option value="Hindu">Hindu</option>' +
                                        '<option value="Budha">Budha</option>');
                                }
                                else if (data.agama == 'Katolik') {
                                    $('#agama').empty().append(
                                        '<option value="0" disabled>--Pilih--</option>' +
                                        '<option value="Islam" >Islam</option>' +
                                        '<option value="Kristen">Kristen</option>' +
                                        '<option value="Katolik" selected>Katolik</option>' +
                                        '<option value="Hindu">Hindu</option>' +
                                        '<option value="Budha">Budha</option>');
                                }
                                else if (data.agama == 'Hindu') {
                                    $('#agama').empty().append(
                                        '<option value="0" disabled>--Pilih--</option>' +
                                        '<option value="Islam" >Islam</option>' +
                                        '<option value="Kristen">Kristen</option>' +
                                        '<option value="Katolik" >Katolik</option>' +
                                        '<option value="Hindu" selected>Hindu</option>' +
                                        '<option value="Budha">Budha</option>');
                                }
                                else {
                                    $('#agama').empty().append(
                                        '<option value="0" disabled>--Pilih--</option>' +
                                        '<option value="Islam" >Islam</option>' +
                                        '<option value="Kristen">Kristen</option>' +
                                        '<option value="Katolik" >Katolik</option>' +
                                        '<option value="Hindu">Hindu</option>' +
                                        '<option value="Budha" selected>Budha</option>');
                                }
                                $('#alamat').val(data.alamat);

                            }
                            else {
                                $('.content2').hide();
                                swal({
                                    title: 'Oops...',
                                    text: 'NIK not Found!',
                                    type: 'error',
                                    timer: '1500'
                                })
                            }
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
                    return false;
                }
            });
        });
        @if(\Session::has('status'))
swal({
            title: '{{ session('status') }}',
            type: 'info',
            timer: '1500'
        });
        @endif
    </script>
@endsection