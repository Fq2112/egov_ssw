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
1. Alat Pembuatan, Pengolahan, dan Peracikan <br><br>
<table border="1">
    <tr>
        <th>nama alat</th>
        <th>jumlah</th>
        <th>ukuran</th>


    </tr>
    @foreach($data2 as $dt)

            <tr>
                <td width="500">{{$dt['name']}}</td>
                @if(!is_null($dt['jumlah']))
                    <td>{{$dt['jumlah']}}</td>
                    @else
                    <td>n/a</td>
                @endif
                @if(!is_null($dt['ukuran']))
                <td>{{$dt['ukuran']}}</td>
                    @else
                    <td>n/a</td>
                @endif
            </tr>

    @endforeach

</table>
</body>
</html>