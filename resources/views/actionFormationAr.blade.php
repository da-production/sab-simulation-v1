@php
    $titleContent = "Simulation en ligne";
    $pagetitle = "Simulation en ligne";
    $translatePage = route('actionFormation');
@endphp
@extends('masterAr')
@section('section-content')
    @section('translate')
        <li style="font-family: Open Sans, sans-serif !important; "><a href="{{ $translatePage }}"><b>français</b> </a></li>
    @endsection
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="">

    </section><!-- End Breadcrumbs -->

    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 ">
                    <div class="icon-boxes flex-column">
                        <div class="registration-form">
                            <form action="{{ route('resultatFormationAr') }}" method="GET" name="contact-form" id="contact-form3">
                                @csrf
                                <div class="form-icon" style="transform: rotateY(180deg);">
                                    <span><i class="bi bi-question"></i></span>
                                </div>
                                    <div class="card-body cairo-arabic-right">
                                        <div class="form-group app-label check-radio">
                                            <label class="text-muted"><b> السؤال 01 : </b> يرجى تحديد مدة التكوين ؟</label>
                                            <div style="padding-top: 8px;">
                                                <input class="" type="radio" name="duree_formation" id="duree_one" value="1" {{ old("duree_formation") == '1' ? 'checked' : '' }}>
                                                <label class="" for="duree_one" value="1"> فترة تكوين تمتد من خمسة عشر (15) يوماً إلى شهر واحد.</label>
                                            </div>
                                            <div class="">
                                                <input class="" type="radio" name="duree_formation" id="duree_two" value="2" {{ old("duree_formation") == '2' ? 'checked' : '' }}>
                                                <label class="" for="duree_two" > فترة تكوين أكبر من شهر واحد و أقل من أو تساوي شهرين (2). </label>
                                            </div>
                                            <div class="">
                                                <input class="" type="radio" name="duree_formation" id="duree_three" value="3" {{ old("duree_formation") == '3' ? 'checked' : '' }}>
                                                <label class="" for="duree_three" >فترة تكوين أكبر من شهرين (2).</label>
                                                <br>
                                            </div>
                                            @if ($errors->has('duree_formation'))
                                                <p class="text-danger"><b>يرجى تحديد مدة التكوين أو تحسين المستوى </b></p>
                                            @endif
                                        </div>

                                        <div class="form-group app-label">
                                            <label class="text-muted" style="padding-top: 25px; padding-bottom: 8px;"> <b> السؤال 02 :</b> يرجى إدخال مبلغ الراتب الشهري الخاضع لاشتراكات الضمان الاجتماعي</label>
                                            <input  name="montant" type="nomber" type="number" ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" class="form-control item cairo-arabic-justify" value="{{ old('montant') }}" placeholder="مبلغ الراتب الشهري (دج)">
                                            @if ($errors->has('montant'))
                                                <p class="text-danger"><b>يرجى إدخال مبلغ الراتب الشهري الخاضع للاشتراك</b></p>
                                            @endif
                                        </div>

                                        <div class="alert alert-warning">
                                            <p class="text-center"> <b>في حالة استفادة مجموعة من العمال من التكوين، أعد عملية المحاكاة لكل واحد منهم.</b></p>
                                        </div>

                                        <div class="text-center">
                                            <button id="btnSubmit" type="submit" role="button" class="btn btn-primary" ><i class="bi bi-calculator"></i></button>
                                        </div>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div><!-- End .content-->
                    <div class="content col-xl-5 d-flex flex-column justify-content-center">
                        <div class="section-title">
                            <h4><b>تكوين العمال أو تحسين مستواهم</b></h4>
                          </div>
                        <img src="{{ asset('assets/images/formation.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

@endsection
