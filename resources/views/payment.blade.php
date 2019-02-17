<!doctype html>
<html lang="en">
   <head>
      <!--  meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <!--  Our CSS -->
      <link rel="stylesheet" type="text/css" href="../css/payment.css">
      <title>Payment</title>
   </head>
   <body>
      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
         <img class="navbar-brand" width="200" height= "100" src="../images/binus-logo-png.png">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item navigation">
                  <a class="nav-link" href="{{url('/admin')}}">Admin <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item navigation">
                  <a class="nav-link" href="{{url('/admin/role')}}">Role</a>
               </li>
               <li class="nav-item navigation">
                  <a class="nav-link" href="{{url('/admin/payment')}}">Payment</a>
               </li>
               <li class="nav-item navigation">
                  <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" method="post" style="display:none;" action="{{route('logout')}}">@csrf</form>
               </li>
            </ul>
         </div>
      </nav>

      
      <div class="container payment">
         <h1 class="mt-md-5 ml-md-5 mb-md-5">Team Payment</h1>
         <table class="table table-striped">
           <tbody>
               @foreach($users as $user)
              <tr>
                 <th scope="row">{{$user->id}}</th>
                 <td>{{$user->name}}</td></td>
                 @if($user->paymenyt == NULL)
                 <td>User did not upload</td>
                 @else
                 <td><a href="../images/{{$user->paymenyt}}" download>Download</a></td> 
                 @endif
                 <td>
                 @if($user->verified == 1)
                 <span class="shadow-lg checkbox-green verify">Verified</span>
                 @else
                 <form action="{{url('/admin/'.$user->id.'/verifPayment')}}" method="post">
                    @csrf
                    <input type="hidden" id="verified" name="verified" value="1">
                    <input class="shadow-lg checkbox-white verify" type="submit" value="Verificate">
                  </form>
                  @endif
                 </td>
              </tr>
              @endforeach
           </tbody>
         </table>
      </div>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../js/jquery-3.3.1.slim.min.js"></script>
      <script src="../https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
   </body>
</html>
