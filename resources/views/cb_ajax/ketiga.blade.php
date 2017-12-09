<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/dataTables/css/dataTables.bootstrap.min.css') }}">

    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/sweetalert2/sweetalert2.min.css') }}">
</head>
<body>
<div id="cek-data">
    <form action="" method="post" class="form-horizontal" data-toggle="validator">
        {{ csrf_field() }} {{ method_field('post') }}
        <input type="text" id="id" name="nik">
        <input type="hidden" id="cek" name="cek" value="0">
        <button type="submit">cek</button>
    </form>
</div>
<div id="jadi-data">
    <form action="{{route('save.ketiga')}}" method="post" class="form-horizontal" data-toggle="validator">
        {{ csrf_field() }}  {{ method_field('post') }}
        <p class="harga_recorder content2"></p>
        <input type="hidden" id="nik" name="nik">
        <span>Nama Lengkap :</span>
        <input type="text" id="name" name="name"><br>
        <span>tempat lahir :</span>
        <input type="text" id="tempat_lahir" name="tempat_lahir"><br>
        <span>tanggal lahir :</span>
        <input type="date" id="tgl_lahir" name="tgl_lahir"><br>
        <span>Jenis Kelamin :</span>
        <select class="jk" name="jk" id="jk">
            <option value="0" disabled selected>--Pilih--</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select><br>
        <span>Agama :</span>
        <select name="agama" id="agama">
            <option value="0" disabled selected>--Pilih--</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
        </select><br>
        <span>Alamat :</span>
        <input type="text" id="alamat" name="alamat"><br>
        <span>Kode Pos :</span>
        <input type="number" name="kodepos" maxlength="6" min="1"><br>
        <span>no telp :</span>
        <input type="text" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}"><br>
        <span>email</span>
        <input type="text" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}"><br>
        <span>Pekerjaan</span>
        <input type="text" name="pekerjaan" id="pekerjaan" value="{{\Illuminate\Support\Facades\Auth::user()->pekerjaan}}"><br>
        <span>Jabatan</span>
        <input type="text" name="jabatan" id="jabatan"><br>
        <span>no. npwp</span>
        <input type="number" min="0" name="npwp" id="npwp"><br>
        <span>        status Menggunakan Sarana
</span>
        <input type="checkbox" name="asd" checked data-toggle="toggle" data-on="Hello<br>World" data-off="Goodbye<br>World"><br>

        <button type="submit">submit</button>
    </form>
</div>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/validator.min.js') }}"></script>

<script type="text/javascript">

    $(function () {
        $('#cek-data form').validator().on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var nik_id = $('#id').val();
                var status = $('#cek').val();
                if (status == 0) url = "{!!\Illuminate\Support\Facades\URL::to('apotek/cekdata/')!!}";
                else url = "{{   'dalsjd/' }}" + id;
                $.ajax({
                    url: url,
                    type: "GET",
                    data: {'id': nik_id},
                    success: function (data) {

                        if (data.id > 0) {
                            $('.content2').show();
                            $('#name').val(data.name);
                            $('#nik').val(data.nik);
                            $('#tempat_lahir').val(data.tempat_lahir);
                            $('#tgl_lahir').val(data.tgl_lahir);
                            if (data.jk == 'Pria') {
                                $('#jk').empty().append('<option value="0" disabled >--Pilih--</option>' +
                                    '<option value="Pria" selected>Pria</option>' +
                                    '<option value="Wanita">Wanita</option>');
                            }
                            else {
                                $('#jk').empty().append('<option value="0" disabled >--Pilih--</option>' +
                                    '<option value="Pria" >Pria</option>' +
                                    '<option value="Wanita" selected>Wanita</option>');
                            }
                            if (data.agama == 'Islam') {
                                $('#agama').empty().append(
                                    '<option value="0" disabled>--Pilih--</option>' +
                                    '<option value="Islam" selected>Islam</option>' +
                                    '<option value="Kristen">Kristen</option>' +
                                    '<option value="Katolik">Katolik</option>' +
                                    '<option value="Hindu">Hindu</option>' +
                                    '<option value="Budha">Budha</option>'
                                );

                            }
                            else if (data.agama == 'Kristen') {
                                $('#agama').empty().append(
                                    '<option value="0" disabled>--Pilih--</option>' +
                                    '<option value="Islam" >Islam</option>' +
                                    '<option value="Kristen" selected>Kristen</option>' +
                                    '<option value="Katolik">Katolik</option>' +
                                    '<option value="Hindu">Hindu</option>' +
                                    '<option value="Budha">Budha</option>');
                            }
                            else if (data.agama == 'Katolik') {
                                $('#agama').empty().append(
                                    '<option value="0" disabled>--Pilih--</option>' +
                                    '<option value="Islam" >Islam</option>' +
                                    '<option value="Kristen">Kristen</option>' +
                                    '<option value="Katolik" selected>Katolik</option>' +
                                    '<option value="Hindu">Hindu</option>' +
                                    '<option value="Budha">Budha</option>');
                            }
                            else if (data.agama == 'Hindu') {
                                $('#agama').empty().append(
                                    '<option value="0" disabled>--Pilih--</option>' +
                                    '<option value="Islam" >Islam</option>' +
                                    '<option value="Kristen">Kristen</option>' +
                                    '<option value="Katolik" >Katolik</option>' +
                                    '<option value="Hindu" selected>Hindu</option>' +
                                    '<option value="Budha">Budha</option>');
                            }
                            else {
                                $('#agama').empty().append(
                                    '<option value="0" disabled>--Pilih--</option>' +
                                    '<option value="Islam" >Islam</option>' +
                                    '<option value="Kristen">Kristen</option>' +
                                    '<option value="Katolik" >Katolik</option>' +
                                    '<option value="Hindu">Hindu</option>' +
                                    '<option value="Budha" selected>Budha</option>');
                            }
                            $('#alamat').val(data.alamat);

                        }
                        else {
                            $('.content2').hide();
                            swal({
                                title: 'Oops...',
                                text: 'NIK not Found!',
                                type: 'error',
                                timer: '1500'
                            })
                        }
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
                return false;
            }
        });
    });

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