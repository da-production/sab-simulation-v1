@php
    $titleContent = "Simulation en ligne";
    $pagetitle = "Simulation en ligne";
    $translatePage = route('accueilAr');
@endphp
@extends('master')
@section('section-content')
  <!-- ======= Hero Section ======= -->
  @section('translate')
    <li ><a href="{{ $translatePage }}"><span class="flag-icon flag-icon-dz"></a></li>
  @endsection
  <section id="hero" class="d-flex align-items-center" style="padding: 80px 0 !important;">

    <div class="container">
      <div class="row">

        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <br>
            <br>
            <br>
          <h4 class="sab-justify" style="font-weight: 600;"> Simulation du calcul des avantages consentis aux employeurs dans le cadre des mesures d'encouragement et d'appui à la promotion de l'emploi</h4>
          <br>
          <div class="alert alert-info">
            <p> <b>Avant de procéder à la simulation, veuillez consulter les conditions d’accès.</b> </p>
            <div class="mt-3">
              <a href="" class="btn-get-quote" data-bs-toggle="modal" data-bs-target="#readmore">Conditions</a> 
            </div>
          </div>
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{ asset('assets/images/hero-img.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
<!-- Modal -->
<div class="modal fade" id="readmore" tabindex="-1" aria-labelledby="readmoreLabel" aria-hidden="true">
    <div class="modal-xl modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
            <h3 class='col-12 modal-title text-center' style="color: #4466d8" id="readmoreLabel"><b> Conditions</b></h5>

        </div>
        <div class="modal-body">
              <div class="row content">
                <div class="section-title ">
                  <div class="alert alert-info">
                    <p> <b>Ci-dessous les conditions générales pour bénéficier des mesures incitatives de la promotion de l'emploi par l'allègement des charges sociales au profit des employeurs.</b> </p>
                  </div>
                </div>
                <div class="">
                  <ul>
                    <li class="sab-justify"> Ces mesures s'appliquent aux employeurs du secteur économique. Mais peuvent être étendues aux employeurs d'autres secteurs à l'exclusion de ceux exerçant des activités d'exploration et de production d'hydrocarbures;</li>
                    <li class="sab-justify"> Ces mesures s'appliquent aux employeurs qui sont à jour de leur cotisation de sécurité sociale;</li>
                    <li class="sab-justify"> Ces mesures ne s'appliquent pas aux employeurs ayant procédé à une compression d'effectif illégale;</li>
                    <li class="sab-justify"> Ces mesures ne s'appliquent pas dans le cas de recrutement d'étrangers ne résidant pas de façon effective, habituelle et permanente au sens de la législation en vigueur.</li>
                  </ul>
                </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="bi bi-x"></i></button>
        </div>
      </div>
    </div>
</div>
  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services" style="padding: 0 0; !important;">
        
      <div class="row">
        <div class="content col-xl-5 d-flex flex-column justify-content-center" style="padding-left: 180px;">
          <img src="{{ asset('assets/images/services.png') }}" class="img-fluid" alt="" >
        </div>
        <div class="col-xl-7">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            
            <div class="row" style="padding-right: 100px; padding-bottom: 20px;">
              <div class="section-title" style="padding-bottom: 0 !important;">
                <h4 style="padding-bottom: 0 !important;"><b>Pour quel type d'actions voulez-vous bénéficier de ces mesures?</b></h4>
              </div>
              <div class="col-sm-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box iconbox-orange">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.612840516155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                    </svg>
                    <i class="bx bx-layer"></i>
                  </div>
                  <h5><a href="{{ route('actionRecrutement') }}"><b>Action de Recrutement</b></a></h5>
                  <p><b style="color: white;">-----------+++++++++-----------++++++++++++++++++++++++++++++++++--------</b></p>
                </div>
              </div>

              <div class="col-sm-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box iconbox-teal ">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                    </svg>
                    <i class="bx bx-layer"></i>
                  </div>
                  <h5><a href="{{ route('actionFormation') }}"><b>Action de Formation ou de Perfectionnement</b></a></h5>
                  <p></p>
                </div>
              </div>

            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section>End Frequently Asked Questions Section -->

  </main><!-- End #main -->

@endsection
