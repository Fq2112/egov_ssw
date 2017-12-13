<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>&nbsp;</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://ssw.surabaya.go.id/assets/img/logo-sby.png">
    <style>
        p {
            text-indent: 50px;
        }

        hr {
            border: none;
            width: 100%;
            height: 50px;
            border-bottom: 1px solid #1f1209;
            box-shadow: 0 20px 20px -20px #333;
            margin: -50px auto 10px;
        }
    </style>
</head>
<body onload="window.print()">
<table>
    <tr>
        <td>Nomor</td>
        <td>:</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Kepada Yth,</td>
    </tr>
    <tr>
        <td>Lampiran</td>
        <td>:</td>
        <td>........................... lembar</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="text-transform: uppercase">Kepala Dinas Kesehatan Kota Surabaya</td>
    </tr>
    <tr>
        <td>Hal</td>
        <td>:</td>
        <td><u>Permohonan Laik Higiene Sanitasi DAM</u></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>di</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><u style="text-indent: 25px">S u r a b a y a</u></td>
    </tr>
</table>
<br><br>
Dengan hormat,<br>Saya yang bertanda tangan dibawah ini :</p><br>
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{$data->name}}</td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <?php $umur = \Carbon\Carbon::createFromFormat('Y-m-d', $data->tgl_lahir)?>
        <td>{{\Carbon\Carbon::now()->diffInYears($umur)}} Tahun</td>
    </tr>
    <tr>
        <td>Nomor KTP</td>
        <td>:</td>
        <td>{{$data->nik}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{$data2->alamat}}</td>
    </tr>
    <tr>
        <td>Nama DAM</td>
        <td>:</td>
        <td>{{$data2->name}}</td>
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
<p align="justify">Bersama ini mengajukan permohonan untuk memperoleh Izin Penyelenggaraan Pemberantasan Hama delima
    yang kami rencanakan sebagai berikut:</p><br>
<table>
    <tr>
        <td>Nama Perusahaan</td>
        <td>:</td>
        <td>{{$data2->name}}</td>
    </tr>
    <tr>
        <td>Alamat Perusahaan</td>
        <td>:</td>
        <td>{{$data2->alamat}}</td>
    </tr>
    <tr>
        <td>Nomor Telepon</td>
        <td>:</td>
        <td>{{$data2->phone}}</td>
    </tr>
</table>
<br>
<p align="justify">Mengajukan permohonan untuk mendapatkan Sertifikat Laik Higiene Sanitasi DAM.<br>Sebagai dasar
    pertimbangan kami lampirkan :</p>
<ol>
    <li>Fotocopy KTP pemohon yang berlaku</li>
    <li>Foto terbaru (4 x 6) 2 lembar</li>
    <li>Surat keterangan domisili usaha</li>
    <li>Denah lokasi dan bangunan tempat usaha</li>
    <li>Fotocopy sertifikat pelatihan atau kursus Higiene Sanitasi DAM bagi pemilik dan Penjamah</li>
</ol>
<p align="justify">Demikian permohonan ini kami sampaikan, atas perhatiannya diucapkan terima kasih.</p><br>
<div align="right">

    &nbsp;&nbsp;&nbsp;Surabaya, .............................. {{\Illuminate\Support\Carbon::now()->format('Y')}}<br>
    &nbsp;&nbsp;&nbsp;Yang membuat pernyataan,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
    <em>Materai Rp6.000,-</em><br><br>
    <span style="text-transform: uppercase">({{$data->name}})</span>
</div>




</body>
</html>