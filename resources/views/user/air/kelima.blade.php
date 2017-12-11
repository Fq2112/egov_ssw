<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/sweetalert2/sweetalert2.min.css') }}">
</head>
<body>
<table>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td>{{$data->nik}}</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{$data->name}}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>{{$data->jk}}</td>
    </tr>
    <tr>
        <td>Tempat Tanggal Lahir</td>
        <td>:</td>
        <td>{{$data->tempat_lahir}}, {{\Carbon\Carbon::createFromFormat('Y-m-d',$data->tgl_lahir)->formatLocalized('%A %d %B %Y')}}</td>
    </tr>
    <tr>
        <td>Tempat Pengambilan SK</td>
        <td>:</td>
        <td> {{$data2->tempat_sk}}<td>
    </tr>

</table>

Dengan ini saya menyatakan bahwa data yang saya isikan adalah benar dan tanpa paksaan dari pihak manapun. Apabila dilain waktu data tersebut terbukti tidak benar, maka saya bersedia menerima sanksi apapun sesuai peraturan perundang-undangan yang berlaku.

<br>

<button onclick="window.location.href='{{route('depot.save.kelima')}}'">Setuju</button>
<script>@if(\Session::has('status'))
    swal({
        title: '{{ session('status') }}',
        type: 'info',
        timer: '1500'
    });
    @endif</script>
</body>
</html>