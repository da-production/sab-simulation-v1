@php
    $titleContent = "Simulation formation";
    $pagetitle = "Simulation enligne";
    
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
                        <h5 class="card-title"> Calcul de l'avantage relatif à l'exonération de la cotisation de la sécurité sociale :</h5>
                        <br>
                        <p class="text-right">Montant du salaire soumis à cotisation de la sécurité sociale : <b> {{ $montant }} DA </b></p>
                        <table class="table table-sm table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="col" ></th>
                                    {{-- <th class="text-center" scope="col">Taux</th> --}}
                                    <th class="text-center">Montant (DA)</th>

                                </tr>
                                <tr class="">
                                    <th scope="row">Quote-part à payer par l'employeur</th>
                                    <td class="text-center">{{$quote_empl}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Montant de l'exonération mensuelle</th>
                                    <td class="text-center" >{{$quote_empl}}</td>
                                </tr>
                                {{-- <tr style="background-color: #b6effb">
                                    <th scope="row" >Nombre de mois de l'exonération</th>
                                    <td class="text-center">{{ $duree_formation }}</td>
                                </tr> --}}
                                <tr>
                                    <th scope="row">Montant Total de l'exonération</th>
                                    <td class="text-center" >{{ $total }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="alert alert-warning">
                                {{-- <p> <b> Message: </b> </p> --}}
                                <p class="text-right"> Selon les  informations fournies, vous pouvez bénéficier d'une exonération totale de <b>{{ $total }} DA </b> relative à <b>{{ $duree_formation }} mois</b> de la Quote-part de sécurité sociale.</p>
                        </div>
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
    </section>

</main><!-- End #main -->
@endsection

