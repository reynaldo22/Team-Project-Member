<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal</title>
</head>
<body>

    <ul>
        <li><a href="{{url('/home')}}">Home</a></li>
        <li><a href="{{url('/admin/role')}}">Role</a></li>
        <li><a href="{{url('/admin/payment')}}">Payment</a></li>
        <li><a href="{{url('/admin/soal')}}">Soal</a></li>
    </ul>

    <h1>Soal</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Id soal</th>
                <th>Path</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($soal as $s)
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->id_soal}}</td>
                <td>{{$s->path}}</td>
                <td><a href="{{url('admin/soal/'.$s->id.'/edit')}}">Edit</a> | <a href="{{url('admin/soal/'.$s->id.'/delete')}}">Delete</a></td>
            </tr> 
            @endforeach
        </tbody>
    </table>
    
</body>
</html>