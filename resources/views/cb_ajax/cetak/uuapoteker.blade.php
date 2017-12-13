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
    <strong><u>SURAT PERNYATAAN KESEDIAAN MENTAATI <br>PERATURAN PERUNDANG - UNDANGAN</u></strong>
</p><br><br>

Yang bertanda tangan dibawah ini:<br><br>
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td style="text-transform: uppercase">{{$data->name}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td style="text-transform: uppercase">{{$data->alamat}}</td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td style="text-transform: uppercase">{{$data3->jabatan}}</td>
    </tr>
</table>
<br>
<p align="justify">
    Dengan ini menyatakan bahwa :
</p><br>
<ol>
    <li>Bersedia mentaati perturan perundang - undangan yang berlaku dalam bidang pelayanan kesehatan swasta.</li>
    <li>Sanggup mentaati petunjuk serta bimbingan oleh Dinas Kesehatan Kota Surabaya</li>
</ol>
<br>
<p align="justify">Demikian surat pernyataan ini saya buat dengan sebenarnya untuk dipergunakan sebagaimana
    mestinya.</p>
<div align="right">

    &nbsp;&nbsp;&nbsp;Surabaya, .............................. {{\Illuminate\Support\Carbon::now()->format('Y')}}
    <br><br>
    &nbsp;&nbsp;&nbsp;Yang membuat pernyataan,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
    <em>Materai Rp6.000,-</em><br><br><br>
    <span style="text-transform: uppercase">({{$data->name}})</span>
</div>


</body>
</html>