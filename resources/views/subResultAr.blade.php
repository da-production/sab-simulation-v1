@php
    $titleContent = "Simulation subvention";
    $pagetitle = "Simulation en ligne";
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
                        <h5 class="card-title">حساب امتيازات التخفيض من قسط الاشتراك  في الضمان الاجتماعي:</h5>
                        <br>
                        <p class="text-right">مبلغ الراتب الشهري الخاضع لاشتراكات الضمان الاجتماعي : <b> {{ $montant }} دج </b></p>
                        <table class="table table-sm table-bordered ">
                            <tbody>
                              <tr>
                                <th scope="col" ></th>
                                {{-- <th class="text-center" scope="col">Taux</th> --}}
                                <th class="text-center">المبلغ (دج)</th>

                              </tr>
                              <tr>
                                <th scope="row">مبلغ الاشتراك المستحق الدفع من قبل صاحب العمل</th>
                                {{-- <td class="text-center"> {{  $taux_quote_empl * 100 }} %</td> --}}
                                <td class="text-center">{{$quote_empl}} </td>
                              </tr>

                                <th scope="row">المبلغ الإجمالي للتخفيضات الشهرية</th>
                                {{-- <td class="text-center">{{ $taux_abbat_total * 100 }} %</td> --}}
                                <td class="text-center"> {{ $abbat_total }} <i class="bi bi-info-circle-fill" style="color: #4466d8"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">مبلغ الاشتراك المستحق الدفع من قبل صاحب العمل بعد التخفيض الشهري</th>
                                <td  class="text-center">{{ $total }} </td>
                              </tr>
                            </tbody> 
                        </table>
                        <p> <i class="bi bi-info-circle-fill" style="color: #4466d8"></i> يشمل هذا المبلغ المقدار المستحق على عاتق الصندوق الوطني للتأمين عن البطالة وكذلك المقدار المستحق على عاتق الخزينة العمومية (الممنوحة بموجب قانون المالية). مع العلم أن تقديم الطلب للاستفادة من الامتيازات يتم على مستوى مصالح الصندوق الوطني للتأمينات الاجتماعية للعمال الأجراء.  </p>
                        <br>
                        @if ($contrat =='1')
                            <div class="alert alert-warning">
                                <p>وفقًا للمعلومات المقدمة، يمكنك الاستفادة من تخفيض شهري قدره <b>{{ $abbat_total }} دج</b> من قسط الاشتراك لفترة أقصاها <b> 36 شهرا</b> بشرط الحفاظ على علاقة العمل.</p>
                            </div>
                        @else
                            <h5 class="card-title">حساب امتيازات الإعانة:</h5>

                            <table class="table table-sm table-bordered">
                                <tbody>
                                <tr>
                                    <th scope="row">مبلغ الإعانة الشهرية</th>
                                    <td class="text-center"  >1000 دج</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="alert alert-warning">
                                <ul>
                                    <li> وفقًا للمعلومات المقدمة، يمكنك الاستفادة من تخفيض شهري قدره <b>{{ $abbat_total }} دج</b> من قسط الاشتراك لفترة أقصاها <b> 36 شهرا</b> بشرط الحفاظ على علاقة العمل.</li>
                                    <li> يمكنك أيضًا الاستفادة من منحة شهرية قدرها <b>1000 دج</b> لمدة أقصاها <b> 36 شهرًا</b> بشرط الحفاظ على علاقة العمل. </li>
                                </ul>
                            </div>
                        @endif
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

        </div>
    </section>

</main><!-- End #main -->
@endsection
