<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>&nbsp;</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://ssw.surabaya.go.id/assets/img/logo-sby.png">
</head>
<body onload="window.print()">
<div>
    <center><img style="width: 10%" src="http://ssw.surabaya.go.id/assets/img/logo-sby.png"></center>
</div>
<p align="center">
    <strong style="font-size: 14px">PEMERINTAH KOTA SURABAYA<br>DINAS KESEHATAN</strong>
</p>
<p align="center">
    <strong style="font-size: 16px">SURAT IZIN APOTEK</strong><br>
    <span style="font-size: 14px">KEPUTUSAN KEPALA DINAS KESEHATAN<br>KOTA SURABAYA</span><br><br>
    <span style="font-size: 10px">Nomor: 123/45/6789</span>
</p>
<p align="center" style="font-size: 14px">
    TENTANG<br>PEMBERIAN IZIN APOTEK
</p><br><br>
<table>
    <tr>
        <td>Kepada</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Nama Pemilik</td>
        <td>:</td>
        <td>{{$pemilik->name}}</td>
    </tr>
    <tr>
        <td>Surat Izin Praktik Apoteker</td>
        <td>:</td>
        <td>123.{{$trapotek->id}}/56/SIPA/7890</td>
    </tr>
    <tr>
        <td>Nama Apotek</td>
        <td>:</td>
        <td>{{$apotek->name}}</td>
    </tr>
    <tr>
        <td>Alamat Apotek</td>
        <td>:</td>
        <td>{{$apotek->alamat}}</td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td>{{$apotek->kecamatan}}</td>
    </tr>
    <tr>
        <td>Status Menggunakan Sarana</td>
        <td>:</td>
        <td>{{$pemilik->status}}</td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td>{{\Carbon\Carbon::createFromFormat('Y-m-d',$trapotek->tgl_perizinan)->formatLocalized('%d %B %Y')}}</td>
    </tr>
    <tr>
        <td>Di</td>
        <td>:</td>
        <td>Surabaya</td>
    </tr>
    <tr>
        <td>Berlaku Selama</td>
        <td>:</td>
        <td>5 (lima) tahun sejak tanggal ditetapkan</td>
    </tr>
</table>
<br><br><br>
<div align="right">

    Ditetapkan Di Surabaya,<br>
    Pada Tanggal 15 Desember 2017<br><br>
    KEPALA DINAS KESEHATAN<br>
    KOTA SURABAYA<br><br><br><br>

    <u>Fiqy Ainuzzaqy</u><br>
    NIP.123458999
</div>


</body>
</html>