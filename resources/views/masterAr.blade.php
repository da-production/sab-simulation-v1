<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CNAC {{ "| " . $pagetitle ?? "|" }}</title>
  @php
      $titleContent = "Simulation en ligne";
      
  @endphp
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/images/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/images/logo.png') }}" rel="apple-touch-icon">

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

      <nav id="navbar" class="navbar">
        <ul class="cairo-arabic-right">
           <li><a class="nav-link scrollto" href="{{ route('accueilAr') }}"><b>الصفحة الرئيسية</b></a></li>
           <li class="dropdown"><a href="#services" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b>  التدابير التشجيعية </b><span class="caret"></span></a>
                <ul>
                    <li><a href="{{ route('actionRecrutementAr') }}"><b>تشغيل طالبي العمل</b></a></li>
                    <li><a href="{{ route('actionFormationAr') }}"><b>تكوين العمال أو تحسين مستواهم</b></a></li>
                </ul>
            </li>
            @yield('translate')
            {{-- <li><a href="{{ $translatePage }}"><span class="flag-icon flag-icon-fr"></a> </li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <h1 class="logo"><a href="{{ route('accueilAr') }}">المحاكاة </a> </h1>
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
        {{-- <div class="credits">
          Designed by <a href="">DESI Team</a>
        </div> --}}
      </div>

    </div>
  </footer><!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="right: 1300px;"><i class="bi bi-arrow-up-short"></i></a>
  

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
