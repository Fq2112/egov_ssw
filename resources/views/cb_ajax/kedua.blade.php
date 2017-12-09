<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/dataTables/css/dataTables.bootstrap.min.css') }}">

    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/sweetalert2/sweetalert2.min.css') }}">
</head>
<body>
<form action="{{route('save.kedua')}}" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <span>Nama Apotik :</span>
    <input type="text" name="name"><br>
    <span>No Telp</span>
    <input type="text" name="phone" maxlength="13"><br>
    <span>provinsi</span>
    <select name="provinsi" id="provinsi" class="provinsi">
        <option value="0" disabled selected>--Pilih--</option>
        @foreach($data1 as $dt)
            <option value="{{$dt->id}}">{{$dt->name}}</option>
        @endforeach
    </select><br>
    <span>kota</span>
    <select name="kota" id="kota">
        <option value="0" disabled selected>--Pilih Provinsi--</option>
    </select><br>
    <span>Kecamatan</span>
    <select name="kecamatan" id="kecamatan">
        <option value="0" disabled selected>--Pilih Provinsi--</option>
    </select><br>
    <span>Desa</span>
    <select name="desa" id="desa">
        <option value="0" disabled selected>--Pilih Provinsi--</option>
    </select><br>
    <span>alamat</span>
    <input type="text" name="alamat"><br>

    <input type="submit">submit
</form>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/validator.min.js') }}"></script>

<script type="text/javascript">

    $(document).ready(function () {
        $(document).on('change', '#provinsi', function () {
            console.log("hmm its change");

            var kota_id = $(this).val();
            console.log(kota_id);

            var div = $(this).parent();
            var op = " ";
            var op2 = " ";


            $.ajax({
                type: 'get',
                url: '{!!URL::to('apotek/carikota/')!!}',
                data: {'id': kota_id},
                success: function (data) {
                    console.log('success');

                    console.log(data);

                    console.log(data.length);
//                    if (!data.length){
//                        op += '<option value="0"  selected disabled>Sesi Habis</option>';
//                    }

                        op += '<option value="0" selected disabled>-- pilih --</option>';
                        for (var i = 0; i < data.length; i++) {

                                op += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                        }
                    op2 += '<option value="0" selected disabled>-- pilih Kota --</option>';



                    div.find('#kota').html(" ");
                    div.find('#kota').append(op);
                    div.find('#kecamatan').html(" ");
                    div.find('#kecamatan').append(op2);
                    div.find('#desa').html(" ");
                    div.find('#desa').append(op2);

                },
                error: function () {
                    swal({
                        title: 'Oops...',
                        text: 'something wrong!',
                        type: 'error',
                        timer: '1500'
                    })
                }
            });

        })

        $(document).on('change', '#kota', function () {
            console.log("hmm its change");

            var kecamatan = $(this).val();
            console.log(kecamatan);

            var div = $(this).parent();
            var op = " ";
            var op2 = " ";

            $.ajax({
                type: 'get',
                url: '{!!URL::to('apotek/carikecamatan/')!!}',
                data: {'id': kecamatan},
                success: function (data) {
                    console.log('success');

                    console.log(data);

                    console.log(data.length);
                    if (!data.length){
                        op += '<option value="0"  selected disabled>Data Kosong</option>';
                    }

                        op += '<option value="0" selected disabled>-- pilih --</option>';
                        for (var i = 0; i < data.length; i++) {

                                op += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                        }
                    op2 += '<option value="0" selected disabled>-- pilih Kecamatan --</option>';

                    div.find('#kecamatan').html(" ");
                    div.find('#kecamatan').append(op);
                    div.find('#desa').html(" ");
                    div.find('#desa').append(op2);

                },
                error: function () {
                    swal({
                        title: 'Oops...',
                        text: 'something wrong!',
                        type: 'error',
                        timer: '1500'
                    })
                }
            });

        })

        $(document).on('change', '#kecamatan', function () {
            console.log("hmm its change");

            var desa = $(this).val();
            console.log(desa);

            var div = $(this).parent();
            var op = " ";

            $.ajax({
                type: 'get',
                url: '{!!URL::to('apotek/caridesa/')!!}',
                data: {'id': desa},
                success: function (data) {
                    console.log('success');

                    console.log(data);

                    console.log(data.length);
//                    if (!data.length){
//                        op += '<option value="0"  selected disabled>Data Kosong</option>';
//                    }
                    op += '<option value="0" selected disabled>-- pilih --</option>';
                    for (var i = 0; i < data.length; i++) {

                        op += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                    }

                    div.find('#desa').html(" ");
                    div.find('#desa').append(op);

                },
                error: function () {
                    swal({
                        title: 'Oops...',
                        text: 'something wrong!',
                        type: 'error',
                        timer: '1500'
                    })
                }
            });

        })
    })
    @if(\Session::has('status'))
    swal({
        title: '{{ session('status') }}',
        type: 'info',
        timer: '1500'
    });
    @endif
</script>

</body>
</html>