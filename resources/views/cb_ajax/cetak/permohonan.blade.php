<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body onload="window.print()">
Kepada Yth. <br>
Kepala Dinas Kesehatan Kota Surabaya <br>
Jl. Jemursari no. 197 <br>
di- <br>
<h4>Surabaya</h4><br>

Dengan hormat, <br>
Saya yang bertanda tangan dibawah ini: <br>
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{$data->name}}</td>
    </tr>

    <tr>
        <td>Tempat tanggal lahir</td>
        <td>:</td>
        <td>{{$data->tempat_lahir}}, {{\Carbon\Carbon::createFromFormat('Y-m-d',$data->tgl_lahir)->format('j F Y')}}</td>
    </tr>
    <tr>
        <td>Nama Perusahaan</td>
        <td>:</td>
        <td>{{$data2->name}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{$data2->alamat}}, {{$data2->kecamatan}}, {{$data2->kota}}, {{$data2->provinsi}}</td>
    </tr>
</table>
<br>
Dengan ini melakukan permohonan untuk mendapatkan ijin mendirikan apotik seperti data diatas. <br>
<br>

demikian permohonan ini kami sampaikan dan untuk itu kami bersedia memenuhi ketentuan dan menerima persyaratan berikut dengan sanksi yang berlaku. Atas kejasamanya saya ucapkan terima kasih.

<div align="right">hormat saya, <br> pemohon <br> <br>materai 6000 <br> <br> {{$data->name}}</div>




</body>
</html>