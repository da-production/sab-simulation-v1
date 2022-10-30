<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CNAC {{ "| " . $pagetitle ?? "|" }}</title>
  @php
      $titleContent = "Simulation en ligne";
      // $translatePage = route('accueilAr');
  @endphp
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/images/logoWithoutTitle.png') }}" rel="icon">
  <link href="{{ asset('assets/images/logoWithoutTitle.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" type="text/css">
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" >


  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      
      {{-- <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/images/logoWithoutTitle.png') }}" alt="" width="30" height="24">
        </a>
      </div> --}}
      
      <h1 class="logo"><a  href="{{ route('accueil') }}"> <img src="{{ asset('assets/images/logoWithoutTitle.png') }}" alt=""> Simulation en Ligne</a></h1>


       <nav id="navbar" class="navbar">
        <ul>
           <li><a class="nav-link scrollto" href="{{ route('accueil') }}">Accueil</a></li>
           <li class="dropdown"><a href="#services" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mesures d'encouragement <span class="caret"></span></a>
            <ul>
              <li><a href="{{ route('actionRecrutement') }}">Action de Recrutement</a></li>
              <li><a href="{{ route('actionFormation') }}">Action de Formation ou Perfectionnement</a></li>
            </ul>
          </li> 
          {{-- <li ><a href="{{ $translatePage }}"><span class="flag-icon flag-icon-dz"></a></li> --}}
            @yield('translate')
            
        </ul>
        {{-- <div class="">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink78" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</a>
          <ul class="dropdown-menu" > 
              <a class="dropdown-item" href="{{ route('accueil') }}"><span class="flag-icon flag-icon-fr"></span> Français</a> 
              <a class="dropdown-item" href=""><span class="flag-icon flag-icon-de"></span> Arabe</a> 
          </ul>
      </div>      --}}
      <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      {{-- <nav id="navbar" class="navbar navbar-expand-lg"> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler77" aria-controls="" aria-expanded="false" aria-label="Toggle navigation"> 
            <div class="dropdown" style="display: inline-block;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink78" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink78"> 
                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-us"></span> English</a> 
                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr"></span> Français</a> 
                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-de"></span> Deutsch</a> 
                </div>
            </div>
            <span class="navbar-toggler-icon"></span> 
        </button>             
        <div class="collapse navbar-collapse" id="navbarToggler77"> 
          <ul>
            <li><a class="nav-link scrollto" href="{{ route('accueil') }}">Accueil</a></li>
            <li class="dropdown"><a href="#services" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mesures d'encouragement <span class="caret"></span></a>
             <ul>
               <li><a href="{{ route('actionRecrutement') }}">Action de Recrutement</a></li>
               <li><a href="{{ route('actionFormation') }}">Action de Formation ou Perfectionnement</a></li>
             </ul>
           </li>
         </ul>              
            <div class="d-lg-block d-none dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink78" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink78"> 
                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-us"></span> English</a> 
                    <a class="dropdown-item" href=""><span class="flag-icon flag-icon-fr"></span> Français</a> 
                    <a class="dropdown-item" href=""><span class="flag-icon flag-icon-de"></span> Deutsch</a> 
                </div>
            </div>               
        </div>             
    </nav> --}}





    </div>
  </header><!-- End Header -->

  @yield('section-content')



  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>CNAC 2022</span></strong>. Tous les droits réservés
        </div>
         <div class="credits">
          Designed by <a href="">DESI Team</a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  @yield('script')
</body>

</html>
