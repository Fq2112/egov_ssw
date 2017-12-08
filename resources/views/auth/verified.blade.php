@extends('layouts.user.mst_user_relog')
@section('title', 'SSWS - Surabaya Single Window Sanitary | Not-Robot Confirmation')
@section('content')
    <div style="padding: 3em 0;" id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="row animate-box">
                    <div class="col-lg-8 col-lg-offset-2 fh5co-heading">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="w3-panel w3-card">
                                <h2 style="padding-top: 5%" class="text-center">Not-Robot Confirmation</h2>
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">
                                            &times;
                                        </button>
                                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                        {{session('success')}}
                                    </div>
                                @endif
                                <p>Because you've been this far, we're assuming that you are a living human. But we need
                                    to
                                    make sure that you are not a robot.</p>
                                <form class="form-horizontal" action="{{route('submit_captcha')}}" method="post" id="form">
                                    {{ csrf_field() }}
                                    <div class="row form-group">
                                        <div class="col-lg-12">
                                            <div class="g-recaptcha"
                                                 data-sitekey="6LecMjwUAAAAAPGWJyn-QCrHg69EbaF6_vqkE3Ed"></div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-12">
                                            <input type="submit" value="SAYA BUKAN ROBOT!"
                                                   class="btn btn-primary button btn-block">
                                        </div>
                                    </div>
                                </form>
                                <script>
                                    $(function () {
                                        $('#form').submit(function (event) {
                                            var verified = grecaptcha.getResponse();
                                            if (verified.length === 0) {
                                                event.preventDefault();
                                                alert('Please confirm us that you are not a robot, with clicking in the reCAPTCHA dialog-box.');
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection