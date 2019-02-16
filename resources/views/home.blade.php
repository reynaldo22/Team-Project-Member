<!doctype html>
<html lang="en">
   <head>
      <!--  meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <!--  Our CSS -->
      <link href="{{ URL::asset('css/admin-dashboard.css') }}" rel="stylesheet">
      <title>Project</title>
   </head>
   <body>
      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
         <img class="navbar-brand" width="200" height= "100" src="images/binus-logo-png.png">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            @guest
               <li class="nav-item navigation">
                  <a class="nav-link" href="{{route('login')}}">Login</a>
               </li>
                @if (Route::has('register'))
               <li class="nav-item navigation">
                  <a class="nav-link" href="{{route('register')}}">Register</a>
               </li>
                @endif
            @else
            <li class="nav-item navigation">
                  <a class="nav-link" href="{{url('/')}}">Home</a>
               </li>
            <li class="nav-item navigation">
                  <a class="nav-link" href="#">Competetion <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item navigation">
                  <a class="nav-link" href="#">Team Search</a>
               </li>
               <li class="nav-item navigation">
                  <a class="nav-link" href="#">Time Line</a>
               </li>
               <li class="nav-item navigation">
                  <a class="nav-link" href="{{url('home/pay')}}">Payment</a>
               </li>

               <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/home') }}">
                        {{ __('Dashboard') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
            </ul>
         </div>
      </nav>

      <div class="competetion">
         <h1 class="pt-md-5">Competetion</h1>
         <div class="container container-competetion">
            <div class="row">
               <div class="col-md-5">
                  <img src="images/computer.png" class="img-fluid image-competition">
                   <div class="row">
                      <div class="col mt-md-2 pr-md-5">
                        <span class="text-competetion"><a href="{{url('home/soalHackathon')}}" style="text-decoration:none;">Hackathon</a></span>
                      </div>
                   </div>
               </div>
               <div class="col-md-2">
                  
               </div>
               <div class="col-md-5">
                   <img src="images/Business-concept.png" class="img-fluid image-competition">
                   <div class="row">
                      <div class="col mt-md-2">
                        <span class="text-competetion"><a href="{{url('home/soalBisnis')}}" style="text-decoration:none;">Business Concept</a></span>
                      </div>
                   </div>
               </div>
            </div>
         </div>
      </div>
      

      <footer>
         TPM Project ©
      </footer>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="js/time-line.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>

