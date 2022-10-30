@php
    $titleContent = "Simulation subvention";
    $pagetitle = "Simulation en ligne";
@endphp
@extends('master')
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

                    <div class="card-body">
                        <div class="section-title">
                            <h4>Resultats et Calculs</h4>
                          </div>
                        <h5 class="card-title">Calcul de l'avantage relatif à l'abattement :</h5>
                        <br>
                        <p class="text-right">Montant du salaire soumis à cotisation de la sécurité sociale : <b> {{ $montant }} DA </b></p>
                        <table class="table table-sm table-bordered ">
                            <tbody>
                              <tr>
                                <th scope="col" ></th>
                                {{-- <th class="text-center" scope="col">Taux</th> --}}
                                <th class="text-center">Montant (DA)</th>

                              </tr>
                              <tr>
                                <th scope="row">Quote-part patronale à payer par l'employeur</th>
                                {{-- <td class="text-center"> {{  $taux_quote_empl * 100 }} %</td> --}}
                                <td class="text-center">{{$quote_empl}} </td>
                              </tr>

                                <th scope="row">Montant total des Abbatements mensuels</th>
                                {{-- <td class="text-center">{{ $taux_abbat_total * 100 }} %</td> --}}
                                <td class="text-center"> {{ $abbat_total }} <i class="bi bi-info-circle-fill" style="color: #4466d8"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">Quote-part patronale à payer par l'employeur aprés abattement mensuel</th>
                                <td  class="text-center">{{ $total }} </td>
                              </tr>
                            </tbody>
                        </table>
                         <p> <i class="bi bi-info-circle-fill" style="color: #4466d8"></i> Ce montant englobe le montant à la charge de la CNAC et celui à la charge du trésor public (consentis par la loi de finances). Le dépôt de la demande du bénéfice des avantages s’effectue auprès des services de la CNAS.</p>
                         {{-- bi bi-exclamation-diamond-fill --}}
                         <br>
                        @if ($contrat =='1')
                            <div class="alert alert-warning">
                                <p> Selon les informations fournies, vous pouvez bénéficier d'un abattement mensuel de <b>{{ $abbat_total }} DA </b> de la Quote-part patronale pour une durée maximale de <b>36 mois</b> à condition que la relation de travail soit maintenue.</p>
                            </div>
                        @else
                            <h5 class="card-title">Calcul de l'avantage relatif à la subvention :</h5>

                            <table class="table table-sm table-bordered">
                                <tbody>
                                <tr>
                                    <th scope="row">Montant de la subvention mensuelle</th>
                                    <td class="text-center"  >1 000 DA</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="alert alert-warning">
                                <ul>
                                    <li> Selon les informations fournies, vous pouvez bénéficier d'un abattement mensuel de <b>{{ $abbat_total }} DA </b> de la Quote-part patronale pour une durée maximale de <b>36 mois</b> à condition que la relation de travail soit maintenue.</li>
                                    <li> Vous pouvez bénéficier également d'une subvention mensuelle de <b>1000 DA</b> pour une durée maximale de <b>36 mois</b> à condition que la relation de travail soit maintenue. </li>
                                </ul>
                            </div>
                        @endif
                        <hr>
                        <div >
                            <a href="{{ route('actionRecrutement') }}" id="btnSubmit" type="submit" role="button"> Simulation Recrutement </a>
                            <br>
                            <a href="{{ route('actionFormation') }}" id="btnSubmit" type="submit" role="button"> Simulation Formation ou Perfectionnement </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

    {{-- <section  class="inner-page">
        <div class="container">

            <div class="registration-form">

                <div class="card-header text-white" style="background-color: #61addd;">
                  Calculs & Résultats :
                </div>
                <div class="card-body">
                  <h5 class="card-title">Calcul de l'avantage relatif à l'abattement :</h5>
                  <br>
                  <p class="text-right">Montant du salaire soumis à cotisation de la securité sociale : {{ $montant }} DA</p>
                  <table class="table table-sm table-bordered ">
                    <tbody>
                      <tr>
                        <th scope="col" ></th>
                        <th scope="col">Taux</th>
                        <th >Montant DA</th>

                      </tr>
                      <tr>
                        <th scope="row">Quote-part patronale à payer par l'employeur</th>
                        <td> {{  $taux_quote_empl * 100 }} %</td>
                        <td>{{$quote_empl}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Abbatement à la charge de la CNAC</th>
                        <td>{{ $taux_abbat_CNAC * 100 }} %</td>
                        <td>{{ $abbat_CNAC }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Abbatement à la charge du Trésor LFC</th>
                        <td>{{ $taux_abbat_Tresor * 100 }} %</td>
                        <td> {{ $abbat_Tresor }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Montant total des Abbatement mensuels</th>
                        <td>{{ $taux_abbat_total * 100 }} %</td>
                        <td> {{ $abbat_total }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Quote-part patronale à payer par l'employeur avec abattement mensuel</th>
                        <td colspan="2">{{ $total }} DA</td>
                      </tr>
                    </tbody>
                  </table>
                  @if ($contrat =='1')
                    <div class="alert alert-warning">
                        <p> Selon les  informations fournis, vous pouvez bénéficier d'un abattement mensuel de <b>{{ $total }} DA </b> de la Quote-part patronale pour une durée maximale de <b>36 mois</b> a condition que la relation de travail soit maintenue.</p>
                    </div>

                </div>

                @else

                <div class="card-body">
                    <h5 class="card-title">Calcul de l'avantage relatif à la subvention :</h5>

                    <table class="table table-sm table-bordered">
                      <tbody>
                        <tr>
                          <th scope="row">Montant de la subvention mensuel</th>
                          <td colspan="2">1 000 DA</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="alert alert-warning">
                        <ul>
                            <li> Selon les  informations fournis, vous pouvez bénéficier d'une exonération totale de <b>{{ $total }} DA </b> relative a <b>36 mois</b> de la Quote-part de sécurité sociale.</li>
                            <li> Vous pouvez bénéficier également d'une subvention mensuelle de <b>1000 DA</b> pour une durée maximale de 36 mois a condition que la relation de travail soit maintenue. </li>
                        </ul>
                    </div>

                </div>

                @endif

            </div>

            {{-- <div class="row mt-3">
                <div class="col">


                    <h2>IT'S A TEST</h2>
                    <p>you're code wilaya is {{ $wilaya->des_fr  }} et vous faite partie de la region du {{ $wilaya->region }}</p>
                    <p>are you a primo_demandeur {{ $primo_demandeur  }}</p>
                    <p>you're contrat is {{ $contrat  }}</p>
                    <p>votre montant saisi est de  {{ $montant }} DA</p>
                    <h3> Resultat de la simulation</h3>
                    <p>
                        {{  $taux_quote_empl  }}, {{$quote_empl}}

                        'taux_abbat_CNAC '  {{ $taux_abbat_CNAC }},  ' abbat_CNAC' {{ $abbat_CNAC }}', <br>
                        'taux_abbat_Tresor'  {{ $taux_abbat_Tresor }},   'abbat_Tresor'  {{ $abbat_Tresor }}<br>
                        'taux_abbat_total'  {{ $taux_abbat_total }},  'abbat_total'  {{ $abbat_total }} <br>
                        -------------------------------------------    'total'  {{ $total }}
                    </p>
                    <br>

                 </div>
            </div> --}}
        {{-- </div>

    </section> --}}

</main><!-- End #main -->
@endsection


@section('script')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
    

    var formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'DZD',
    });
</script>
@endsection
