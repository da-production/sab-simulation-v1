@php
    $titleContent = "Simulation en ligne";
    $pagetitle = "Simulation en ligne";
    $translatePage = route('accueil');
@endphp
@extends('masterAr')
@section('section-content')
  <!-- ======= Hero Section ======= -->
  @section('translate')
    <li style="font-family: Open Sans, sans-serif !important; "><a href="{{ $translatePage }}"><b>français</b> </a></li>
    {{-- <span class="flag-icon flag-icon-fr"> --}}
  @endsection
   <section id="" class="">
  </section><!-- End Hero --> 
<!-- Modal -->

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="section-title">
          
          <div class="mt-3">
          </div>
          <section id="hero" class="">
            <h4 class="accueil-title cairo-arabic-center"> محاكاة احتساب الامتيازات الممنوحة لفائدة المستخدمين في إطار التدابير التشجيعية لدعم وترقية التشغيل
             </h4>
             {{-- محاكاة الامتيازات الممنوحة لاصحاب العمل لدعم وترقية التشغيل --}}
             <div class="modal-body cairo-arabic-center">
              <div class="row content">
                  <div class="alert alert-info alertPopup">
                      <p class="text-center"><b>قبل الشروع في عملية المحاكاة، يرجى الاطلاع على شروط القبول.</b></p>
                      <div class="text-center">
                        <button type="button" class="btn btn-primary" class="btn-get-quote" data-bs-toggle="modal" data-bs-target="#readmore"><i class="bi bi-hand-index-thumb"> </i></button>  
                        {{-- bi bi-hand-index  bi bi-door-open--}}
                      </div>
                    </div>
                  
                </div>
          </div>
            {{-- <div class="mt-3 cairo-arabic-center">
              <a href="" class="btn-get-quote" data-bs-toggle="modal" data-bs-target="#readmore"><b>الشروط</b></a>
              {{-- <a href="#services" class="btn-get-quote" ><b>التدابير التشجيعية</b></a> --}}
            {{-- </div> --}}
          </section>
        </div>
      </section>
            
      <section id="services" class="services" style="padding: 0 0; !important;">
        <div class="row" style="padding-left: 120px;">
          
          <div class="col-xl-7">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row" style="padding-top: 50px;  padding-bottom: 20px;" >
                <div class="section-title" style="padding-bottom: 0 !important;">
                  <h4 style="padding-bottom: 0 !important;"><b>ما نوع الإجراء الذي تريد على أساسه الاستفادة من هذه الامتيازات؟</b></h4>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box iconbox-teal ">
                    <div class="icon">
                      <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                        <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                      </svg>
                      <i class="bx bx-layer"></i>
                    </div>
                    <h4 class="cairo-arabic-center"><a  href="{{ route('actionFormationAr') }}">تكوين العمال أو تحسين مستواهم</a></h4>
                    <p><b style="color: white;">-----------+++++++++-----------++++++++++++++++++++++++++++++++++--------</b></p>
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box iconbox-orange">
                    <div class="icon">
                      <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                        <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.612840516155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                      </svg>
                      <i class="bx bx-layer"></i>
                    </div>
                    <h4 class="cairo-arabic-center"><a href="{{ route('actionRecrutementAr') }}">تشغيل طالبي العمل</a></h4>
                    <p><b style="color: white;">-----------+++++++++-----------++++++++++++++++++++++++++++++++++--------</b></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
          <div class="content col-xl-5 d-flex flex-column justify-content-center">
            <img src="{{ asset('assets/images/2.png') }}" class="img-fluid" alt="" style="padding-right: 120px;">
          </div>



          </div>
          
        </div>

      </div>
    </section><!-- End Services Section -->


  </main><!-- End #main -->


<!-- Modal -->
<div class="modal fade" id="readmore" tabindex="-1" aria-labelledby="readmoreLabel" aria-hidden="true">
    <div class="modal-xl modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
            <h3 class='col-12 modal-title text-center' style="color: #5691ff" id="readmoreLabel"><b> الشروط</b></h5>

        </div>
        <div class="modal-body">
              <div class="row content">
                <div class="section-title ">
                  <div class="alert alert-info">
                    <p class="cairo-arabic-center"><b>فيما يلي الشروط العامة للإستفادة من الامتيازات الممنوحة لدعم وترقية التشغيل عن طريق تخفيف الأعباء الاجتماعية لفائدة المستخدمين</b> </p>
                  </div>
                </div>
                <div class="">
                  <ul class="cairo-arabic-justify">
                    <li class="cairo-arabic-justify">تطبق أحكام هذا القانون على المستخدم في القطاع الاقتصادي. ويمكن تمديد هذه الأحكام عن طريق التنظيم إلى المستخدم في قطاعات أخرى بإستثناء المستخدمين العاملين في  نشاطات التنقيب والإنتاج في ميدان المحروقات ؛</li>
                    <li class="cairo-arabic-justify">تطبق هذه التدابير على أصحاب العمل المستوفون لاشتراكات الضمان الاجتماعي ؛ </li>
                    <li class="cairo-arabic-justify">لا تنطبق هذه التدابير على أصحاب العمل الذين قاموا بتقليص عدد عمالهم بصورة غير قانونية ؛ </li>
                    <li class="cairo-arabic-justify">لا تطبق الامتيازات المنصوص عليها في هذا القانون في حالة تشغيل اجانب لا يقيمون بصفة فعلية و اعتيادية ودائمة بمفهوم التشريع الساري المفعول.</li>
                  </ul>
                </div>
              </div>
        </div>
        <div class="modal-footer cairo-arabic-center" >
          <button type="button" class="btn btn-primary"  data-bs-dismiss="modal"><i class="bi bi-x"></i></button>
        </div>
      </div>
    </div>
</div>
@endsection
