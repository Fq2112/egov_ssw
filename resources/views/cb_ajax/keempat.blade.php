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
<form action="{{route('save.keempat')}}" method="post" class="form-horizontal" data-toggle="validator">
    {{ csrf_field() }}  {{ method_field('post') }}
    <td>Daftar terperinci alat-alat apotik</td>
    <br>
    <td>1. Alat Pembuatan, Pengolahan, dan Peracikan</td>
    <br>
    <td>Gelas Ukuran</td>
    <br>
    <span>10 ml</span>
    <input type="number" min="0" name="gelasu10"><br>
    <span>100 ml</span>
    <input type="number" min="0" name="gelasu100"><br>
    <span>250 ml</span>
    <input type="number" min="0" name="gelasu250"><br>

    <td>Benker Gelas</td>
    <br>
    <span>100 ml</span>
    <input type="number" min="0" name="bgelas100"><br>
    <span>500 ml</span>
    <input type="number" min="0" name="bgelas500"><br>
    <span>1000 ml</span>
    <input type="number" min="0" name="bgelas1000"><br>

    <td>Labu Elemeyer</td>
    <br>
    <span>100 ml</span>
    <input type="number" min="0" name="labu100"><br>
    <span>500 ml</span>
    <input type="number" min="0" name="labu500"><br>
    <span>1000 ml</span>
    <input type="number" min="0" name="labu1000"><br>

    <td>Panci Pengukur</td>
    <br>
    <span>10 ml</span>
    <input type="number" min="0" name="panci10"><br>

    <td>Corong</td>
    <br>
    <span>6 cm</span>
    <input type="number" min="0" name="corong6"><br>
    <span>7,5 cm</span>
    <input type="number" min="0" name="corong7"><br>

    <td>Spantel Tanduk Logam /Plastik</td>
    <br>
    <input type="number" min="0" name="spantel"><br>

    <td>Cawan penguap bergaris tengah</td>
    <br>
    <span>6 cm</span>
    <input type="number" min="0" name="cawan6"><br>
    <span>7 cm</span>
    <input type="number" min="0" name="cawan7"><br>
    <span>8 cm</span>
    <input type="number" min="0" name="cawan8"><br>
    <span>9 cm</span>
    <input type="number" min="0" name="cawan9"><br>

    <td>Batang Pengaduk</td>
    <br>
    <input type="number" min="0" name="pengaduk"><br>

    <td>Pemanas Air</td>
    <br>
    <input type="number" min="0" name="pemananas"><br>

    <td>Kompor/Alat pemanas lainnya</td>
    <br>
    <input type="number" min="0" name="kompor"><br>

    <td>Panci</td>
    <br>
    <input type="number" min="0" name="panci"><br>

    <td>Rak tempat pengeringan alat</td>
    <br>
    <input type="number" min="0" name="rak"><br>

    <td>Thermometer berkala 100 C</td>
    <br>
    <input type="number" min="0" name="termo"><br>

    <td>Mortir bergaris tengah</td>
    <br>
    <span>10 cm</span>
    <input type="number" min="0" name="mortir10"><br>
    <span>13 cm</span>
    <input type="number" min="0" name="mortir13"><br>
    <span>16 cm</span>
    <input type="number" min="0" name="mortir16"><br>

    <td>Timbangan miligram dengan anak timbangan yang ditera</td>
    <br>
    <input type="number" min="0" name="timbanganmg"><br>

    <td>Timbangan gram dengan anak timbangan yang ditera</td>
    <br>
    <input type="number" min="0" name="timbangang"><br><br>

    <td>2. Perlengkapan dan Alat Perbekalan Farmasi</td>
    <br>
    <td>Botol dalam segala ukuran</td>
    <br>
    <input type="checkbox" name="botol" checked data-toggle="toggle" data-on="Hello<br>World"
           data-off="Goodbye<br>World"><br>

    <td>Lemari dan rak untuk Penyimpanan Obat yang sesuai kebutuhan</td>
    <br>
    <input type="checkbox" name="lemari" checked data-toggle="toggle" data-on="Hello<br>World"
           data-off="Goodbye<br>World"><br>
    <td>Lemari Pendingin</td>
    <br>
    <input type="checkbox" name="lemaripendingin" checked data-toggle="toggle" data-on="Hello<br>World"
           data-off="Goodbye<br>World"><br>
    <td>Lemari untuk penyimpanan narkotika, psikotropika dan bahan bahaya lainnya</td>
    <br>
    <input type="checkbox" name="lemarinarkotika" checked data-toggle="toggle" data-on="Hello<br>World"
           data-off="Goodbye<br>World"><br><br>
    <td>3. Kepustakaan</td>
    <br>
    <td>FI edisi IV</td>
    <br>
    <input type="checkbox" name="fi_iv" checked data-toggle="toggle" data-on="Hello<br>World"
           data-off="Goodbye<br>World"><br><
    td>ISO edisi terbaru</td>
    <br>
    <input type="checkbox" name="iso" checked data-toggle="toggle" data-on="Hello<br>World"
           data-off="Goodbye<br>World"><br>
    <td>UU narkotika dan psikotropika</td>
    <br>
    <input type="checkbox" name="uu" checked data-toggle="toggle" data-on="Hello<br>World"
           data-off="Goodbye<br>World"><br>
    <input type="submit">
</form>

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