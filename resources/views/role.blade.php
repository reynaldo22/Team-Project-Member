<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Role</title>
</head>
<body>
    <h1>Users with roles</h1>

    <form action="{{url('admin/role/add-role')}}" method="post">
        @csrf
        <label for="user_id">User</label>
        <select name="user_id" id="">
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br>
        <label for="role_id">Roles</label>
        <select name="role_id" id="">
            @foreach($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Submit">
    </form>

    @foreach($users as $user)
    <h2>{{$user->name}}</h2>
    <hr>
    <h3>Email: {{$user->email}}</h3>
    <hr>
    <p>Roles</p>
    <ul>
        @foreach($user->roles as $role) 
        <li>{{$role->name}}</li>
        <a href="{{url('admin/role/'.$role->id.'/delete-role')}}">Delete</a>  
        @endforeach
    </ul>
    <hr>
    @endforeach

    <a href="{{url('admin')}}">Back to dashboard</a>

</body>
</html>