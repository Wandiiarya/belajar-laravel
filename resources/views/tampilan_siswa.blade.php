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
            <th>nama</th>
            <th>jenis kelamin</th>
            <th>alamat</th>
            <th>agama</th>
            <th>telepon</th>
            <th>email</th>

        </tr>
        @php $no=1;@endphp
        @foreach ($data as $data )
        <tr>
             <td>{{$no++}}</td>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->jenis_kelamin}}</td>
             <td>{{$data->alamat}}</td>
            <td>{{$data->agama}}</td>
            <td>{{$data->telepon}}</td>
            <td>{{$data->email}}</td>
        </tr>
        @endforeach

    </table>

    </center>

</body>
</html>
