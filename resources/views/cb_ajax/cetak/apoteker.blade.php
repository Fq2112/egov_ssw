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
<strong><center>SURAT PERNYATAAN SEBAGAI APOTEKER PENANGGUNG JAWAB</center></strong><br><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda Tangan dibawah ini saya: <br><br>
<table>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Nama
        </td>
        <td>:</td>
        <td>{{$data->name}}</td>

    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Tempat/ tanggal lahir
        </td>
        <td>:</td>
        <td>{{$data->tempat_lahir}}, {{\Carbon\Carbon::createFromFormat('Y-m-d',$data->tgl_lahir)->format('j F Y')}}</td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Tempat/ tanggal lahir
        </td>
        <td>:</td>
        <td>{{$data->jk}}</td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Lulusan Apoteker
        </td>
        <td>:</td>
        <td>{{$data->pendidikan}}</td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Tahun Lulus
        </td>
        <td>:</td>
        <td>{{$data->thn_lulus}}</td>
    </tr>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Alamat
        </td>
        <td>:</td>
        <td>{{$data->alamat}}</td>
    </tr>

</table>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Dengan ini menyatakan dengan sesungguhnya, bahwa saya bekerja pada usaha Apotek dan tidak bertindak apoteker pengelola pada <strong>{{$data2->name}}</strong>.
<br> <br>
Demikian surat pernyataan ini saya buat dengan sebenarnya tanpa unsur paksaan dari pihak lain manapun, apabila dikemudia hari pernyataan ini tidak benar maka saya siap mendapatkan kosekuensi sesuai dengan peraturan yang berlaku.
<br><br><br>

<div align="right">

    &nbsp;&nbsp;&nbsp;Surabaya, ....  ........................ {{\Illuminate\Support\Carbon::now()->format('Y')}}<br>
    &nbsp;&nbsp;&nbsp;Yang membuat pernyataan,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br><br><br>




    &nbsp;&nbsp;&nbsp;..........................................................

</div>
</body>
</html>