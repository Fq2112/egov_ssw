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
    <strong><u>SURAT PERNYATAAN BERSEDIA UNTUK DILAKUKAN PEMERIKSAAN / PENGUJIAN KUALITAS AIR MINUM</u></strong>
</p><br><br>

Yang bertanda tangan dibawah ini:
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
<p align="justify" style="text-indent: 50px">
    Dengan ini menyatakan bersedia dilakukan pemeriksaan / pengujian kualitas air minum
    yang berasal dari Depot Air minum yang saya kelola oleh petugas yang terlatih sesuai dengan
    ketentuan peraturan perundang - undangan yang berlaku dalam pengelolaan Kualitas Air
    Minum yang meliputi :
</p>
<ol>
    <li>Pemeriksaan Mikrobiologi 1 bulan sekali</li>
    <li>Pemeriksaan Kimiawi lengkap 6 bulan sekali</li>
</ol>
<p align="justify">
    Dan apabila dalam Pemeriksaan Laboratorium secara Mikrobiologi kualitasnya tidak memenuhi
    syarat 3 (tiga) kali berturut-turut, maka izin penyelenggara depot air minum / air minum isi ulang
    dicabut/ tidak berlaku
</p><br>
<p align="justify" style="text-indent: 50px">
    Demikian pernyataan ini dibuat dan dapat dipergunakan sebagaimana mestinya untuk persyaratan Pengelolaan Depot Air
    Minum
</p><br><br><br>
<div align="right">

    &nbsp;&nbsp;&nbsp;Surabaya, .............................. {{\Illuminate\Support\Carbon::now()->format('Y')}}<br>
    &nbsp;&nbsp;&nbsp;Yang membuat pernyataan,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
    <em>Materai Rp6.000,-</em><br><br>
    <span style="text-transform: uppercase">({{$data->name}})</span>
</div>


</body>
</html>