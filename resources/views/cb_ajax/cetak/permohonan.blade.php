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
<table>
    <tr>
        <td>Nomor</td>
        <td>:</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Lampiran</td>
        <td>:</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Perihal</td>
        <td>:</td>
        <td><u>Permohonan Izin Apotek</u></td>
    </tr>
</table>
<br><br>
Kepada Yth. <br>
Kepala Dinas Kesehatan Kota Surabaya <br>
Jl. Jemursari no. 197 <br>
Di- <br>
<u>S U R A B A Y A</u><br><br>
<p align="justify">Bersama ini kami mengajukan permohonan untuk mendapatkan Izin Apotek dengan data-data sebagai
    berikut:</p>
<ol>
    <li>Pemohon</li>
    <ol type="a">
        <table>
            <tr>
                <td>
                    <li>Nama Pemohon</li>
                </td>
                <td>:</td>
                <td>{{$data->name}}</td>
            </tr>
            <tr>
                <td>
                    <li>Nomor Surat Izin Kerja / SP</li>
                </td>
                <td>:</td>
                <td>{{$data->no_sipa}}</td>
            </tr>
            <tr>
                <td>Tanggal SIK / SP</td>
                <td>:</td>
                <td>{{$data->tgl_sipa}}</td>
            </tr>
            <tr>
                <td>
                    <li>Nomor Kartu Tanda Penduduk</li>
                </td>
                <td>:</td>
                <td>{{$data->nik}}</td>
            </tr>
            <tr>
                <td>
                    <li>Alamat dan Nomor Telepon</li>
                </td>
                <td>:</td>
                <td>{{$data->alamat}}</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>{{$data->phone}}</td>
            </tr>
            <tr>
                <td>
                    <li>Pekerjaan Sekarang</li>
                </td>
                <td>:</td>
                <td>{{$data->pekerjaan}}</td>
            </tr>
            <tr>
                <td>
                    <li>Nomor Pokok Wajib Pajak</li>
                </td>
                <td>:</td>
                <td>{{$data->npwp}}</td>
            </tr>
        </table>
    </ol>

    <li>Apotek</li>
    <ol type="a">
        <table>
            <tr>
                <td>
                    <li>Nama Apotek</li>
                </td>
                <td>:</td>
                <td>{{$data2->name}}</td>
            </tr>
            <tr>
                <td>
                    <li>Alamat</li>
                </td>
                <td>:</td>
                <td>{{$data2->alamat}}</td>
            </tr>
            <tr>
                <td>
                    <li>Nomor Telepon</li>
                </td>
                <td>:</td>
                <td>{{$data2->phone}}</td>
            </tr>
            <tr>
                <td>
                    <li>Kecamatan</li>
                </td>
                <td>:</td>
                <td>{{$data2->kecamatan}}</td>
            </tr>
            <tr>
                <td>
                    <li>Kota</li>
                </td>
                <td>:</td>
                <td>{{$data2->kota}}</td>
            </tr>
        </table>
    </ol>

    <li>Dengan menggunakan sarana</li>
    <ol type="a">
        <table>
            <tr>
                <td>
                    <li>Nama Pemilik Sarana</li>
                </td>
                <td>:</td>
                <td>{{$data3->name}}</td>
            </tr>
            <tr>
                <td>
                    <li>Alamat</li>
                </td>
                <td>:</td>
                <td>{{$data3->alamat}}</td>
            </tr>
            <tr>
                <td>
                    <li>Nomor Pokok Wajib Pajak (NPWP)</li>
                </td>
                <td>:</td>
                <td>{{$data3->npwp}}</td>
            </tr>
        </table>
    </ol>
</ol>
</body>
</html>