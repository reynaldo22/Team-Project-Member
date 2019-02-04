<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--  Our CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Hackathon</title>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <img class="navbar-brand" width="200" height="100" src="images/binus-logo-png.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item navigation">
                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item navigation">
                    <a class="nav-link" href="#">Competition</a>
                </li>
                <li class="nav-item navigation">
                    <a class="nav-link" href="#">Join Us</a>
                </li>
                @if (Route::has('login')) @auth
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
                @else
                <li class="nav-item navigation">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item navigation">
                    <a class="nav-link" href="{{route('register')}}">Register</a>
                </li>
                @endif @endauth @endif
            </ul>
        </div>
    </nav>

    <div class="landing">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="images/people-hold-business.png" class="img-fluid home-image mt-md-5">
                </div>

                <div class="col-md-2">
                </div>

                <div class="col-md-5 landing-text">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
                </div>
            </div>
        </div>
    </div>

    <div class="competition pb-md-3">
        <div class="container">
            <div class="row">
                <div class="col-md-5 pt-md-3 ">
                    <img src="images/computer.png" class="img-fluid">
                </div>
                <div class="col-md-2 mid-text">
                    <div class="blue"></div>
                    <h1>Competition</h1>
                    <div class="brown"></div>
                </div>
                <div class="col-md-5 business-idea">
                    <img src="images/business-idea.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="timeline-background">
        <div class="container timeline pb-md-3">
            <h1 class="pt-md-5">Time Line</h1>
            <div class="timeline-content">
                <p id="text-container-timeline">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce viverra augue id turpis commodo bibendum. Nulla leo erat, imperdiet molestie eros id, bibendum aliquet dui. Nullam lobortis felis a tempus faucibus. Morbi vel mauris facilisis est cursus luctus
                    vitae fermentum justo. Aliquam ac varius diam. Etiam semper metus at nunc posuere vestibulum ut nec elit. Nam consequat sodales odio, id commodo erat iaculis at. Etiam eu tortor vel felis viverra ultrices. Suspendisse rutrum lobortis
                    enim, non eleifend dui mattis nec. Quisque vehicula risus eget tristique maximus. Maecenas cursus vulputate tincidunt.a
                </p>
                <div class="row">
                    <div class="col-md-12 timeline-block">
                        <ul class="ml-md-5">
                            <li class="ml-md-4 bullet bullet-register" id="register"></li>
                            <li class="bullet bullet-register" id="selection"></li>
                            <li class="bullet bullet-register" id="gameday"></li>
                            <li class="bullet bullet-register" id="judgement"></li>
                            <li class="bullet bullet-register" id="calmday"></li>
                            <li class="bullet  bullet-register last" id="announcement"></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-md-4 ml-md-1">
                    <div class="ml-md-5 col-md-12">
                        <span class="text-timeline text-position-timeline">Register</span>
                        <span class="text-timeline text-position-timeline">Selection</span>
                        <span class="text-timeline text-position-timeline">Game Day</span>
                        <span class="text-timeline text-position-timeline">Judgement</span>
                        <span class="text-timeline text-position-timeline">Calm Day</span>
                        <span class="text-timeline">Anouncement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="join-us pt-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="images/rocket-launch.png" class="img-fluid joinus-image">
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-5 joinus-text-container">
                    <h1>Join Us At!</h1>
                    <span class="joinus-text">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </span>
                </div>
            </div>
        </div>
    </div>

    <div class="supporter">
        <div class="upper-container">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/binus-logo-png.png" class="img-fluid supporter-binus-img">
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="row pt-md-5">
                        <div class="offset-md-4 col-md-2">
                            <img src="images/facebook.png" class="supporter-img">
                        </div>
                        <div class="col-md-2">
                            <img src="images/instagram.png" class="supporter-img">
                        </div>
                        <div class="col-md-2">
                            <img src="images/twitter.png" class="supporter-img">
                        </div>
                        <div class="col-md-2">
                            <img src="images/youtube.png" class="supporter-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-md-3">
            <div class="col-md-2">
                <h4>Sponsors</h4>
            </div>

            <div class="offset-md-6 col-md-2">
                <h4>Supported By</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="images/gojek.png">
                <img src="images/bukalapak.png" class="pt-md-4" width="330">
                <img src="images/microsoft.png" height="130" width="330">
                <img src="images/cloudflare.png" height="100">
            </div>
            <div class="offset-md-4 col-md-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/bekraf.png" height="150">
                    </div>
                    <div class="col-md-6">
                        <img src="images/kemkominfo.png" height="150">
                    </div>
                </div>
                <h4 class="mt-md-3">Media Partner</h4>
                <div class="row">
                    <div class="col">
                        <img src="images/dailysocial.png" height="55">
                    </div>

                    <div class="col">
                        <img src="images/kompas.png" width="200" class="pt-md-1">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="images/codepolitan.png" width="250">
                    </div>

                    <div class="col">
                        <img src="images/linetoday.png" width="100">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="images/dicoding.png" width="230">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div>
            <div class="row">
                <div class="col-md-2">
                    <img src="images/binus-logo-png.png" width="130">
                </div>
                <div class="col-md-4 footer-text">
                    © Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
                <div class="footer-text offset-md-5 col-md-1" style="text-decoration: underline;">
                    contacts
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/time-line.js"></script>
</body>

</html>