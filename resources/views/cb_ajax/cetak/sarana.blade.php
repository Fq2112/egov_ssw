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
    <strong><u>SURAT PERNYATAAN</u></strong>
</p><br><br>

Yang bertanda tangan dibawah ini:<br><br>
<table>
    <tr>
        <td>Nama Pemilik Sarana Apotek</td>
        <td>:</td>
        <td style="text-transform: uppercase">{{$data->name}}</td>
    </tr>
    <tr>
        <td>Tempat / Tanggal lahir</td>
        <td>:</td>
        <td>{{$data->tempat_lahir}} /
            {{\Carbon\Carbon::createFromFormat('Y-m-d',$data->tgl_lahir)->formatLocalized('%A %d %B %Y')}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{$data->alamat}}</td>
    </tr>
    <tr>
        <td>No. KTP</td>
        <td>:</td>
        <td>{{$data->nik}}</td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{$data->pekerjaan}}</td>
    </tr>
</table>
<br>
<p align="justify">
    Menyatakan bahwa saya tidak pernah terlibat pelanggaran perundang - undangan di bidang
    Obat - obatan.<br><br>Demikian surat pernyataan ini saya buat dengan sebenar - benarnya.
</p><br>

<div align="right">

    &nbsp;&nbsp;&nbsp;Surabaya, .............................. {{\Illuminate\Support\Carbon::now()->format('Y')}}<br>
    &nbsp;&nbsp;&nbsp;Yang membuat pernyataan,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
    <em>Materai Rp6.000,-</em><br><br><br>
    <span style="text-transform: uppercase">({{$data->name}})</span>
</div>
</body>
</html>