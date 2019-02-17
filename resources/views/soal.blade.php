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
        <li><a href="{{url('/admin')}}">Home</a></li>
        <li><a href="{{url('/admin/role')}}">Role</a></li>
        <li><a href="{{url('/admin/payment')}}">Payment</a></li>
        <li><a href="{{url('/admin/soal')}}">Soal</a></li>
    </ul>

    <h1>Tambah soal</h1>

    @if (count($errors) > 0)
     Validation Error<br>
    <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
     @endif

    <form action="{{url('/admin/soal')}}" method="post" enctype="multipart/form-data">
        @csrf
        Id soal: <input type="number" name="id_soal" id="id_soal"><br>
        soal : <input type="file" name="path" id="path"><br>
        <input type="submit" value="Add soal"><br>
    </form>

    <h1>Soal</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Id soal</th>
                <th>Path</th>
                <th>Soal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($soal as $s)
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->id_soal}}</td>
                <td>{{$s->path}}</td>
                <td><a href="soal/{{$s->path}}">Download</a></td> 
                <td><a href="{{url('admin/soal/'.$s->id.'/edit')}}">Edit</a> | <a href="{{url('admin/soal/'.$s->id.'/delete')}}">Delete</a></td>
            </tr> 
            @endforeach
        </tbody>
    </table>
    
</body>
</html>