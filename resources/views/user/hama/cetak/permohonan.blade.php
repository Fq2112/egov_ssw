<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSWS - Surabaya Single Window Sanitary | Perizinan Operasional Pengendalian Hama</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://ssw.surabaya.go.id/assets/img/logo-sby.png">
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
Dengan ini melakukan permohonan untuk mendapatkan ijin mendirikan perusahaan pembasmi hama. <br>
<br>

demikian permohonan ini kami sampaikan dan untuk itu kami bersedia memenuhi ketentuan dan menerima persyaratan berikut dengan sanksi yang berlaku. Atas kejasamanya saya ucapkan terima kasih.
<br><br><br>
<div align="right">

    &nbsp;&nbsp;&nbsp;Surabaya, ....  ........................ {{\Illuminate\Support\Carbon::now()->format('Y')}}<br>
    &nbsp;&nbsp;&nbsp;Yang membuat pernyataan,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br><br><br>




    &nbsp;&nbsp;&nbsp;..........................................................

</div>




</body>
</html>