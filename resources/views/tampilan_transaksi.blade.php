<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
 <table border="1">
        <tr>
            <th>no</th>
            <th>id</th>
            <th>nama barang </th>
             <th>nama pembeli </th>
              <th>jumlah</th>
              <th>tanggal</th>

        </tr>
        @php $no=1;@endphp
        @foreach ($data as $data )
        <tr>
             <td>{{$no++}}</td>
              <td>{{$data->id}}</td>
             <td>{{$data->barang2->nama}}</td>
            <td>{{$data->pembeli->nama_pembeli}}</td>
            <td>{{$data->jumlah}}</td>
                <td>{{$data->tanggal}}</td>
        </tr>
        @endforeach

    </table>

    </center>

</body>
</html>
