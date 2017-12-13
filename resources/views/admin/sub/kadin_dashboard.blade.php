@extends('layouts.admin.admin_mst_dashboard')
@section('title', 'SSWS - '.session('nama').' PANEL')
@section('sidenav')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">FROM USERS</li>
        <li class="active treeview menu-open">
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
        <li class="treeview">
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
        <li class="header">FOR USERS</li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-medkit"></i> <span>Apotek Contents</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('admin/apotekcontent#addapotek')}}"><i
                                class="fa fa-pencil-square-o text-aqua"></i> Add Content</a>
                </li>
                <li><a href="{{url('admin/apotekcontent#apotek')}}"><i class="fa fa-table text-aqua"></i> View
                        Content</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-bitbucket"></i> <span>Depo Air Minum Contents</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('admin/aircontent#addair')}}"><i
                                class="fa fa-pencil-square-o text-teal"></i> Add
                        Content</a></li>
                <li><a href="{{url('admin/aircontent#air')}}"><i class="fa fa-table text-teal"></i>
                        View Content</a>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-bug"></i> <span>Hama Contents</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('admin/hamacontent#addhama')}}"><i
                                class="fa fa-pencil-square-o text-teal"></i> Add
                        Content</a></li>
                <li><a href="{{url('admin/hamacontent#hama')}}"><i class="fa fa-table text-teal"></i>
                        View Content</a>
            </ul>
        </li>
    </ul>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{session('nama')}} Dashboard
                <small>Control panel</small>
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
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$c_apotik}}</h3>
                            <p>New Perizinan Apotek</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{$c_air}}</h3>
                            @if($c_air > 1)
                                <p>New Depot Air Orders</p>
                            @else
                                <p>New Depot Air Order</p>
                            @endif
                        </div>
                        <div class="icon">
                            <i class="fa fa-bitbucket"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$c_hama}}</h3>
                            @if($c_hama > 1)
                                <p>New Pengendalian Hama</p>
                            @else
                                <p>New Pengendalian Hama</p>
                            @endif
                        </div>
                        <div class="icon">
                            <i class="fa fa-bug"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{$feedback}}</h3>
                            <p>New Feedback</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-comments"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection