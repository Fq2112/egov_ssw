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
<a target="_blank" href="{{route('depot.cetak.permohonan')}}">Cetak Surat Permohonan</a>
<a target="_blank" href="{{route('depot.cetak.uu')}}">Cetak Surat Pernyataan Taat UU</a>
<a target="_blank" href="{{route('depot.cetak.bersedia')}}">Cetak Surat Pernyataan Bersedia Diperiksa dan Di uji Kualitas Air Minum</a>


<button onclick="window.location.href='{{action('User\DepotAirController@setsessionketiga')}}'"> lanjut</button>
<script>
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