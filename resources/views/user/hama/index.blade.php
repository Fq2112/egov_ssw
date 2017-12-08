@extends('layouts.user.mst_user')
@section('title', 'SSWS - Surabaya Single Window Sanitary | Pengendalian Hama')
@section('nav')
    <li><a href="{{route('dashboard')}}">Home</a></li>
    <li><a href="{{route('dashboard.about')}}">About</a></li>
    <li><a href="{{route('dashboard.contact')}}">Contact</a></li>
@endsection
@section('content')
    <div class="fh5co-loader"></div>

    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{asset('images/img_bg_3.jpg')}});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h1>Perizinan Pengendalian Hama</h1>
                                    <h2>Melakukan proses pengajuan permohonan Surat Izin Operasional Perusahaan Pengendalian Hama</h2>
                                    <p><a class="btn btn-primary btn-lg"
                                          href="{{route('hama.dashboard')}}#fh5co-contact">AJUKAN PERMOHONAN
                                            SEKARANG</a></p>
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
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-bottom: 3em">
                    <h2><i class="fa fa-bug"></i> Surat Izin Operasional Perusahaan Pengendalian Hama</h2>
                </div>
                <div class="col-lg-6" style="margin-bottom: 3em">
                    @if(Auth::guest())
                        <a href="{{route('login')}}">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-lock"></i> Silahkan Login untuk membuka perizinan ini
                            </button>
                        </a>
                    @else
                        <a href="#formdaftar">
                            <button href="#formdaftar" type="button" class="btn btn-primary">
                                <i class="fa fa-pencil-square-o"></i> Formulir Pendaftaran
                            </button>
                        </a>
                    @endif
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#persyaratan">Persyaratan</a></li>
                    <li><a data-toggle="tab" href="#prosedur">Prosedur</a></li>
                    <li><a data-toggle="tab" href="#dasarhukum">Dasar Hukum</a></li>
                    <li><a data-toggle="tab" href="#unduhform">Unduh Form</a></li>
                    <li><a data-toggle="tab" href="#retribusi">Retribusi</a></li>
                    <li><a data-toggle="tab" href="#waktu">Waktu</a></li>
                    <li><a data-toggle="tab" href="#maklumatpelayanan">Maklumat Pelayanan</a></li>
                    <li><a data-toggle="tab" href="#visimisi">Visi & Misi</a></li>
                    <li><a data-toggle="tab" href="#motto">Motto</a></li>
                    <li><a data-toggle="tab" href="#kontak">Kontak</a></li>
                </ul>

                <div class="tab-content" style="margin-top: 1em">
                    <div id="persyaratan" class="tab-pane fade in active">
                        <h3>Persyaratan yang diperlukan:</h3>
                        <ol>
                            <li>Surat Permohonan</li>
                            <li>Mengisi formulir isian permohonan izin operasional pemberantasan hama</li>
                            <li>Mengisi formulir isian permohonan rekomendasi pestisida terbatas (bagi pengusaha yang menggunakan pestisida terbatas).</li>
                            <li>Fotocopy Surat Izin Usaha Pest Control/Surat Izin Tempat Usaha Pest Control</li>
                            <li>Denah dan luas bangunan dan ukuran</li>
                            <li>Peta lokasi dan alamat perusahaan</li>
                            <li>Daftar Nama / Identitas petugas teknis perusahaan yang terdiri atas : Nama, jenis kelamin, umur, alamat, pendidikan, jabatan dan uraian tugas</li>
                            <li>Foto copy Sertifikat/Ijazah bagi penanggung jawab teknis</li>
                            <li>Surat Keterangan berbadan sehat dari Dokter Pemerintah, Suami dan Istri (Puskesmas) untuk tenaga supervisor, operator dan teknisi</li>
                            <li>Surat penunjukan sebagai penanggung jawab teknis perusahaan Pest Control dilengkapi materai 6000</li>
                            <li>Surat pernyataan sebagai penaggung jawab teknis perusahaan Pest Control dilengkapi materai 6000</li>
                            <li>Surat pemeriksaan Choline Estherase bagi petugas operator dan penjamah pestisida (awal, berkala 6 bulan sekali ) dari laboratorium kesehatan</li>
                            <li>Rekomendasi dari Asosiasi Perusahaan Pengendali Hama (Pest Control)</li>
                            <li>Menginformasikan kepada Dinas Kesehatan Kota Surabaya, apabila terjadi penggantian penanggung jawab teknis</li>
                            <li>Pas Photo digital terbaru ukuran (3x4 cm)</li>
                        </ol>
                    </div>
                    <div id="prosedur" class="tab-pane fade">
                        <img style="display: block; margin: auto;" class="img-responsive" src="{{asset('images/flowchart/flowchart_hama.png')}}">
                    </div>
                    <div id="dasarhukum" class="tab-pane fade">
                        <h3>Dasar Hukum</h3>
                        <p><a href="http://jdih.surabaya.go.id/pdfdoc/perda_55.pdf">Peraturan Daerah Kota Surabaya Nomor 12 Tahun 2003</a> tentang Perizinan di Bidang Kesehatan</p>
                    </div>
                    <div id="unduhform" class="tab-pane fade">
                        <p>Hanya menyediakan Formulir Electronic</p>
                    </div>
                    <div id="retribusi" class="tab-pane fade">
                        <img class="img-responsive" src="{{asset('images/gratis.png')}}">
                    </div>
                    <div id="waktu" class="tab-pane fade">
                        <h3>Waktu Layanan</h3>
                        <p>12 hari kerja setelah berkas lengkap dan benar.</p>
                    </div>
                    <div id="maklumatpelayanan" class="tab-pane fade text-center">
                        <h3>Maklumat Pelayanan</h3>
                        <p align="justify">
                            <em>Dinas Kesehatan Kota Surabaya bertekad untuk menyelenggarakan pelayanan sesuai Standar Pelayanan yang telah ditetapkan guna mewujudkan kepuasan pengguna jasa layanan dalam rangka pelayanan prima.</em>
                        </p>
                    </div>
                    <div id="visimisi" class="tab-pane fade text-center">
                        <h3>Visi dan Misi</h3>
                        <ul style="list-style-type: none" class="text-left">
                            <li><strong>Visi</strong></li>
                            <ul style="list-style-type: none">
                                <li>Terwujudnya Masyarakat Kota Surabaya yang Sehat, Cerdas dan Mandiri</li>
                            </ul>
                            <li><strong>Misi</strong></li>
                            <ol>
                                <li>Meningkatkan pemberdayaan masyarakat untuk hidup sehat;</li>
                                <li>Meningkatkan akses pelayanan kesehatan yang bermutu dan terjangkau segala lapisan masyarakat;</li>
                                <li>Meningkatkan upaya pengendalian penyakit dan penanggulangan masalah kesehatan;</li>
                                <li>Meningkatkan pembiayaan kesehatan;</li>
                                <li>Meningkatkan pemenuhan, pengembangan dan pendayagunaan sumber daya manusia kesehatan.</li>
                            </ol>
                        </ul>
                    </div>
                    <div id="motto" class="tab-pane fade text-center">
                        <h3>Motto Pelayanan</h3>
                        <em>Masyarakat Sehat, Tujuan Kami.</em>
                    </div>
                    <div id="kontak" class="tab-pane fade text-center">
                        <ol class="text-left">
                            <li><strong>Dinas Kesehatan (DINKES) Kota Surabaya</strong></li>
                            <table>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>Alamat</li>
                                            <li>Phone</li>
                                            <li>Fax</li>
                                            <li>E-mail</li>
                                        </ul>
                                        <ul style="list-style-type: none">
                                            <li>Pejabat yang menangani</li>
                                            <ul>
                                                <li>Nama</li>
                                                <li>Telepon | E-mail</li>
                                            </ul>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul style="list-style-type: none">
                                            <li>:</li>
                                            <li>:</li>
                                            <li>:</li>
                                            <li>:</li>
                                            <li>&nbsp;</li>
                                            <li>:</li>
                                            <li>:</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul style="list-style-type: none">
                                            <li><a href="https://goo.gl/maps/JmKygRGwyhT2">Jl. Jemursari 197 Surabaya, 60243</a></li>
                                            <li>
                                                <a href="tel://+62318439473">+6231-8439473</a>,
                                                <a href="tel://+62318439372">8439372</a>
                                            </li>
                                            <li><a href="tel://+62318483393">+6231-8483393</a></li>
                                            <li>
                                                <a href="mailto:dinkes.surabaya@gmail.com">dinkes.surabaya@gmail.com</a>
                                            </li>
                                            <li>&nbsp;</li>
                                            <li>Dian Wahyu Iswarini, S.KM</li>
                                            <li>
                                                <a href="tel://+6281939100249">+6281-93910-0249</a> | -
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>

                            <li><strong>Layanan Pengaduan MEDIA CENTER</strong></li>
                            <table>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>Telepon</li>
                                            <li>Toll Free</li>
                                            <li>Fax</li>
                                            <li>SMS / MMS</li>
                                            <li>Website</li>
                                            <li>Facebook Surabaya</li>
                                            <li>Twitter</li>
                                            <li>Email</li>
                                            <li>Portal</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul style="list-style-type: none">
                                            <li>:</li>
                                            <li>:</li>
                                            <li>:</li>
                                            <li>:</li>
                                            <li>:</li>
                                            <li>:</li>
                                            <li>:</li>
                                            <li>:</li>
                                            <li>:</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul style="list-style-type: none">
                                            <li><a href="tel://+62315456290">+6231-5456290</a></li>
                                            <li><a href="tel://08001404122">0800-1404-122</a></li>
                                            <li><a href="fax://+62315463435">+6231-5463435</a></li>
                                            <li><a href="sms://+6281230257000">+62812-3025-7000</a></li>
                                            <li><a href="http://surabaya.go.id">www.surabaya.go.id</a></li>
                                            <li>
                                                <a href="https://facebook.com/sapawargakotasurabaya">
                                                    Sapawarga Kota Surabaya
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/sapawargasby">
                                                    @SapawargaSby
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:mediacenter@surabaya.go.id">mediacenter@surabaya.go.id</a>
                                            </li>
                                            <li>sapawarga.surabaya</li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection