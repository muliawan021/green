<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel</title>
</head>
<body>
    <form action="{{url('artikel/'.$artikel->id.'/update')}}" method="post">
    {{ csrf_field() }} 
        <p>User ID</p><br>
        <p>{{ $artikel->userid }}</p>
        <p>Judul Artikel</p><br>
        <input type="text" name="judul" value="{{ $artikel->judul }}" >
        <p>Isi Artikel</p><br>
        <textarea name="isiArtikel" id="" cols="50" rows="5">{{ $artikel->isiArtikel }}</textarea><br>
        <button type="submit">Update</button>

    </form>
</body>
</html>