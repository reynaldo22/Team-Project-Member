<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
</head>
<body>
    <h1>Upload your payment</h1>
    <form action="{{url('home/payment')}}" method="post">
        @csrf
        Upload here: <input type="file" name="pay" id="pay"><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>