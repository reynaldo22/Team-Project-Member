<!DOCTYPE html>
<html>
 <head>
  <title>Soal Business Concept</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hackathon</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('/')}}">Home</a></li>
      <li class="active"><a href="{{url('/home')}}">Competition</a></li>
      <li><a href="{{url('/home/pay')}}">Payment</a></li>
    </ul>
  </div>
</nav>

<div class="container">
@foreach($soalb as $s)
  <h1 align="center">Download <a href="/soal/{{$s->path}}" download>here</a></h1>
@endforeach
</div>

 </body>
</html>