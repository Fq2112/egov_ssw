<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSWS - Surabaya Single Window Sanitary | Perizinan Apotek</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://ssw.surabaya.go.id/assets/img/logo-sby.png">

</head>
<body onload="window.print()">
<center><strong>SURAT PERNYATAAN PEMILIK SARANA APOTEK <br>  TIDAK TERLIBAT PELANGGARAN PERATURAN PERUNDANGAN-UNDANGAN
        <br> DIBIDANG KEFARMASIAN</strong></center>
<br><br><br>

Yang bertanda tangan dibawah ini:
<table>
    <tr>
        <td>
            nama
        </td>
        <td>:</td>
        <td>{{$data->name}}</td>
    </tr>
    <tr>
        <td>No KTP</td>
        <td>:</td>
        <td>{{$data->nik}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{$data->alamat}}</td>
    </tr>
</table>
<br><br>

Sebagai penanggung jawab sarana apotek pada:

<table>
    <tr>
        <td>
            nama
        </td>
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
Dengan ini menyatakan bahwa tidak pernah terlibat peraturan perundan-undangan dibidang farmasi/obat <br>
<br><br>
<div align="right">

    &nbsp;&nbsp;&nbsp;Surabaya, ....  ........................ {{\Illuminate\Support\Carbon::now()->format('Y')}}<br>
    &nbsp;&nbsp;&nbsp;Yang membuat pernyataan,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br><br><br>




    &nbsp;&nbsp;&nbsp;..........................................................

</div>



</body>
</html>