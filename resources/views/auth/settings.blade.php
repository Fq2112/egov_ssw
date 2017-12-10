@extends('layouts.user.mst_user_relog')
@section('title', 'SSWS - Surabaya Single Window Sanitary | '.$user->name.'`s Profile')
@section('content')
    <div style="padding: 1em 0;" id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="row animate-box">
                    <div class="col-lg-8 col-lg-offset-2 fh5co-heading">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="w3-panel w3-card">
                                @if(session('ok'))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">
                                            &times;
                                        </button>
                                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                        {{session('ok')}}
                                    </div>
                                @elseif(session('email'))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">
                                            &times;
                                        </button>
                                        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                                        {{session('email')}}
                                    </div>
                                @endif

                                <div style="padding-top: 5%" class="col-lg-12 text-center">
                                    <h2>Edit Profile</h2>
                                    <span class="help-block">
                                        <strong>Last Updated: {{$user->updated_at}}</strong>
                                    </span>
                                    <form class="form-horizontal" role="form" method="POST"
                                          action="{{ url('/member/'.$user->id) }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}
                                        <div class="image-upload">
                                            <label for="file-input">
                                                @if($user->ava==null)
                                                    <img class="img-circle" src="{{asset('images/avatar.png')}}" data-placement="bottom"
                                                data-toggle="tooltip"
                                                title="Klik disini untuk mengubah foto profile anda!">
                                                @else
                                                    <img style="width: 75%" class="img-circle" src="{{asset('storage/member/'.$user->ava)}}" data-placement="bottom"
                                                data-toggle="tooltip"
                                                title="Klik disini untuk mengubah foto profile anda!">
                                                @endif
                                            </label>
                                            <input id="file-input" name="ava" type="file"/>
                                        </div>
                                        <hr>
                                        <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                                            <div class="col-md-6">
                                                <input placeholder="Nama lengkap" id="name" type="text"
                                                       class="form-control"
                                                       name="name"
                                                       value="{{ $user->name }}" required autofocus>
                                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <input placeholder="Pekerjaan" id="pekerjaan" type="text"
                                                       class="form-control"
                                                       name="pekerjaan"
                                                       value="{{ $user->pekerjaan }}" required autofocus>
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
                                        <textarea placeholder="Alamat lengkap" id="alamat" type="text"
                                                  class="form-control"
                                                  name="alamat" required autofocus>{{ $user->alamat }}</textarea>
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
                                                <input placeholder="Nomor handphone" id="phone" type="text"
                                                       class="form-control"
                                                       name="phone"
                                                       value="{{ $user->phone }}"
                                                       onkeypress="return hanyaAngka(event, false)"
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
                                                       value="{{ $user->email }}" required>
                                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row form-group{{ session('password') ? ' has-error' : '' }} has-feedback">
                                            <div class="col-md-12">
                                                <input placeholder="Current password" id="password" type="password"
                                                       class="form-control" name="password"
                                                       required>
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                @if (session('status'))
                                                    <span class="help-block">
                                                        <strong>{{ session('status') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }} has-feedback">
                                            <div class="col-md-6">
                                                <input placeholder="New password" id="password" type="password"
                                                       class="form-control" name="new_password"
                                                       required>
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                @if ($errors->has('new_password'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('new_password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <input placeholder="Retype password" id="password-confirm"
                                                       type="password"
                                                       class="form-control"
                                                       name="password_confirmation" required>
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                @if ($errors->has('password_confirmation'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <input type="submit" value="SAVE"
                                                       class="btn btn-primary button btn-block">
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
