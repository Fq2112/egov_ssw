@extends('layouts.user.mst_user_relog')
@section('title', 'SSWS - Surabaya Single Window Sanitary | Riwayat Perizinan')
@section('content')
    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-bottom: 3em">
                        <h2><i class="fa fa-history"></i> Riwayat Permohonan Surat Izin</h2>
                    </div>
                </div>
                <?php
                $apotek2 = \App\trPerizinanApotik::where('user_id', Auth::user()->id)->count();
                $depo2 = \App\trPerizinanDepo::where('user_id', Auth::user()->id)->count();
                $hama2 = \App\trPerizinanHama::where('user_id', Auth::user()->id)->count();
                ?>
                <div class="row">
                    <div class="col-lg-12 text-center" style="margin-bottom: 3em">
                        @if($apotek2 <= 0 && $depo2 <= 0 && $hama2 <= 0)
                            <h3 class="animate-box"><em>Tidak ada riwayat perizinan&hellip;</em></h3>
                            <script>
                                swal({
                                    title: 'Oops...',
                                    text: 'tidak ada riwayat!',
                                    type: 'warning',
                                    timer: '3000'
                                });
                            </script>
                        @else
                            <ul class="nav nav-tabs">
                                @if($apotek2 > 0)
                                    @if($apotek2 > 0 &&$depo2 > 0 &&$hama2 > 0)
                                        <li class="active"><a data-toggle="tab" href="#apotek">Apotek</a></li>
                                    @elseif($apotek2 > 0 &&$depo2 > 0 || $apotek2 > 0 &&$hama2 > 0)
                                        <li class="active"><a data-toggle="tab" href="#apotek">Apotek</a></li>
                                    @elseif($apotek2 > 0 && $depo2 <= 0 || $hama2 <= 0)
                                        <li class="active"><a data-toggle="tab" href="#apotek">Apotek</a></li>
                                    @endif
                                @else
                                    <li class="disabled">
                                        <a data-toggle="tooltip" title="belum ada riwayat perizinan!" href="#apotek">
                                            Apotek</a></li>
                                @endif

                                @if($depo2 > 0)
                                    @if($apotek2 > 0 &&$depo2 > 0 &&$hama2 > 0)
                                        <li><a data-toggle="tab" href="#air">Depo Air Minum</a></li>
                                    @elseif( $depo2 > 0 && $hama2 > 0)
                                        <li class="active"><a data-toggle="tab" href="#air">Depo Air Minum</a></li>
                                    @elseif($depo2 > 0 && $apotek2 > 0 || $depo2 > 0 && $hama2 > 0)
                                        <li><a data-toggle="tab" href="#air">Depo Air Minum</a></li>
                                    @elseif($depo2 > 0 && $apotek2 <= 0 || $hama2 <= 0)
                                        <li class="active"><a data-toggle="tab" href="#air">Depo Air Minum</a></li>
                                    @endif
                                @else
                                    <li class="disabled">
                                        <a data-toggle="tooltip" title="belum ada riwayat perizinan!" href="#air">
                                            Depo Air Minum</a></li>
                                @endif

                                @if($hama2 > 0)
                                    @if($apotek2 > 0 &&$depo2 > 0 &&$hama2 > 0)
                                        <li><a data-toggle="tab" href="#hama">Pengendalian Hama</a></li>
                                    @elseif($hama2 > 0 && $apotek2 > 0 || $depo2 > 0 && $hama2 > 0)
                                        <li><a data-toggle="tab" href="#hama">Pengendalian Hama</a></li>
                                    @elseif($hama2 > 0 && $apotek2 <= 0 || $depo2 <= 0)
                                        <li class="active"><a data-toggle="tab" href="#hama">Pengendalian
                                                Hama</a></li>
                                    @endif
                                @else
                                    <li class="disabled">
                                        <a data-toggle="tooltip" title="belum ada riwayat perizinan!"
                                           href="#hama">
                                            Pengendalian Hama</a></li>
                                @endif
                            </ul>
                            <div class="tab-content" style="margin-top: 1em">
                                <div id="apotek" class="tab-pane fade in
                                @if($apotek2 > 0 &&$depo2 > 0 &&$hama2 > 0)
                                        active
                                @elseif($apotek2 > 0 &&$depo2 > 0 || $apotek2 > 0 &&$hama2 > 0)
                                        active
@elseif($apotek2 > 0 && $depo2 <= 0 && $hama2 <= 0)
                                        active
@endif text-center">
                                    <h3>Apotek</h3>
                                    <div class="text-right">
                                        @if($c_apotek > 0 && $c_air > 0 && $c_hama > 0)
                                            <a target="_blank"
                                               href="{{url('/member/'.Auth::user()->id.'/history/print-apotek')}}">
                                                <button data-toggle="tooltip" title="Print Riwayat"
                                                        class="btn btn-primary">
                                                    <i class="fa fa-print"></i>
                                                </button>
                                            </a>
                                        @else
                                            <a>
                                                <button onclick="return alert('Tidak ada riwayat perizinan apotek...')"
                                                        data-toggle="tooltip"
                                                        title="Print Riwayat Apotek"
                                                        class="btn btn-primary">
                                                    <i class="fa fa-print"></i>
                                                </button>
                                            </a>
                                        @endif
                                    </div>
                                    <br>
                                    <table class="table table-responsive table-bordered table-hover" width="100%"
                                           id="example1" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th width="10">No</th>
                                            <th>ID Order</th>
                                            <th>Tanggal Daftar</th>
                                            <th>Nama Pemohon</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 0 ?>
                                        @foreach($apotek as $item)
                                            <tr>
                                                <td>{{$no=$no+1}}</td>
                                                <td>{{sprintf("%04d", $item->id)}}</td>
                                                <?php $berkas = \App\berkasApotek::where('apotek_proses_id', $item->id)->first()?>
                                                @if(!is_null($item->tgl_perizinan))
                                                    <td>{{\Carbon\Carbon::createFromFormat('Y-m-d',$item->tgl_perizinan)->formatLocalized('%A %d %B %Y')}}</td>
                                                @else
                                                    <td>Data belum teregister</td>
                                                @endif
                                                <?php $item2 = \App\mPemohon::findOrFail($item->id_pemohon)?>
                                                <td>{{$item2->name}}</td>

                                                @if ($item->id_apotek==null)
                                                    <td>Mengisi Data Apotek</td>
                                                @elseif ($item->id_pemilik==null)
                                                    <td>Mengisi Data Pemilik</td>
                                                @elseif (!is_null($item->id_pemilik))
                                                    <?php $alat = \App\mAlatApotik::where('pemohon_id', $item->id)->first()?>
                                                    @if(is_null($alat))
                                                        <td>Mengisi Data Alat</td>
                                                    @elseif ($item->id_apoteker==null)
                                                        <td>Mengisi Data Apoteker</td>

                                                    @elseif ($item->status==null&&is_null($berkas))
                                                        <td>Pemohon belum upload data /cetak</td>
                                                    @elseif ($item->status==null&&!is_null($berkas))
                                                        <td>Pemohon belum konfirmasi ketentuan</td>
                                                    @elseif ($item->status==1)
                                                        <td>Menunggu Konfirmasi UPTSA</td>
                                                    @elseif ($item->status==2)
                                                        <td>Menunggu Konfirmasi KASIE</td>
                                                    @elseif ($item->status==3)
                                                        <td>Menunggu Konfirmasi KABID</td>
                                                    @elseif ($item->status==4)
                                                        <td>Menunggu Konfirmasi SEKRETARIS</td>
                                                    @elseif ($item->status==5)
                                                        <td>Menunggu Konfirmasi KADIN</td>
                                                    @elseif ($item->status==6)
                                                        <td>Permohonan diterima</td>
                                                    @endif

                                                @endif

                                                @if ($item->id_apotek==null)
                                                    <td><a href="#">Lanjutkan Pendaftaran</a></td>
                                                @elseif ($item->id_pemilik==null)
                                                    <td><a href="#">Lanjutkan Pendaftaran</a></td>
                                                @elseif (!is_null($item->id_pemilik))
                                                    <?php $alat = \App\mAlatApotik::where('pemohon_id', $item->id)->first()?>
                                                    @if(is_null($alat))
                                                        <td><a href="#">Lanjutkan Pendaftaran</a></td>
                                                    @elseif ($item->id_apoteker==null)
                                                        <td><a href="#">Lanjutkan Pendaftaran</a></td>

                                                    @elseif ($item->status==null&&is_null($berkas))
                                                        <td><a href="#">Upload Data</a></td>
                                                    @elseif ($item->status==null&&!is_null($berkas))
                                                        <td><a href="#">Konfirmasi Pendaftaran</a></td>
                                                    @elseif ($item->status==1)
                                                        <td>Proses</td>
                                                    @elseif ($item->status==2)
                                                        <td>Proses</td>
                                                    @elseif ($item->status==3)
                                                        <td>Proses</td>
                                                    @elseif ($item->status==4)
                                                        <td>Proses</td>
                                                    @elseif ($item->status==5)
                                                        <td>proses</td>
                                                    @elseif ($item->status==6)
                                                        <td><a <a target="_blank" href="{{url('member/'.$item->id.'/printakhir')}}">print</a></td>
                                                    @endif
                                                @endif
                                                <?php $alat = \App\mAlatApotik::where('pemohon_id', $item->id)->first()?>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Order</th>
                                            <th>Tanggal Daftar</th>
                                            <th>Nama Pemohon</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div id="air" class="tab-pane fade in
                                @if(($depo2 > 0 && $hama2 > 0) || ($depo2 > 0 && $apotek2 <= 0 || $hama2 <= 0))
                                        active
@endif text-center">
                                    <h3>Penyelenggaraan Depo Air Minum</h3>
                                    <div class="text-right">
                                        @if($c_apotek > 0 || $c_air > 0 || $c_hama > 0)
                                            <a target="_blank"
                                               href="{{url('/member/'.Auth::user()->id.'/history/print-air')}}">
                                                <button data-toggle="tooltip" title="Print Riwayat"
                                                        class="btn btn-primary">
                                                    <i class="fa fa-print"></i>
                                                </button>
                                            </a>
                                        @else
                                            <a>
                                                <button onclick="return alert('Tidak ada riwayat perizinan Depo air minum..')"
                                                        data-toggle="tooltip"
                                                        title="Print Riwayat Depo Air Minum"
                                                        class="btn btn-primary">
                                                    <i class="fa fa-print"></i>
                                                </button>
                                            </a>
                                        @endif
                                    </div>
                                    <br>
                                    <table class="table table-responsive table-bordered table-hover" width="100%"
                                           id="example2" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th width="10">No</th>
                                            <th>ID Order</th>
                                            <th>Tanggal Daftar</th>
                                            <th>Nama Pemohon</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no2 = 0 ?>
                                        @foreach($depot as $item)
                                            <tr>
                                                <td>{{$no2=$no2+1}}</td>
                                                <td>{{sprintf("%04d", $item->id)}}</td>
                                                <?php $berkas2 = \App\berkasDepot::where('depot_proses_id', $item->id)->first()?>
                                                @if(!is_null($item->tgl_perizinan))
                                                    <td>{{\Carbon\Carbon::createFromFormat('Y-m-d',$item->tgl_perizinan)->formatLocalized('%A %d %B %Y')}}</td>
                                                @else
                                                    <td>Data belum teregister</td>
                                                @endif
                                                <td>{{$item->name}}</td>

                                                @if ($item->id_depo==null)
                                                    <td>Mengisi data alamat depo</td>
                                                @elseif ($item->status==null&&is_null($berkas2))
                                                    <td>Mengupload/cetak data</td>
                                                @elseif ($item->status==null&&!is_null($berkas2))
                                                    <td>pemohon belum konfirmasi ketentuan</td>
                                                @elseif ($item->status==1)
                                                    <td>Menunggu Konfirmasi UPTSA</td>
                                                @elseif ($item->status==2)
                                                    <td>Menunggu Konfirmasi KASIE</td>
                                                @elseif ($item->status==3)
                                                    <td>Menunggu Konfirmasi KABID</td>
                                                @elseif ($item->status==4)
                                                    <td>Menunggu Konfirmasi SEKRETARIS</td>
                                                @elseif ($item->status==5)
                                                    <td>Menunggu Konfirmasi KADIN</td>
                                                @elseif ($item->status==6)
                                                    <td>Permohonan diterima</td>
                                                @endif

                                                @if ($item->id_depo==null)
                                                    <td><a href="#">Lanjutkan Pendaftaran</a></td>
                                                @elseif ($item->status==null&&is_null($berkas2))
                                                    <td><a href="#">Lanjutkan Pendaftaran</a></td>
                                                @elseif ($item->status==null&&!is_null($berkas2))
                                                    <td><a href="#">Konfirmasi Pendaftaran</a></td>
                                                @elseif ($item->status==1)
                                                    <td>Proses</td>
                                                @elseif ($item->status==1)
                                                    <td>Proses</td>
                                                @elseif ($item->status==2)
                                                    <td>Proses</td>
                                                @elseif ($item->status==3)
                                                    <td>Proses</td>
                                                @elseif ($item->status==4)
                                                    <td>Proses</td>
                                                @elseif ($item->status==5)
                                                    <td>proses</td>
                                                @elseif ($item->status==6)
                                                    <td><a target="_blank" href="{{url('member/'.$item->id.'/printakhirdepo')}}">print</a></td>
                                                @endif

                                            </tr>

                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th width="10">No</th>
                                            <th>ID Order</th>
                                            <th>Tanggal Daftar</th>
                                            <th>Nama Pemohon</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div id="hama" class="tab-pane fade in
                                @if($hama2 > 0 && $apotek2 <= 0 || $depo2 <= 0)
                                        active
@endif text-center">
                                    <h3>Operasional Perusahaan Pengendalian Hama</h3>
                                    <div class="text-right">
                                        @if($c_apotek > 0 || $c_air > 0 || $c_hama > 0)
                                            <a target="_blank"
                                               href="{{url('/member/'.Auth::user()->id.'/history/print-hama')}}">
                                                <button data-toggle="tooltip" title="Print Riwayat"
                                                        class="btn btn-primary">
                                                    <i class="fa fa-print"></i>
                                                </button>
                                            </a>
                                        @else
                                            <a>
                                                <button onclick="return alert('Tidak ada riwayat perizinan pengendalian hama...')"
                                                        data-toggle="tooltip"
                                                        title="Print Riwayat Pengendalian Hama"
                                                        class="btn btn-primary">
                                                    <i class="fa fa-print"></i>
                                                </button>
                                            </a>
                                        @endif
                                    </div>
                                    <br>
                                    <table class="table table-responsive table-bordered table-hover" width="100%"
                                           id="example3" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Order</th>
                                            <th>Tanggal Daftar</th>
                                            <th>Nama Pemohon</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no3 = 0 ?>
                                        @foreach($hama as $item)
                                            <tr>
                                                <td>{{$no3=$no3+1}}</td>
                                                <td>{{sprintf("%04d", $item->id)}}</td>
                                                <?php $berkas2 = \App\berkasHama::where('hama_proses_id', $item->id)->first()?>
                                                @if(!is_null($item->tgl_perizinan))
                                                    <td>{{\Carbon\Carbon::createFromFormat('Y-m-d',$item->tgl_perizinan)->formatLocalized('%A %d %B %Y')}}</td>
                                                @else
                                                    <td>Data belum teregister</td>
                                                @endif
                                                <td>{{$item->name}}</td>

                                                @if ($item->id_perusahaan==null)
                                                    <td>Mengisi data alamat perusahaan</td>
                                                @elseif ($item->status==null&&is_null($berkas2))
                                                    <td>Mengupload/cetak data</td>
                                                @elseif ($item->status==null&&!is_null($berkas2))
                                                    <td>pemohon belum konfirmasi ketentuan</td>
                                                @elseif ($item->status==1)
                                                    <td>Menunggu Konfirmasi UPTSA</td>
                                                @elseif ($item->status==2)
                                                    <td>Menunggu Konfirmasi KASIE</td>
                                                @elseif ($item->status==3)
                                                    <td>Menunggu Konfirmasi KABID</td>
                                                @elseif ($item->status==4)
                                                    <td>Menunggu Konfirmasi SEKRETARIS</td>
                                                @elseif ($item->status==5)
                                                    <td>Menunggu Konfirmasi KADIN</td>
                                                @elseif ($item->status==6)
                                                    <td>Permohonan diterima</td>
                                                @endif

                                                @if ($item->id_perusahaan==null)
                                                    <td><a href="#">Lanjutkan Pendaftaran</a></td>
                                                @elseif ($item->status==null&&is_null($berkas2))
                                                    <td><a href="#">Lanjutkan Pendaftaran</a></td>
                                                @elseif ($item->status==null&&!is_null($berkas2))
                                                    <td><a href="#">Konfirmasi Pendaftaran</a></td>
                                                @elseif ($item->status==1)
                                                    <td>Proses</td>
                                                @endif

                                            </tr>

                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Order</th>
                                            <th>Tanggal Daftar</th>
                                            <th>Nama Pemohon</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection