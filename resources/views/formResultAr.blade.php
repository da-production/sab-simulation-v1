@php
    $titleContent = "Simulation formation";
    $pagetitle = "Simulation enligne";
    
@endphp
@extends('masterAr')
@section('section-content')

<main id="main">
    <section id="services" class="services">
        <div class="container">
        </div>
    </section>

    <section  class="inner-page">
        <div class="container">
            <div class="registration-result">
                <div class="result-div">
                    <div class="card-body cairo-arabic-right">
                        <div class="section-title">
                            <h4>النتائج والحسابات</h4>
                        </div>
                        <h5 class="card-title"> حساب الامتيازات المتعلقة بالإعفاء من دفع مستحقات الاشتراك الإجمالي للضمان الاجتماعي :</h5>
                        <br>
                        <p class="text-right">  مبلغ الراتب الشهري الخاضع لاشتراكات الضمان الاجتماعي : <b> {{ $montant }} دج </b></p>
                        <table class="table table-sm table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="col" ></th>
                                    {{-- <th class="text-center" scope="col">Taux</th> --}}
                                    <th class="text-center">المبلغ (دج)</th>

                                </tr>
                                <tr class="">
                                    <th scope="row">المبلغ المستحق الدفع من قبل صاحب العمل</th>
                                    <td class="text-center">{{$quote_empl}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">مبلغ الإعفاء الشهري</th>
                                    <td class="text-center" >{{$quote_empl}}</td>
                                </tr>
                                {{-- <tr style="background-color: #b6effb">
                                    <th scope="row" >عدد أشهر الإعفاء</th>
                                    <td class="text-center">{{ $duree_formation }}</td>
                                </tr> --}}
                                <tr>
                                    <th scope="row">المبلغ الإجمالي للإعفاء</th>
                                    <td class="text-center" >{{ $total }} دج</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="alert alert-warning">
                                {{-- <p> <b> Message: </b> </p> --}}
                                <p class="text-center">وفقًا للمعلومات المقدمة، يمكنك الاستفادة من إعفاء إجمالي قدره  <b> {{ $total }} دج </b>الموافق لـ<b>
                                    @if($duree_formation =="1")شهر واحد
                                    @elseif($duree_formation =="2")شهرين
                                    @else ثلاثة أشهر
                                    @endif </b>من مستحقات اشتراك الضمان الاجتماعي </p>
                        </div>
                        <hr>
                        <div >
                            <a href="{{ route('actionRecrutementAr') }}" id="btnSubmit" type="submit" role="button"> تشغيل طالبي العمل</a>
                            <br>
                            <a href="{{ route('actionFormationAr') }}" id="btnSubmit" type="submit" role="button"> تكوين العمال أو تحسين مستواهم </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
