<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>

    <ul>
        <li><a href="{{url('/home')}}">Home</a></li>
        <li><a href="{{url('/admin/role')}}">Role</a></li>
        <li><a href="{{url('/admin/payment')}}">Payment</a></li>
    </ul>

    <h1>All users</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->password}}</td>
                <td><a href="{{url('admin/'.$d->id.'/edit')}}">Edit</a> | <a href="{{url('admin/users/'.$d->id.'/delete')}}">Delete</a></td>
            </tr> 
            @endforeach
        </tbody>
    </table>
    
</body>
</html>