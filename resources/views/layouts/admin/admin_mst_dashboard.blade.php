<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo-sby.png')}}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css')}}">
    <!-- Theme style -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/sweetalert2/sweetalert2.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        .tgl {
            position: relative;
            outline: 0;
            display: inline-block;
            cursor: pointer;
            user-select: none;
            margin: 0 0 5px 0;
            width: 100%;
        }

        .tgl,
        .tgl:after,
        .tgl:before,
        .tgl *,
        .tgl *:after,
        .tgl *:before,
        .tgl + .tgl-btn {
            box-sizing: border-box;
        }

        .tgl::selection,
        .tgl:after::selection,
        .tgl:before::selection,
        .tgl *::selection,
        .tgl *:after::selection,
        .tgl *:before::selection,
        .tgl + .tgl-btn::selection {
            background: none;
        }

        .tgl span {
            position: relative;
            display: block;
            height: 1.8em;
            line-height: 1.2em;
            overflow: hidden;
            font-weight: normal;
            text-align: center;
            border-radius: 2em;
            padding: 0.2em 1em;
            border: 1px solid #fafafa;
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.2), 0 2px 0 rgba(255, 255, 255, 0.7);
            transition: color 0.3s ease, padding 0.3s ease-in-out, background 0.3s ease-in-out;
        }

        .tgl span:before {
            position: relative;
            display: block;
            line-height: 1.3em;
            padding: 0 0.2em;
            font-size: 1em;
        }

        .tgl span:after {
            position: absolute;
            display: block;
            content: '';
            border-radius: 2em;
            width: 1.3em;
            height: 1.3em;
            margin-left: -1.45em;
            top: 0.2em;
            background: #FFFFFF;
            transition: left 0.3s cubic-bezier(0.175, 0.885, 0.32, 0.97), background 0.3s ease-in-out;
        }

        .tgl input[type="checkbox"] {
            display: none !important;
        }

        .tgl input[type="checkbox"]:not(:checked) + span {
            background: #f85858;
            color: #FFFFFF;
            padding-left: 1.6em;
            padding-right: 0.4em;
        }

        .tgl input[type="checkbox"]:not(:checked) + span:before {
            content: attr(data-off);
            color: #FFFFFF;
        }

        .tgl input[type="checkbox"]:not(:checked) + span:after {
            background: #FFFFFF;
            left: 1.6em;
        }

        .tgl input[type="checkbox"]:checked + span {
            background: #00a65a;
            color: #FFFFFF;
            padding-left: 0.4em;
            padding-right: 1.6em;
        }

        .tgl input[type="checkbox"]:checked + span:before {
            content: attr(data-on);
        }

        .tgl input[type="checkbox"]:checked + span:after {
            background: #FFFFFF;
            left: 100%;
        }

        .tgl input[type="checkbox"]:disabled,
        .tgl input[type="checkbox"]:disabled + span,
        .tgl input[type="checkbox"]:read-only,
        .tgl input[type="checkbox"]:read-only + span {
            cursor: not-allowed;
        }

        .tgl-gray input[type="checkbox"]:not(:checked) + span {
            background: #dbdbdb;
            color: #999999;
        }

        .tgl-gray input[type="checkbox"]:not(:checked) + span:before {
            color: #999999;
        }

        .tgl-gray input[type="checkbox"]:not(:checked) + span:after {
            background: #ffffff;
        }

        .tgl-inline {
            display: inline-block !important;
            vertical-align: top;
        }

        .tgl-inline.tgl {
            font-size: 16px;
        }

        .tgl-inline.tgl span {
            min-width: 50px;
        }

        .tgl-inline.tgl span:before {
            line-height: 1.4em;
            padding-left: 0.4em;
            padding-right: 0.4em;
        }

        .tgl-inline-label {
            display: inline-block !important;
            vertical-align: top;
            line-height: 26px;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <script>
        @if(session('warning'))
            swal({
            title: '{{ session('warning') }}',
            type: 'warning',
            timer: '1500'
        });
        @elseif(session('ban'))
            swal({
            title: '{{ session('ban') }}',
            type: 'success',
            timer: '1500'
        });
        @elseif(session('res'))
            swal({
            title: '{{ session('res') }}',
            type: 'success',
            timer: '1500'
        });
        @elseif(session('add_admin'))
            swal({
            title: '{{ session('add_admin') }}',
            type: 'success',
            timer: '1500'
        });
        @elseif(session('update_admin'))
            swal({
            title: '{{ session('update_admin') }}',
            type: 'success',
            timer: '1500'
        });
        @endif
    </script>
    <header class="main-header">

        <!-- Logo -->
        @if(session('nama')== 'SUPER ADMIN')
            <a href="{{route('admin.dashboard')}}" class="logo">
                @elseif(session('nama')== 'UPTSA')
                    <a href="{{route('uptsa.dashboard')}}" class="logo">
                        @elseif(session('nama')== 'KASIE')
                            <a href="{{route('kasie.dashboard')}}" class="logo">
                                @elseif(session('nama')== 'KABID')
                                    <a href="{{route('kabid.dashboard')}}" class="logo">
                                        @elseif(session('nama')== 'SEKRETARIS')
                                            <a href="{{route('sekretaris.dashboard')}}" class="logo">
                                                @elseif(session('nama')== 'KADIN')
                                                    <a href="{{route('kadin.dashboard')}}" class="logo">
                                                    @endif
                                                    <!-- mini logo for sidebar mini 50x50 pixels -->
                                                        <span class="logo-mini"><b><span class="fa fa-user"></span></b> SSWS</span>
                                                        <!-- logo for regular state and mobile devices -->
                                                        @if(session('nama')== 'SEKRETARIS' || session('nama')== 'SUPER ADMIN')
                                                            <span class="logo-lg"><span
                                                                        class="fa fa-user"></span> {{session('nama')}}</span>
                                                        @else
                                                            <span class="logo-lg"><b><span class="fa fa-user"></span> SSWS</b> {{session('nama')}}</span>
                                                        @endif
                                                    </a>

                                                    <!-- Header Navbar: style can be found in header.less -->
                                                    <nav class="navbar navbar-static-top">
                                                        <!-- Sidebar toggle button-->
                                                        <a href="#" class="sidebar-toggle" data-toggle="push-menu"
                                                           role="button">
                                                            <span class="sr-only">Toggle navigation</span>
                                                        </a>
                                                        <!-- Navbar Right Menu -->
                                                        <div class="navbar-custom-menu">
                                                            <ul class="nav navbar-nav">
                                                                <!-- Messages: style can be found in dropdown.less-->
                                                                <li class="dropdown messages-menu">
                                                                    <a href="#" class="dropdown-toggle"
                                                                       data-toggle="dropdown">
                                                                        <i class="fa fa-envelope-o"></i>
                                                                        <span class="label label-success">{{$feedback}}</span>
                                                                    </a>
                                                                    <ul class="dropdown-menu">
                                                                        <li class="header">You have {{$feedback}}
                                                                            messages
                                                                        </li>
                                                                        <li>
                                                                            <!-- inner menu: contains the actual data -->
                                                                            <ul class="menu">
                                                                                @foreach($dtsub as $row)
                                                                                    @if($feedback > 0)
                                                                                        <li><!-- start message -->
                                                                                            <a href="#">
                                                                                                <div class="pull-left">
                                                                                                    <img src="{{asset('storage/admin/dummy-profile.jpg')}}"
                                                                                                         class="img-circle"
                                                                                                         alt="User Image">
                                                                                                </div>
                                                                                                <h4>
                                                                                                    {{$row->name}}
                                                                                                    <small>
                                                                                                        <i class="fa fa-clock-o"></i> {{$row->created_at}}
                                                                                                    </small>
                                                                                                </h4>
                                                                                                <p>{{$row->message}}</p>
                                                                                            </a>
                                                                                        </li>
                                                                                @endif
                                                                            @endforeach
                                                                            <!-- end message -->
                                                                            </ul>
                                                                        </li>
                                                                        <li class="footer"><a href="">&nbsp;</a></li>
                                                                    </ul>
                                                                </li>
                                                                <!-- Notifications: style can be found in dropdown.less -->
                                                                <li class="dropdown notifications-menu">
                                                                    <a href="#" class="dropdown-toggle"
                                                                       data-toggle="dropdown">
                                                                        <i class="fa fa-bell-o"></i>
                                                                        <span class="label label-warning">{{$notif}}</span>
                                                                    </a>
                                                                    <ul class="dropdown-menu">
                                                                        <li class="header">You have {{$notif}}
                                                                            notifications
                                                                        </li>
                                                                        <li>
                                                                            <!-- inner menu: contains the actual data -->
                                                                            <ul class="menu">
                                                                                @if($c_apotik >= 1)
                                                                                    <li>
                                                                                        <a href="{{url('admin/tables#apotek')}}">
                                                                                            @if($c_apotik > 1)
                                                                                                <i class="fa fa-medkit text-teal"></i> {{$c_apotik}}
                                                                                                new apotek
                                                                                                orders submitted today
                                                                                            @else
                                                                                                <i class="fa fa-medkit text-teal"></i>
                                                                                                a new apotek
                                                                                                order submitted today
                                                                                            @endif
                                                                                        </a>
                                                                                    </li>
                                                                                @endif
                                                                                @if($c_air >= 1)
                                                                                    <li>
                                                                                        <a href="{{url('admin/tables#air')}}#">
                                                                                            @if($c_air > 1)
                                                                                                <i class="fa fa-bitbucket text-teal"></i> {{$c_air}}
                                                                                                new depot air
                                                                                                orders submitted today
                                                                                            @else
                                                                                                <i class="fa fa-bitbucket text-teal"></i>
                                                                                                a new depot air
                                                                                                order submitted today
                                                                                            @endif
                                                                                        </a>
                                                                                    </li>
                                                                                @endif
                                                                                @if($c_hama >= 1)
                                                                                    <li>
                                                                                        <a href="{{url('admin/tables#hama')}}#">
                                                                                            @if($c_hama > 1)
                                                                                                <i class="fa fa-bug text-purple"></i> {{$c_hama}}
                                                                                                new pengendalian hama
                                                                                                orders submitted today
                                                                                            @else
                                                                                                <i class="fa fa-bug text-purple"></i>
                                                                                                a new pengendalian hama
                                                                                                order submitted today
                                                                                            @endif
                                                                                        </a>
                                                                                    </li>
                                                                                @endif
                                                                                @if($member >= 1)
                                                                                    <li>
                                                                                        <a href="{{url('admin/tables#member')}}">
                                                                                            @if($member > 1)
                                                                                                <i class="fa fa-users text-yellow"></i> {{$member}}
                                                                                                new members
                                                                                                joined
                                                                                                today
                                                                                            @else
                                                                                                <i class="fa fa-users text-yellow"></i>
                                                                                                a new member joined
                                                                                                today
                                                                                            @endif
                                                                                        </a>
                                                                                    </li>
                                                                                @endif
                                                                                @if($feedback >= 1)
                                                                                    <li>
                                                                                        <a href="{{url('admin/tables#feedback')}}">
                                                                                            @if($feedback > 1)
                                                                                                <i class="fa fa-envelope text-red"></i>
                                                                                                We got {{$feedback}} new
                                                                                                feedback
                                                                                                today
                                                                                            @else
                                                                                                <i class="fa fa-envelope text-red"></i>
                                                                                                We got a feedback
                                                                                                today
                                                                                            @endif
                                                                                        </a>
                                                                                    </li>
                                                                                @endif
                                                                            </ul>
                                                                        </li>
                                                                        <li class="footer"><a>&nbsp;</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown messages-menu">
                                                                    <a href="{{route('dashboard')}}">
                                                                        <i class="fa fa-eye"></i>
                                                                        <span class="label label-info">WEB</span>
                                                                    </a>
                                                                </li>
                                                                <!-- User Account: style can be found in dropdown.less -->
                                                                <li class="dropdown user user-menu">
                                                                    <a href="#" class="dropdown-toggle"
                                                                       data-toggle="dropdown">
                                                                        @if(Auth::user()->url == "avatar.png")
                                                                            <img src="{{asset('storage/admin/dummy-profile.jpg')}}"
                                                                                 class="user-image"
                                                                                 alt="User Image">
                                                                        @else
                                                                            <img src="{{asset('storage/admin/'.Auth::user()->url)}}"
                                                                                 class="user-image"
                                                                                 alt="User Image">
                                                                        @endif
                                                                        <span class="hidden-xs">{{Auth::user()->name}}</span>
                                                                    </a>
                                                                    <ul class="dropdown-menu">
                                                                        <!-- User image -->
                                                                        <li class="user-header">
                                                                            @if(Auth::user()->url == "avatar.png")
                                                                                <img src="{{asset('storage/admin/dummy-profile.jpg')}}"
                                                                                     class="img-circle"
                                                                                     alt="User Image">
                                                                            @else
                                                                                <img src="{{asset('storage/admin/'.Auth::user()->url)}}"
                                                                                     class="img-circle"
                                                                                     alt="User Image">
                                                                            @endif
                                                                            <?php $dt = \App\role::findOrFail(Auth::user()->lastname) ?>
                                                                            <p>{{Auth::user()->name}}
                                                                                <small>{{$dt->ket}}</small>
                                                                            </p>
                                                                        </li>
                                                                        <!-- Menu Body -->
                                                                        <li class="user-body">
                                                                            <div class="row">
                                                                                <div class="col-xs-12 text-center">
                                                                                    <a href="#">{{Auth::user()->email}}</a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.row -->
                                                                        </li>
                                                                        <!-- Menu Footer-->
                                                                        <li class="user-footer">
                                                                            <div class="pull-left">
                                                                                <a href="{{url('admin/'.Auth::user()->id.'/settings')}}"
                                                                                   class="btn btn-default btn-flat">Settings</a>
                                                                            </div>
                                                                            <div class="pull-right">
                                                                                <a href="{{ route('admin.logout') }}"
                                                                                   class="btn btn-default btn-flat"
                                                                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign
                                                                                    out</a>
                                                                                <form id="logout-form"
                                                                                      action="{{ route('admin.logout') }}"
                                                                                      method="POST"
                                                                                      style="display: none;">
                                                                                    {{ csrf_field() }}
                                                                                </form>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <!-- Control Sidebar Toggle Button -->
                                                                <li>
                                                                    <a href="#" data-toggle="control-sidebar"><i
                                                                                class="fa fa-gears"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    @if(Auth::user()->url == "avatar.png")
                        <img src="{{asset('storage/admin/dummy-profile.jpg')}}" class="img-circle" alt="User Image">
                    @else
                        <img src="{{asset('storage/admin/'.Auth::user()->url)}}" class="img-circle" alt="User Image">
                    @endif
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->name}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
        {{--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat">
          <i class="fa fa-search"></i>
        </button>
      </span>
            </div>
        </form>--}}
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            @yield('sidenav')
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
@yield('content')
<!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.1.0
        </div>
        <strong>Copyright &copy; 2017 <a href="http://rabbit-media.net">Rabbit Media</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->

            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<script src="{{asset('plugins/jQuery/jquery-3.1.1.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS 1.0.1 -->
<script src="{{asset('plugins/chartjs/Chart.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script>
    $(function () {
        $("#example1").DataTable();
        $("#example2").DataTable();
        $("#example3").DataTable();
        $("#example4").DataTable();
        $("#example5").DataTable();
        /*$('#example2').DataTable({
         "paging": true,
         "lengthChange": false,
         "searching": false,
         "ordering": true,
         "info": true,
         "autoWidth": false
         });*/
    });
</script>
<script>
    $(function () {

        // We can attach the `fileselect` event to all file inputs on the page
        $(document).on('change', ':file', function () {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });

        // We can watch for our custom `fileselect` event like this
        $(document).ready(function () {
            $(':file').on('fileselect', function (event, numFiles, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = numFiles > 1 ? numFiles + ' files selected' : label;

                if (input.length) {
                    input.val(log);
                } else {
                    if (log) alert(log);
                }

            });
        });

    });
</script>
@yield('script')
</body>
</html>
