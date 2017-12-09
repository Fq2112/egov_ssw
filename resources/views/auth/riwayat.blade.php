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
                <div class="row">
                    <div class="col-lg-12 text-center" style="margin-bottom: 3em">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#apotek">Apotek</a></li>
                            <li><a data-toggle="tab" href="#air">Depot Air Minum</a></li>
                            <li><a data-toggle="tab" href="#hama">Pengendalian Hama</a></li>
                        </ul>
                        <div class="tab-content" style="margin-top: 1em">
                            <div id="apotek" class="tab-pane fade in active text-center">
                                <h3>Apotek</h3>
                                <div class="text-right">
                                    @if($c_apotek > 0 || $c_air > 0 || $c_hama > 0)
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
                                            @if(!is_null($item->tgl_perizinan))
                                                <td>{{\Carbon\Carbon::createFromFormat('Y-m-d',$item->tgl_perizinan)->formatLocalized('%A %d %B %Y')}}</td>
                                            @else
                                                <td>Data belum teregister</td>
                                            @endif
                                            <?php $item2 = \App\mPemohon::findOrFail($item->id_pemohon)?>
                                            <td>{{$item2->name}}</td>

                                            <?php $alat = \App\mAlatApotik::where('pemohon_id', 4)->first()?>

                                            @if ($item->id_pemilik==null)
                                                @if($item->id_pemohon==session('apotek'))
                                                    <td>Mengisi Data Pemilik</td>
                                                @else
                                                    <td>Gagal</td>
                                                @endif
                                            @elseif ($item->id_apotek==null)
                                                @if($item->id_pemohon==session('pemohon'))
                                                    <td>Mengisi Data Apotek</td>
                                                @else
                                                    <td>Gagal</td>
                                                @endif
                                                @if(!is_null($alat))
                                                    @if($item->id_pemilik==session('pemilik'))
                                                        <td>Mengisi Data Alat</td>
                                                    @else
                                                        <td>Gagal</td>
                                                    @endif
                                                @endif
                                            @elseif ($item->id_apoteker==null)
                                                <td>Mengisi Data Apoteker</td>
                                            @elseif ($item->status==null)
                                                <td>Pemohon belum menerima persyaratan</td>
                                            @elseif ($item->status==1)
                                                <td>Menunggu Konfirmasi</td>
                                            @endif
                                            <td>
                                                @if($item->id_pemohon==null||$item->id_pemilik==null
                                                ||$item->id_apotek==null||$item->id_apoteker==null)
                                                    <a href="{{route('apotik.data.pemohon')}}"> Lanjutkan
                                                        Pendaftaran</a>
                                                @endif
                                            </td>
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
                            <div id="air" class="tab-pane fade text-center">
                                <h3>Penyelenggaraan Depot Air Minum</h3>
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
                                            <button onclick="return alert('Tidak ada riwayat perizinan depot air minum..')"
                                                    data-toggle="tooltip"
                                                    title="Print Riwayat Depot Air Minum"
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
                                        <th>ID Order</th>
                                        <th>Expired Date</th>
                                        <th>Time</th>
                                        <th>Studio</th>
                                        <th>Status</th>
                                        <th>Due_at</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID Order</th>
                                        <th>Expired Date</th>
                                        <th>Time</th>
                                        <th>Studio</th>
                                        <th>Status</th>
                                        <th>Due_at</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div id="hama" class="tab-pane fade text-center">
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
                                        <th>ID Order</th>
                                        <th>Expired Date</th>
                                        <th>Time</th>
                                        <th>Studio</th>
                                        <th>Status</th>
                                        <th>Due_at</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID Order</th>
                                        <th>Expired Date</th>
                                        <th>Time</th>
                                        <th>Studio</th>
                                        <th>Status</th>
                                        <th>Due_at</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection