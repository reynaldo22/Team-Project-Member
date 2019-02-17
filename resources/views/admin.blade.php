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
        <li><a href="{{url('/admin/soal')}}">Soal</a></li>
    </ul>

    <h1>All users</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Sekolah</th>
                <th>Nama Ketua</th>
                <th>Email Ketua</th>
                <th>KTP ketua</th>
                <th>Nama Anggota 1</th>
                <th>Email Anggota 1</th>
                <th>KTP Anggota 1</th>
                <th>Nama Anggota 2</th>
                <th>Email Anggota 2</th>
                <th>KTP Anggota 2</th>
                <th>Payment</th>
                <th>Jawaban</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->username}}</td>
                <td>{{$d->password}}</td>
                <td>{{$d->sekolah}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->ktp}}</td>
                <td>{{$d->name1}}</td>
                <td>{{$d->email1}}</td>
                <td>{{$d->ktp1}}</td>
                <td>{{$d->name2}}</td>
                <td>{{$d->email2}}</td>
                <td>{{$d->ktp2}}</td>
                @if($d->paymenyt == null)
                <td>Did not upload</td>
                @else
                <td><img width="200" height="150" src="images/{{$d->paymenyt}}" alt=""></td>
                @endif
                @if($d->jawaban == null)
                <td>null</td>
                @else 
                <td><a href="jawaban/{{$d->jawaban}}">download</a></td>
                @endif
                <td><a href="{{url('admin/'.$d->id.'/edit')}}">Edit</a> | <a href="{{url('admin/users/'.$d->id.'/delete')}}">Delete</a></td>
            </tr> 
            @endforeach
        </tbody>
    </table>
    
</body>
</html>