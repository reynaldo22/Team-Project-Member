<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Soal</title>
</head>
<body>
<h1>Edit Soal</h1>
    <form action="{{url('/admin/soal/'.$editSoal->id.'/update')}}" method="post">
        @csrf
        Id Soal: <input type="text" name="id_soal" id="" value="{{$editSoal->id_soal}}"><br>
        Path: <input type="text" name="path" id="" value="{{$editSoal->path}}"><br>
        <input type="submit" value="Edit">
    </form>
    <a href="{{url('/admin/soal')}}">Back to dashboard</a>
</body>
</html>