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
<p align="center">
    <strong><u>SURAT PERNYATAAN TUNDUK DAN TAAT TERHADAP <br>PERARTURAN DAN UNDANG-UNDANG</u></strong>
</p><br><br>

Yang bertanda tangan dibawah ini:<br><br>
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td style="text-transform: uppercase">{{$data->name}}</td>
    </tr>
    <tr>
        <td>Nomor KTP</td>
        <td>:</td>
        <td>{{$data->nik}}</td>
    </tr>
    <tr>
        <td>Alamat Rumah</td>
        <td>:</td>
        <td>{{$data->alamat}}</td>
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
        <td>Kode Pos</td>
        <td>:</td>
        <td>{{$data->kodepos}}</td>
    </tr>
    <tr>
        <td>No. Telepon Rumah & HP</td>
        <td>:</td>
        <td>{{$data->phone}}</td>
    </tr>
    <tr>
        <td>Nama Depo Air Minum</td>
        <td>:</td>
        <td>{{$data2->name}}</td>
    </tr>
    <tr>
        <td>Alamat Depo Air Minum</td>
        <td>:</td>
        <td>{{$data2->alamat}}</td>
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
        <td>Kode Pos</td>
        <td>:</td>
        <td>{{$data->kodepos}}</td>
    </tr>
    <tr>
        <td>No. Telepon Depo</td>
        <td>:</td>
        <td>{{$data2->phone}}</td>
    </tr>
</table>
<br>
<p align="justify">
    Dengan ini menyatakan tunduk dan taan terhadap ketentuan, peraturan dan
    perundang-undangan yang berlaku dalam pengelolaan Depot Air Minum yang saya kelola.
</p><br><br>
<p align="justify" style="text-indent: 50px">
    Demikian Pernyataan ini dibuat dan dapat dipergunakan sebagaimana mestinya,
    pernyataan ini digunakan untuk kelengkapan persyaratan Izin Pengelolaan Depot Air Minum
</p><br><br>
<div align="right">

    &nbsp;&nbsp;&nbsp;Surabaya, .............................. {{\Illuminate\Support\Carbon::now()->format('Y')}}<br>
    &nbsp;&nbsp;&nbsp;Yang membuat pernyataan,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
    <em>Materai Rp6.000,-</em><br><br>
    <span style="text-transform: uppercase">({{$data->name}})</span>
</div>


</body>
</html>