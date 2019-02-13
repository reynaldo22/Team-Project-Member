<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<h1>Edit</h1>
    <form action="{{url('/admin/'.$edit->id.'/update')}}" method="post">
        @csrf
        Username: <input type="text" name="username" id="" value="{{$edit->username}}"><br>
        Password: <input type="text" name="password" id="" value="{{$edit->password}}"><br>
        Sekolah: <input type="text" name="sekolah" id="" value="{{$edit->sekolah}}"><br>
        Nama Ketua: <input type="text" name="name" id="" value="{{$edit->name}}"><br>
        Email Ketua: <input type="text" name="email" id="" value="{{$edit->email}}"><br>
        KTP Ketua: <input type="text" name="ktp" id="" value="{{$edit->ktp}}"><br>
        Nama Anggota 1: <input type="text" name="name1" id="" value="{{$edit->name1}}"><br>
        KTP Anggota 1: <input type="text" name="ktp1" id="" value="{{$edit->ktp1}}"><br>
        Email Anggota 1: <input type="text" name="email1" id="" value="{{$edit->email1}}"><br>
        Nama Anggota 2: <input type="text" name="name2" id="" value="{{$edit->name2}}"><br>
        KTP Anggota 2: <input type="text" name="ktp2" id="" value="{{$edit->ktp2}}"><br>
        Email Anggota 2: <input type="text" name="email2" id="" value="{{$edit->email2}}"><br>
        <input type="submit" value="Edit">
    </form>
    <a href="{{url('/admin')}}">Back to dashboard</a>
</body>
</html>