@extends('layouts.user.mst_user_relog')
@section('title', 'SSWS - Surabaya Single Window Sanitary | Admin Login')
@section('content')
    <div style="padding: 3em 0;" id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="row animate-box">
                    <div class="col-lg-8 col-lg-offset-2 fh5co-heading">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="w3-panel w3-card">
                                <h2 style="padding-top: 5%" class="text-center">Admin Login</h2>
                                <form style="padding: 5%" method="POST" action="{{ route('admin.login') }}">
                                    {{ csrf_field() }}

                                    <div class="row form-group{{ $errors->has('lastname') ? ' has-error' : '' }} has-feedback">
                                        <div class="col-md-12">
                                            <select class="form-control" name="lastname" id="lastname">
                                                <option value="0" disabled selected>-- Choose Title --</option>
                                                <option value="Super Admin">SUPER ADMIN</option>
                                                <option value="UPTSA">UPTSA</option>
                                                <option value="KASIE">KASIE</option>
                                                <option value="KABID">KEPALA BIDANG</option>
                                                <option value="SEKRETARIS">SEKRETARIS</option>
                                                <option value="KADIN">KEPALA DINAS</option>
                                            </select>
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                        </div>
                                    </div>
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
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                                <a href="{{ route('admin.password.request') }}">
                                                    Lupa password anda?
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat
                                                Saya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-12">
                                            <input type="submit" value="LOGIN" class="btn btn-primary btn-block btn-flat">
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