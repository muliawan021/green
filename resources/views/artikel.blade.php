<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel</title>
</head>
<body>
    <form action="{{url('artikel/create')}}" method="post">
    {{ csrf_field() }} 
        <p>User ID</p><br>
        <input type="text" name="userId">
        <p>Judul Artikel</p><br>
        <input type="text" name="judul">
        <p>Isi Artikel</p><br>
        <textarea name="isiArtikel" id="" cols="50" rows="5"></textarea><br>
        <button type="submit">Upload</button>

    </form>
</body>
</html>