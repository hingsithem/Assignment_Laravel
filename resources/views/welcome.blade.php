<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty System | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span>my new version</span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="{{asset('assets/images/nmu.png')}}" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="{{Request::routeIs('home') ? 'active' : ''}}">
                            <a href="{{route('home')}}" class="active">Home</a>
                        </li>
                        <li class="{{Request::routeIs('explaore') ? 'active' : ''}}">
                            <a href="{{route('explaore')}}">Explaore</a>
                        </li>
                        <li class="{{Request::routeIs('details') ? 'active' : ''}}">
                          <a href="{{route('details')}}">Item Details</a>
                        </li>
                        <li class="{{Request::routeIs('author') ? 'active' : ''}}">
                          <a href="{{route('author')}}">Author</a>
                        </li>
                        <li class="{{Request::routeIs('create') ? 'active' : ''}}">
                          <a href="{{route('create')}}">Create Yours</a>
                        </li>
                        <!-- <li class="{{Request::routeIs('login') ? 'active' : ''}}">
                          <a href="{{route('login')}}">Login</a>
                        </li>
                        <li class="{{Request::routeIs('register') ? 'active' : ''}}">
                          <a href="{{route('register')}}">Register</a>
                        </li> -->
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>

    <div class="container-fluid">
        <div class="row">
            <div class="{{Request::routeIs('home') ? 'active' : ''}}">
                <a href="{{route('home')}}" class="active"></a>
            </div>
             <div class="{{Request::routeIs('explaore') ? 'active' : ''}}">
                <a href="{{route('explaore')}}" class="active"></a>
            </div>
            <div class="{{Request::routeIs('details') ? 'active' : ''}}">
                <a href="{{route('details')}}" class="active"></a>
            </div>
            <div class="{{Request::routeIs('author') ? 'active' : ''}}">
                <a href="{{route('author')}}" class="active"></a>
            </div>
            <div class="{{Request::routeIs('create') ? 'active' : ''}}">
                <a href="{{route('create')}}" class="active"></a>
            </div>
            <!-- <div class="{{Request::routeIs('login') ? 'active' : ''}}">
                <a href="{{route('login')}}" class="active"></a>
            </div>
            <div class="{{Request::routeIs('register') ? 'active' : ''}}">
                <a href="{{route('register')}}" class="active"></a>
            </div> -->
            @yield('content')
        </div>
    </div>

    <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024 <a target="_blank" href="https://www.youtube.com/channel/UCeNYDojo4nU2sbHz1sMsBXw">Web Tech Knowledge
          &nbsp;&nbsp;
          Designed by <a title="HTML CSS Templates" rel="sponsored" href="https://www.youtube.com/channel/UCeNYDojo4nU2sbHz1sMsBXw" target="_blank">Web Tech Knowledge</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>