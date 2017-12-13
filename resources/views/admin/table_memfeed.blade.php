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
                    <div class="box box-primary" id="member">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-users"></i> &nbsp;SSWS Members</h3>
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
                            <table id="example4" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Job</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Join at</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1; ?>
                                @foreach(\App\User::withTrashed()->get() as $row)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->pekerjaan}}</td>
                                        <td>{{$row->phone}}</td>
                                        <td>{{$row->alamat}}</td>
                                        <td>{{$row->created_at}}</td>
                                        @if(is_null($row->deleted_at))
                                            <td><span class="label label-success">Active</span></td>
                                        @else
                                            <td><span class="label label-danger">Banned</span></td>
                                        @endif
                                        <td class="text-center">
                                            @if(is_null($row->deleted_at))
                                                <a onclick="return confirm('Are you sure wanna ban {{$row->name}} ?')"
                                                   href="{{url('admin/tables/member-'.$row->id.'/banned')}}">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-ban" data-toggle="tooltip"
                                                           title="BANNED"></i>
                                                    </button>
                                                </a>
                                                <a>
                                                    <button class="btn btn-warning" disabled>
                                                        <i class="fa fa-refresh" data-toggle="tooltip"
                                                           title="RESTORE"></i>
                                                    </button>
                                                </a>
                                            @else
                                                <a>
                                                    <button class="btn btn-danger" disabled>
                                                        <i class="fa fa-ban" data-toggle="tooltip"
                                                           title="BANNED"></i>
                                                    </button>
                                                </a>
                                                <a onclick="return confirm('Are you sure wanna restore {{$row->name}} ?')"
                                                   href="{{url('admin/tables/member-'.$row->id.'/restore')}}"
                                                   data-toggle="tooltip" title="RESTORE">
                                                    <button class="btn btn-warning">
                                                        <i class="fa fa-refresh" data-toggle="tooltip"
                                                           title="RESTORE"></i>
                                                    </button>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Job</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Join at</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <div class="box box-danger" id="feedback">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-comments"></i> &nbsp;All Feedback Received</h3>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Due at</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1; ?>
                                @foreach(\App\Contact::all() as $row)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->subject}}</td>
                                        <td>{{$row->message}}</td>
                                        <td>{{$row->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Due at</th>
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