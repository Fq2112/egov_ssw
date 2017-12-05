@extends('layouts.user.mst_user')
@section('title', 'SSW - Surabaya Single Window | Member Login')
@section('navigation')
    <ul>
        <li class="active"><a href="{{route('dashboard')}}">Home</a></li>
        @if(Auth::guest())
            <li class="btn-cta"><a href="{{route('login')}}"><span>Register/Login</span></a></li>
        @else
            <li class="has-dropdown">
                <a href="#">{{Auth::user()->email}}</a>
                <ul class="dropdown">
                    <li><a href="{{url('/member/'.Auth::user()->id.'/history')}}">Order
                            History</a></li>
                    <li><a href="{{url('/member/'.Auth::user()->id.'/settings')}}">Account
                            Settings</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
@endsection

@section('content')
    <div style="padding: 3em 0;" id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="row animate-box">
                    <div class="col-lg-8 col-lg-offset-2 fh5co-heading">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="w3-panel w3-card">
                                <h2 style="padding-top: 5%" class="text-center">Member Login</h2>

                                {{--@if($token && $recaptcha)
                                    <div class="alert alert-success">
                                        <strong>Confirmed!</strong> Anda 100% manusia yang hidup dan bukanlah sebuah robot.
                                        Silahkan login dengan akun anda.
                                    </div>
                                @endif--}}
                                <form style="padding: 5%" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                        <div class="col-md-12">
                                            <input name="email" type="email" id="email" class="form-control"
                                                   placeholder="E-mail" value="{{ old('email') }}" required autofocus>
                                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                        <div class="col-md-12">
                                            <input name="password" type="password" id="password" class="form-control"
                                                   placeholder="Password">
                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                    <a href="{{ route('password.request') }}">
                                                     Lupa password anda?
                                                    </a>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat Saya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-2">
                                            <input type="submit" value="LOGIN" class="btn btn-primary">
                                        </div>
                                        <div style="padding-left: 5%" class="col-lg-10">
                                            <a class="btn btn-link" href="{{ route('register') }}">
                                                Belum punya akun? Daftar sekarang!
                                            </a>
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