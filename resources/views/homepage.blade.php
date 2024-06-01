<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>UCA-University | Accueil</title>
  <link rel="shortcut icon" href="https://uca.ma:443/public/website/theme-3/img/favicon.png">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="fa-thin fa-envelope"></span>
               +212 576 576 888</a>
              
              <span class="divider">|</span>
              <a href="https://gmail.com"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
              </svg> ucateam@uca.ma</a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->
  </header>

  @if (session()->has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
      </div>
  @endif

  <div id="homep" class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/OIG2.jpeg);">
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="#" style="color: white;"><span class="text-primary">UCA</span>-University</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                {{-- <a class="btn btn-primary ml-lg-3" href="#">Connexion</a> --}}
                @if (Route::has('login'))
                              {{-- <nav class="-mx-3 flex flex-1 justify-end"> --}}
                                  @auth
                                      <a
                                          href="{{ route('dashboard') }}" class="btn btn-primary ml-lg-3"
                                          {{-- class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]" --}}
                                      >
                                          Dashboard
                                      </a>
                                  @else
                                      <a
                                          href="{{ route('login') }}" class="btn btn-primary ml-lg-3"
                                          {{-- class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]" --}}
                                      >
                                          Se connecter
                                      </a>
  
                                      @if (Route::has('register'))
                                          <a
                                              href="{{ route('register') }}" class="btn btn-primary ml-lg-3"
                                              {{-- class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]" --}}
                                          >
                                              S'inscrire
                                          </a>
                                      @endif
                                  @endauth
                              {{-- </nav> --}}
                          @endif
              </li>
            </ul>
          </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
    <div class="hero-section">
      <div class="container text-center wow zoomIn" style="margin-bottom: 50px;">
        {{-- <span class="subhead"></span> --}}
        <h1 class="display-4">Bienvenue sur votre espace Candidat.</h1>
        <a href="{{route('register')}}" class="btn btn-primary">S'inscrire</a>
      </div>
    </div>
  </div>

  <footer id="contact" class="page-footer">
    <div class="container" >
      <hr>
      <p id="copyright">Copyright &copy; 2024 <a href="#homep">UCA-University.</a> Tous les droits sont réservés</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>