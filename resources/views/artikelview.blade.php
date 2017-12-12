<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel</title>
</head>
<body>
    <table >

        <tr>
            <td>ID Artikel</td>
            <td>User ID</td>
            <td>Judul Artikel</td>
            <td>Isi Artikel</td>
            <td>Opsi</td>
        </tr>
        @foreach($artikel as $arr)
        <tr>
            <td>{{ $arr->id }}</td>
            <td>{{ $arr->userid }}</td>
            <td>{{ $arr->judul }}</td>
            <td>{{ $arr->isiArtikel }}</td>
            <td><a href="{{url('artikel/'.$arr->id.'/edit')}}">Edit</a> </td>
            <td><a href="{{url('artikel/'.$arr->id.'/delete')}}">Delete </a> </td>
        </tr>
        @endforeach
    </table>
</body>
</html>