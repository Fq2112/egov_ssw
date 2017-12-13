<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>&nbsp;</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://ssw.surabaya.go.id/assets/img/logo-sby.png">
    <style>
        p {
            text-indent: 50px;
        }

        hr {
            border: none;
            width: 100%;
            height: 50px;
            border-bottom: 1px solid #1f1209;
            box-shadow: 0 20px 20px -20px #333;
            margin: -50px auto 10px;
        }
    </style>
</head>
<body onload="window.print()">
<em style="font-size: 8px">KOP PERUSAHAAN</em><br><br><br><br><br><br>
<hr>
<br>
<table>
    <tr>
        <td>Nomor</td>
        <td>:</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Lampiran</td>
        <td>:</td>
        <td>1 (satu) berkas</td>
    </tr>
    <tr>
        <td>Perihal</td>
        <td>:</td>
        <td><u>Permohonan Izin Penyelenggaraan Pemberantasan Hama</u></td>
    </tr>
</table>
<br><br>
Kepada Yth. <br>
Kepala Dinas Kesehatan Kota Surabaya <br>
Jl. Jemursari no. 197 <br>
Di- <br>
<u>S U R A B A Y A</u><br>
<p>Yang bertanda tangan dibawah ini,</p><br>
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{$data->name}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{$data2->alamat}}</td>
    </tr>
</table>
<br>
<p align="justify">Bersama ini mengajukan permohonan untuk memperoleh Izin Penyelenggaraan Pemberantasan Hama delima
    yang kami rencanakan sebagai berikut:</p><br>
<table>
    <tr>
        <td>Nama Perusahaan</td>
        <td>:</td>
        <td>{{$data2->name}}</td>
    </tr>
    <tr>
        <td>Alamat Perusahaan</td>
        <td>:</td>
        <td>{{$data2->alamat}}</td>
    </tr>
    <tr>
        <td>Nomor Telepon</td>
        <td>:</td>
        <td>{{$data2->phone}}</td>
    </tr>
    <tr>
        <td>Kelurahan/Desa</td>
        <td>:</td>
        <td>{{$data2->desa}}</td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td>{{$data2->kecamatan}}</td>
    </tr>
    <tr>
        <td>Kota</td>
        <td>:</td>
        <td>{{$data2->kota}}</td>
    </tr>
</table>
<br>
Sebagai kelengkapan permohonan ini, kami lampirkan persyaratan yang diperlukan.<br><br>
<p>Demikian permohonan ini dibuat dengan harapan dapat disetujui</p><br><br>
<div align="right">

    &nbsp;&nbsp;&nbsp;Surabaya, .............................. {{\Illuminate\Support\Carbon::now()->format('Y')}}<br>
    &nbsp;&nbsp;&nbsp;Yang membuat pernyataan,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
    <em>Materai Rp6.000,-</em><br><br>
    <span style="text-transform: uppercase">({{$data->name}})</span>
</div>




</body>
</html>