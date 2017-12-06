@extends('layouts.user.mst_user_relog')
@section('title', 'SSW - Surabaya Single Window | Member Register')
@section('content')
    <div style="padding: 3em 0;" id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="row animate-box">
                    <div class="col-lg-8 col-lg-offset-2 fh5co-heading">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="w3-panel w3-card">
                                <h2 style="padding-top: 5%" class="text-center">Member Register</h2>
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}

                                    <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                                        <div class="col-md-6">
                                            <input placeholder="Nama lengkap" id="name" type="text" class="form-control"
                                                   name="name"
                                                   value="{{ old('name') }}" required autofocus>
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <input placeholder="Pekerjaan" id="pekerjaan" type="text" class="form-control"
                                                   name="pekerjaan"
                                                   value="{{ old('pekerjaan') }}" required autofocus>
                                            <span class="glyphicon glyphicon-briefcase form-control-feedback"></span>
                                            @if ($errors->has('pekerjaan'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('pekerjaan') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group{{ $errors->has('alamat') ? ' has-error' : '' }} has-feedback">
                                        <div class="col-md-12">
                                        <textarea placeholder="Alamat lengkap" id="alamat" type="text" class="form-control"
                                                  name="alamat"
                                                  value="{{ old('alamat') }}" required autofocus></textarea>
                                            <span class="glyphicon glyphicon-home form-control-feedback"></span>
                                            @if ($errors->has('alamat'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('alamat') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group{{ $errors->has('phone') ? ' has-error' : '' }} has-feedback">
                                        <div class="col-md-12">
                                            <input placeholder="Nomor handphone" id="phone" type="text" class="form-control"
                                                   name="phone"
                                                   value="{{ old('phone') }}" onkeypress="return hanyaAngka(event, false)"
                                                   maxlength="13" required autofocus>
                                            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                        <div class="col-md-12">
                                            <input placeholder="E-mail" id="email" type="email" class="form-control"
                                                   name="email"
                                                   value="{{ old('email') }}" required>
                                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                        <div class="col-md-6">
                                            <input placeholder="Password" id="password" type="password" class="form-control"
                                                   name="password"
                                                   required>
                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <input placeholder="Retype password" id="password-confirm" type="password"
                                                   class="form-control"
                                                   name="password_confirmation" required>
                                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-2">
                                            <input type="submit" value="DAFTAR" class="btn btn-primary">
                                        </div>
                                        <div style="padding-left: 5%" class="col-lg-10">
                                            <a class="btn btn-link" href="{{ route('login') }}">
                                                Sudah punya akun? Login disini!
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