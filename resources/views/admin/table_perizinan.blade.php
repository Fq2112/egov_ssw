@extends('layouts.admin.admin_mst_dashboard')
@section('title', 'SSWS - '.session('nama').' PANEL')
@section('sidenav')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">FROM USERS</li>
        <li class="treeview">
            @if(session('nama')== 'SUPER ADMIN')
                <a href="{{route('admin.dashboard')}}">
                    @elseif(session('nama')== 'UPTSA')
                        <a href="{{route('uptsa.dashboard')}}">
                            @elseif(session('nama')== 'KASIE')
                                <a href="{{route('kasie.dashboard')}}">
                                    @elseif(session('nama')== 'KABID')
                                        <a href="{{route('kabid.dashboard')}}">
                                            @elseif(session('nama')== 'SEKRETARIS')
                                                <a href="{{route('sekretaris.dashboard')}}">
                                                    @elseif(session('nama')== 'KADIN')
                                                        <a href="{{route('kadin.dashboard')}}">
                                                            @endif
                                                            <i class="fa fa-dashboard"></i>
                                                            <span>Dashboard</span>
                                                        </a>
        </li>
        <li class="treeview active menu-open">
            <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('admin/tables/perizinan#apotek')}}"><i class="fa fa-medkit text-aqua"></i>
                        Perizinan Apotek</a>
                </li>
                <li><a href="{{url('admin/tables/perizinan#air')}}"><i class="fa fa-bitbucket text-teal"></i>
                        Perizinan
                        Depo Air Minum</a></li>
                <li><a href="{{url('admin/tables/perizinan#hama')}}"><i class="fa fa-bug text-yellow"></i>
                        Perizinan
                        Pengendalian Hama</a></li>
                <li><a href="{{url('admin/tables/member-feedback#feedback')}}"><i
                                class="fa fa-comments text-red"></i> Feedback
                        Received</a></li>
            </ul>
        </li>
    </ul>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
                <small>Data Permohonan Surat Izin</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    @if(session('nama')== 'SUPER ADMIN')
                        <a href="{{route('admin.dashboard')}}">
                            @elseif(session('nama')== 'UPTSA')
                                <a href="{{route('uptsa.dashboard')}}">
                                    @elseif(session('nama')== 'KASIE')
                                        <a href="{{route('kasie.dashboard')}}">
                                            @elseif(session('nama')== 'KABID')
                                                <a href="{{route('kabid.dashboard')}}">
                                                    @elseif(session('nama')== 'SEKRETARIS')
                                                        <a href="{{route('sekretaris.dashboard')}}">
                                                            @elseif(session('nama')== 'KADIN')
                                                                <a href="{{route('kadin.dashboard')}}">
                                                                    @endif
                                                                    <i class="fa fa-dashboard"></i> Home</a></li>
                {{--<li><a href="{{route('admin.table')}}">Tables</a></li>--}}
                <li class="active">Data Tables</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-info" id="apotek">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-medkit"></i> &nbsp;Perizinan Apotek</h3>
                            <div class="box-tools pull-right">
                                <a target="_blank" href="{{url('admin/tablesmember/print')}}">
                                    <button type="button" class="btn btn-box-tool">
                                        <strong><i class="fa fa-print"></i> PRINT ALL</strong>
                                    </button>
                                </a>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </div>
                        @if(session('status'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                </button>
                                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                {{session('status')}}
                            </div>
                    @endif
                    <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pemohon</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Lampiran</th>
                                    <th>Status</th>
                                    <th>Due at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1 ?>
                                @foreach(\App\trPerizinanApotik::all() as $row)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>email...</td>
                                        <td>phone...</td>
                                        <td style="width: 25px" class="text-center">
                                            <a href="#detail" data-toggle="tooltip" data-placement="left"
                                               title="lihat lampiran!">
                                                <img style="width: 100%" class="img-responsive"
                                                     src="{{asset('images/user.png')}}">
                                            </a>
                                        </td>
                                        <td>{{$row->status}}</td>
                                        <td>{{$row->created_at}}</td>
                                        <td class="text-center">
                                            <label class="tgl">
                                                <input onChange="if (this.checked) set_check(this);" id="status"
                                                       name="status" type="checkbox">

                                                <span data-on="Approve" data-off="Deny"></span>
                                            </label>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pemohon</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Lampiran</th>
                                    <th>Status</th>
                                    <th>Due at</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <div class="box box-success" id="air">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-bitbucket"></i> &nbsp;Perizinan Depo Air Minum</h3>
                            <div class="box-tools pull-right">
                                <a target="_blank" href="{{url('admin/tablesmember/print')}}">
                                    <button type="button" class="btn btn-box-tool">
                                        <strong><i class="fa fa-print"></i> PRINT ALL</strong>
                                    </button>
                                </a>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </div>
                        @if(session('status'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                </button>
                                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                {{session('status')}}
                            </div>
                    @endif
                    <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pemohon</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Lampiran</th>
                                    <th>Status</th>
                                    <th>Due at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1 ?>
                                @foreach(\App\trPerizinanDepo::all() as $row)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>email...</td>
                                        <td>phone...</td>
                                        <td style="width: 25px" class="text-center">
                                            <a href="#detail" data-toggle="tooltip" data-placement="left"
                                               title="lihat lampiran!">
                                                <img style="width: 100%" class="img-responsive"
                                                     src="{{asset('images/user.png')}}">
                                            </a>
                                        </td>
                                        <td>{{$row->status}}</td>
                                        <td>{{$row->created_at}}</td>
                                        <td>
                                            <label class="tgl ">
                                                <input onChange="if (this.checked) set_check(this);" id="status"
                                                       name="status" type="checkbox">

                                                <span data-on="Approve" data-off="Reject"></span>
                                            </label>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pemohon</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Lampiran</th>
                                    <th>Status</th>
                                    <th>Due at</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <div class="box box-warning" id="hama">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-bug"></i> &nbsp;Perizinan Pengendalian Hama</h3>
                            <div class="box-tools pull-right">
                                <a target="_blank" href="{{url('admin/tablesmember/print')}}">
                                    <button type="button" class="btn btn-box-tool">
                                        <strong><i class="fa fa-print"></i> PRINT ALL</strong>
                                    </button>
                                </a>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </div>
                        @if(session('status'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                </button>
                                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                {{session('status')}}
                            </div>
                    @endif
                    <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example3" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pemohon</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Lampiran</th>
                                    <th>Status</th>
                                    <th>Due at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1 ?>
                                @foreach(\App\trPerizinanHama::all() as $row)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>email...</td>
                                        <td>phone...</td>
                                        <td style="width: 25px" class="text-center">
                                            <a href="#detail" data-toggle="tooltip" data-placement="left"
                                               title="lihat lampiran!">
                                                <img style="width: 100%" class="img-responsive"
                                                     src="{{asset('images/user.png')}}">
                                            </a>
                                        </td>
                                        <td>{{$row->status}}</td>
                                        <td>{{$row->created_at}}</td>
                                        <td>
                                            <label class="tgl ">
                                                <input onChange="if(this.checked)set_check(this);" id="status"
                                                       name="status" type="checkbox">

                                                <span data-on="Approve" data-off="Reject"></span>
                                            </label>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pemohon</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Lampiran</th>
                                    <th>Status</th>
                                    <th>Due at</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        function set_check(me) {
            swal({
                    title: "Are you sure?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#00a65a",
                    confirmButtonText: "Yes!",
                    timer: 20000,
                    closeOnConfirm: true
                },
                function (isConfirm) {
                    if (me.checked && isConfirm) {
                        setCookie(me.value, me.checked, 1);
                        console.log(me.value);
                        console.log(me.checked);
                        console.log(document.cookie);
                        window.location.reload();
                    } else if (me.checked && !isConfirm) {
                        window.location.reload();
                    } else if (!me.checked) {
                        setCookie(me.value, me.checked, -1);
                        console.log(me.value);
                        console.log(me.checked);
                        console.log(document.cookie);
                        window.location.reload();
                    }
                });
        }
    </script>
@endsection