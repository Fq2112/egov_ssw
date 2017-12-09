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
<form action="{{route('save.ketujuh')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
    {{csrf_field()}}
    1. Scan asli Surat Tanda Registrasi Apoteker / Surat Izin Praktek Apoteker, Ijasah, Sumpah Apoteker,
    Surat keterangan Sehat Apoteker <br>
    <input type="file" name="file[]" multiple> <br>
    2. Scan asli Kartu Tanda Penduduk (APA dan PSA)<br>
    <input type="file" name="file2[]" multiple><br>
    3. Denah Apotik beserta Ukuran dan Peta Lokasi Apotik <br>
    <input type="file" name="file3[]" multiple><br>
    4. Surat yang menyatakan status bangunan dalam bentuk akte hak milik, apabila nama pemilik bangunan tidak sama dengan pemilik sarana maka harus disertai bukti kontrak / sewa /pinjam dan ada pernyataan pemilik tidak  keberatan bangunan tersebut digunakan untuk Apotik
    <br>
    <input type="file" name="file4[]" multiple><br>
    5. Daftar Asisten Apoteker dengan mencantumkan nama, alamat, tanggan lulus, Surat Tanda Registrasi Tenaga Tenaga Teknis Kefarmasian (STRTTK)
    <br>
    <input type="file" name="file5[]" multiple><br>
    6. Daftar terperinci alat perlengkapan Apotik <br>
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