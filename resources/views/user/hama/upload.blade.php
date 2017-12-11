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
<form action="{{route('hama.save.keempat')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
    {{csrf_field()}}
    1. Surat permohonan (bermaterai Rp. 6.000,-) dilengkapi dengan nomor dan tanggal permohonan  <br>
    <input type="file" name="file[]" multiple> <br>
    2. Scan asli KTP pemohon yang berlaku <br>
    <input type="file" name="file2[]" multiple><br>
    3. Surat keterangan domisili usaha <br>
    <input type="file" name="file3[]" multiple><br>
    4. Denah Ruangan dan Ukurannya
    <br>
    <input type="file" name="file4[]" multiple><br>
    5. Gambar sistem kerja peralatan pengelolaan air minum dilengkapi dengan spesifikasi
    <br>
    <input type="file" name="file5[]" multiple><br>
    6. Scan asli surat ijin pengambilan air baku (Surat keterangan asal air baku) dilengkapi dengan contact personnya dan<br>
    <input type="file" name="file6[]" multiple><br>
    <input type="submit">
</form>

<script>@if(\Session::has('status'))
    swal({
        title: '{{ session('status') }}',
        type: 'info',
        timer: '1500'
    });
    @endif</script>
</body>
</html>