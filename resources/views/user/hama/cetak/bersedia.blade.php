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
<center><strong>SURAT PERNYATAAN <br> BERSEDIA MELAKUKAN TES <br> KUALITAS AIR MINUM
    </strong></center>
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

Sebagai penanggung jawab mengelolah apotek pada:

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
Dengan ini menyatakan bersedia menerima tahapan tes uji kualitas air minum. jika ada kekukarangan pada hasil uji
kualitas air, saya bersedia menerima peraturan dan sanksi yang berlaku<br>
<br><br>
<div align="right">

    &nbsp;&nbsp;&nbsp;Surabaya, .... ........................ {{\Illuminate\Support\Carbon::now()->format('Y')}}<br>
    &nbsp;&nbsp;&nbsp;Yang membuat pernyataan,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br><br><br>


    &nbsp;&nbsp;&nbsp;..........................................................

</div>


</body>
</html>