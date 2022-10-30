@php
    $titleContent = "Simulation en ligne";
    $pagetitle = "Simulation en ligne";
    $translatePage = route('actionRecrutement');
@endphp
@extends('masterAr')
@section('section-content')
    @section('translate')
    <li style="font-family: Open Sans, sans-serif !important; "><a href="{{ $translatePage }}"><b>français</b> </a></li>
    @endsection
  <main id="main">
    <div class="modal fade" id="popup_condition" tabindex="-1" aria-labelledby="readmoreLabel" aria-hidden="true">
        <div class="modal-ml modal-dialog modal-dialog-centered ">
          <div class="modal-content">
            <div class="modal-body">
                <div class="row content">
                    <div class="alert alert-warning alertPopup cairo-arabic-center" >
                        <p class="text-center"><i class="bi bi-exclamation-triangle" style="color: ORANGE !important; font-size: 30px !important;"></i></p>
                        <p class="text-center" style="color: black !important;"><b>يجب على صاحب العمل تقديم وثيقة تثبت تسجيل طالب العمل، الذي تم توظيفه، في وكالات التنصيب وفقاً للتشريع الساري المفعول </b></p>
                    </div>

                  </div>
                  <div class="text-center" >
                    <button type="button" id="close" class="btn btn-primary" data-dismiss="modal" ><i class="bi bi-check2-circle"></i></button>
                  </div>
            </div>

          </div>
        </div>
    </div>
    <!-- ======= Breadcrumbs ======= -->
    <section class="">

    </section><!-- End Breadcrumbs -->

    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="icon-boxes flex-column">
                        <div class="registration-form">
                            <form action="{{ route('resultatRecrutementAr') }}" method="GET" name="contact-form" id="contact-form3">
                                @csrf
                                <div class="form-icon" style="transform: rotateY(180deg);">
                                    <span><i class="bi bi-question"></i></span>
                                </div>

                                    <div class="card-body cairo-arabic-right">
                                        
                                        <div class="form-group app-label">
                                            <div class="form-button">
                                            <label class="text-muted" style="padding-bottom: 8px;"><b>السؤال 01 :</b> إختر ولاية التشغيل </label>

                                                <select class="form-control item" name="cod_wilaya">
                                                    @foreach ($wilayas as $wilaya)
                                                        <option value="{{ $wilaya->cod_wilaya }}">({{ $wilaya->cod_wilaya }}) {{ $wilaya->des_ar }} </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('cod_wilaya'))
                                                    <p class="text-danger"><b>يرجى اختيار ولايتك</b></p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group app-label check-radio">
                                            <label class="text-muted" ><b> السؤال 02 : </b> هل يتعلق الأمر بتشغيل طالب عمل مبتدئ  ؟</label>
                                            <div class="" style="padding-top: 8px;">
                                                <input class="" type="radio" name="primo_demandeur" id="demandeur_oui" value="1" {{ old("primo_demandeur") == '1' ? 'checked' : '' }}>
                                                <label class="" for="demandeur_oui"> نعم  </label>
                                            </div>
                                            <div class="">
                                                <input class="" type="radio" name="primo_demandeur" id="demandeur_non" value="0" {{ old("primo_demandeur") == '0' ? 'checked' : '' }}>
                                                <label class="" for="demandeur_non" > لا </label>
                                            </div>
                                            @if ($errors->has('primo_demandeur'))
                                                <p class="text-danger"><b>الرجاء تحديد إجابة</b></p>
                                            @endif
                                        </div>
                                        <br>
                                        <div class="form-group app-label">
                                            <label class="text-muted" style="padding-top: 20px;"><b>  السؤال 03 : </b> ما هو نوع عقد العمل ؟</label>
                                            <div class="" style="padding-top: 8px;">
                                                <input class="" type="radio" name="contrat" id="contrat_cdd" value="1" {{ old("contrat") == '1' ? 'checked' : '' }} data-bs-toggle="modal" data-bs-target="#popup_cdd">
                                                <label class="" for="contrat_cdd" > عقد عمل محدد المدة </label>
                                            </div>
                                            <div class="">
                                                <input class="" type="radio" name="contrat" id="contrat_cdi"  value="2" {{ old("contrat") == '2' ? 'checked' : '' }}>
                                                <label class="" for="contrat_cdi">عقد عمل غير محدد المدة </label>
                                            </div>
                                            @if ($errors->has('contrat'))
                                                <span class="help-inline text-danger"> <b>الرجاء اختيار نوع عقد العمل</b></span>
                                             @endif
                                        </div>
                                        <br>
                                        <div class="form-group app-label">
                                            <label class="text-muted" style="padding-bottom: 8px;"> <b>السؤال 04 : </b> يرجى إدخال مبلغ الراتب الشهري الخاضع لاشتراكات الضمان الاجتماعي</label>
                                            <input  name="montant" type="nomber" type="number" ondrop="return false;" onpaste="return false;"
                                            onkeypress="return event.charCode>=48 && event.charCode<=57" class="form-control item cairo-arabic-justify" value="{{ old('montant') }}" placeholder="مبلغ الراتب الشهري (دج)">
                                            @if ($errors->has('montant'))
                                                <p class="text-danger"><b>يرجى إدخال مبلغ الراتب الشهري الخاضع للاشتراك</b></p>
                                            @endif
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
                            <h4><b>تشغيل طالبي العمل</b></h4>
                        </div>
                        <img src="{{ asset('assets/images/3.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->


    <div class="modal fade" id="popup_cdd" tabindex="-1" aria-labelledby="readmoreLabel" aria-hidden="true">
        <div class="modal-ml modal-dialog modal-dialog-centered ">
          <div class="modal-content">

            <div class="modal-body">
                <div class="row content">
                    <div class="alert alert-info alertPopup cairo-arabic-center">
                        <p class="text-center"><b> المدة الدنيا للعقد المشترط للاستفادة من الامتيازات هي ستة (6) أشهر في قطاعات السياحة و الصناعات التقليدية و الثقافة و الفلاحة و في ورشات البناء و الأشغال العمومية و في شركات الخدمات و اثنا عشر (12) شهرًا للقطاعات الأخرى</b></p>
                    </div>

                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" style=""><i class="bi bi-check2-circle"></i></button>
                  </div>
            </div>

          </div>
        </div>
    </div>


  </main><!-- End #main -->

@endsection
@section('script')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
    $('#popup_condition').modal('show');
</script> 

@endsection


