<!DOCTYPE html>
<html lang="pt_PT">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('page-title', 'HMIAM') | Hospital Materno Infantil Azancot de Menezes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @yield('meta')


  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom_style.css') }}" rel="stylesheet">
  @stack('css')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('img/logo.png') }}" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}#hero">Home</a></li>
          <li><a href="{{ route('home') }}#about">Sobre</a></li>
          <!-- <li><a href="{{ route('home') }}#menu">Menu</a></li> -->
          <li><a href="{{ route('home') }}#news">Publicações</a></li>
          <li><a href="{{ route('home') }}#chefs">Directores</a></li>
          <li><a href="{{ route('home') }}#gallery">Galeria</a></li>
          <li class="dropdown"><a href="#"><span>Serviços</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('servico.imagiologia') }}">Imagiologia</a></li>
              <li><a href="{{ route('servico.pediatria') }}">Pediatria</a></li>
              <li><a href="{{ route('servico.uci-neonatal') }}">UCI Neonatal</a></li>
              <li><a href="{{ route('servico.uci-adulto') }}">UCI Adulto</a></li>
              <li><a href="#">Urgência</a></li>
              <li><a href="#">UCI Adulto</a></li>
              <li><a href="#">Bloco Operatório</a></li>
              <li><a href="#">Internamento</a></li>
              <li><a href="#">Ginecologia & Obst.</a></li>
              <li><a href="#">Laboratório</a></li>
              <li><a href="#">Unidade de Parto</a></li>
              <li><a href="#">Terapia Respiratória</a></li>
              <li><a href="#">Consultas Externas</a></li>
              <li><a href="#">Morgue</a></li>
              <li><a href="#">Endoscopia/Brancoscopia</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contactos</a></li>
          @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          @endguest
          @auth
          <li class="dropdown"><a href="#"><span>{{ ucwords(Auth::user()->name) }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('articles.create') }}">Nova Publicação</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
              <li>
              <a class="dropdown-item d-flex align-items-center" onclick="event.preventDefault();document.getElementById('logout-form').submit()" href="{{ route('logout') }}">
                <span>Sign Out</span>
                <i class="bi bi-box-arrow-right"></i>
              </a>
              </li>
            </ul>
          </li>
          @endauth
        </ul>
      </nav><!-- .navbar -->

      <!-- <a class="btn-book-a-table" href="#book-a-table">Book a Table</a> -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  @yield('hero')
  

  <main id="main">
    @yield('main')   
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Endereço</h4>
            <p>
              Rua Lateral ao Condomínio Austin, s/n  - Camama<br>
              Luanda - Angola<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contactos</h4>
            <p>
              <strong>Tel:</strong> +244 999 999 999<br>
              <strong>Email:</strong> geral@hmiam.gov.ao<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Horários</h4>
            <p>
              <strong>Banco de Urgência: </strong> - 24H/24H<br>
              <strong>Visitas: </strong> - 16H à 17H
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Siga-nos</h4>
          <div class="social-links d-flex">
            <a href="https://twitter.com/_hmiam" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://facebook.com/hmiam" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://twitter.com/_hmiam" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>HMIAM</span>  - <?php echo date("Y"); ?>
</strong>.
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
  @stack('js')
</body>

</html>