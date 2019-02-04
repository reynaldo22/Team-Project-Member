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
        Nama: <input type="text" name="name" id="" value="{{$edit->name}}"><br>
        Email: <input type="text" name="email" id="" value="{{$edit->email}}"><br>
        Password: <input type="text" name="password" id="" value="{{$edit->password}}"><br>
        <input type="submit" value="Edit">
    </form>
    <a href="{{url('/admin')}}">Back to dashboard</a>
</body>
</html>