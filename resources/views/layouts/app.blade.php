<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Stanquela</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-liberty-market.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
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
                    <a href="{{ route('welcome') }}" class="logo">
                        <img src="{{ asset('images/logo.png') }}" alt="cat">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>

                    @if(Auth::user())
                    <!-- ***** Dashboard option only if admin is logged in ***** -->
                        <li><a href="{{ route('addBlog') }}">Add blog</a></li>
                        <li><a href="{{ route('dashboard') }}">Dashboard ({{Auth::user()->name}})</a></li>
                    @endif
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
  <!-- ***** Header Area End ***** -->
   
  <body>
  

  <!-- ***** Main Content ***** -->

        @yield('content')

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © {{ date("Y") }} <a href="#">Stanquela</a>.
          &nbsp;&nbsp;
        </div>
        <div class="col-lg-12">
            <button class="fa fa-github" href="https://github.com/stanquela">
            <button class="fa fa-linkedin" href="https://www.linkedin.com/in/stanquela">
            <button class="fa fa-instagram" href="https://www.instagram.com/aleknats/">
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Core JavaScript-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Additional JavaScript-->
  <script src="{{ asset('js/isotope.min.js') }}"></script>
  <script src="{{ asset('js/owl-carousel.js') }}"></script>
  <script src="{{ asset('js/tabs.js') }}"></script>
  <script src="{{ asset('js/popup.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  </body>
</html>
