@extends('layouts.user.mst_user_relog')
@section('title', 'SSWS - Surabaya Single Window Sanitary | Form Perizinan Depo Air Minum')
@section('content')
    <div style="padding: 3em 0;" id="fh5co-practice" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-bottom: 1em">
                    <h2><i class="fa fa-bitbucket"></i> Berkas Permohonan</h2>
                </div>
                <div class="col-lg-12">
                    <nav>
                        <ol class="cd-multi-steps text-bottom count">
                            <li class="visited"><a href="#1">Identitas Pemohon</a></li>
                            <li class="visited"><a href="#2">Identitas Depo</a></li>
                            <li class="visited"><a href="#3">Cetak Dokumen</a></li>
                            <li class="current"><a href="#4">Upload Dokumen</a></li>
                            <li><a href="#5">Konfirmasi Permohonan</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-bottom: 1em">
                    <h2 style="padding-top: 5%;padding-bottom: 5%">Upload Dokumen</h2>
                </div>
                <form action="{{route('depot.save.keempat')}}" method="post" class="form-horizontal"
                      enctype="multipart/form-data" data-toggle="validator">
                    {{csrf_field()}}

                    <div class="col-md-4 text-center animate-box">
                        <div class="services image-upload">
                            <label for="file-input1">
                                <span class="icon">
                                    <i class="fa fa-cloud-upload" data-placement="bottom" data-toggle="tooltip"
                                       title="Klik disini untuk upload berkas!"></i></span>
                            </label>
                            <input id="file-input1" type="file" name="file[]" multiple required>
                            <div class="desc">
                                <p>Surat permohonan (bermaterai Rp. 6.000,-) dilengkapi dengan nomor dan tanggal
                                    permohonan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services image-upload">
                            <label for="file-input2">
                                <span class="icon">
                                    <i class="fa fa-cloud-upload" data-placement="bottom" data-toggle="tooltip"
                                       title="Klik disini untuk upload berkas!"></i></span>
                            </label>
                            <input id="file-input2" type="file" name="file2[]" multiple required>
                            <div class="desc">
                                <p>Scan asli KTP pemohon yang berlaku<br><br><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services image-upload">
                            <label for="file-input3">
                                <span class="icon">
                                    <i class="fa fa-cloud-upload" data-placement="bottom" data-toggle="tooltip"
                                       title="Klik disini untuk upload berkas!"></i></span>
                            </label>
                            <input id="file-input3" type="file" name="file3[]" multiple required>
                            <div class="desc">
                                <p>Surat keterangan domisili usaha<br><br><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services image-upload">
                            <label for="file-input4">
                                <span class="icon">
                                    <i class="fa fa-cloud-upload" data-placement="bottom" data-toggle="tooltip"
                                       title="Klik disini untuk upload berkas!"></i></span>
                            </label>
                            <input id="file-input4" type="file" name="file4[]" multiple required>
                            <div class="desc">
                                <p>Denah Ruangan dan Ukurannya<br><br><br><br><br><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services image-upload">
                            <label for="file-input5">
                                <span class="icon">
                                    <i class="fa fa-cloud-upload" data-placement="bottom" data-toggle="tooltip"
                                       title="Klik disini untuk upload berkas!"></i></span>
                            </label>
                            <input id="file-input5" type="file" name="file5[]" multiple required>
                            <div class="desc">
                                <p>Gambar sistem kerja peralatan pengelolaan air minum dilengkapi dengan spesifikasi<br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <div class="services image-upload">
                            <label for="file-input6">
                                <span class="icon">
                                    <i class="fa fa-cloud-upload" data-placement="bottom" data-toggle="tooltip"
                                       title="Klik disini untuk upload berkas!"></i></span>
                            </label>
                            <input id="file-input6" type="file" name="file6[]" multiple required>
                            <div class="desc">
                                <p>Scan asli surat ijin pengambilan air baku (Surat keterangan asal air baku) dilengkapi
                                    dengan contact personnya dan no. telpon yang bisa dihubungi dan hasil pemeriksaan
                                    laboratorium terbaru UPLOAD</p>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group col-md-12 text-center animate-box">
                        <p><input type="submit" value="SUBMIT" class="btn btn-primary btn-block"></p>
                    </div>
                </form>
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