@php
    $titleContent = "Simulation en ligne";
    $pagetitle = "Simulation en ligne";
    $translatePage = route('actionFormationAr');
@endphp
@extends('master')
@section('section-content')
    @section('translate')
        <li ><a href="{{ $translatePage }}">العربية</a></li>
    @endsection
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="">

    </section><!-- End Breadcrumbs -->

    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="content col-xl-5 d-flex flex-column justify-content-center">
                    <div class="section-title">
                        <h4><b>Action de Formation ou de Perfectionnement</b></h4>
                      </div>
                    <img src="{{ asset('assets/images/formation.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-7">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        {{-- <div class="row">
                            <div class="col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box iconbox-blue">

                                    <h2><a href="{{ route('actionFormation') }}">Action de Formation ou de Perfectionnement</a></h2>
                                    <br>

                                        <div class="mt-3">
                                        <a href="#formation" class="btn btn-primary " role="button">Simuler</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="registration-form">
                            <form action="{{ route('resultatFormation') }}" method="GET" name="contact-form" id="contact-form3">
                                @csrf
                                <div class="form-icon">
                                    <span><i class="bi bi-question"></i></span>
                                </div>
                                    <div class="card-body">
                                        <div class="form-group app-label">
                                            <label class="text-muted"><b> Question 01 : </b> Veuillez indiquer la durée de la formation</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="duree_formation" id="duree_one" value="1" {{ old("duree_formation") == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="duree_one" value="1"> Durée supérieure ou égale à 15 jours et inférieure ou égale à 01 mois. </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="duree_formation" id="duree_two" value="2" {{ old("duree_formation") == '2' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="duree_two" > Durée supérieure ou égale à 01 mois et inférieure ou égale à 02 mois. </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="duree_formation" id="duree_three" value="3" {{ old("duree_formation") == '3' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="duree_three" > Durée supérieure à 02 mois. </label>
                                            </div>
                                            @if ($errors->has('duree_formation'))
                                                <p class="text-danger"><b>Veuillez choisir la durée de formation</b></p>
                                            @endif
                                        </div>
                                        <br>
                                        <div class="form-group app-label">
                                            <label class="text-muted"> <b> Question 02 : </b> Veuillez saisir le montant du salaire mensuel soumis à cotisation de sécurité sociale</label>
                                            <input  name="montant" type="nomber" type="number" ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57"  class="form-control item" value="{{ old('montant') }}" placeholder="Montant (en DA) du salaire mensuel.">
                                            @if ($errors->has('montant'))
                                                <p class="text-danger"><b>Veuillez saisir le montant du salaire mensuel soumis à cotisation</b></p>
                                            @endif
                                        </div>

                                        <div class="alert alert-warning">
                                            <p class="text-center"> <b> Au cas ou il y a plusieurs salariés concernés, répéter la simulation pour chacun d'entre eux. </b></p>
                                        </div>

                                        <div class="text-center">
                                            <button id="btnSubmit" type="submit" role="button" class="btn btn-primary" ><i class="bi bi-calculator"></i></button>
                                        </div>

                                    </div>
                                </div>

                            </form>
                        </div>

                    </div><!-- End .content-->
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->


    {{-- <section id ="formation" class="inner-page">
        <div class="container">
            <div class="registration-form">
                <form action="{{ route('resultatFormation') }}" method="GET" name="contact-form" id="contact-form3">
                    @csrf
                    <div class="form-icon">
                        <span><i class="bi bi-question"></i></span>
                    </div>
                        <div class="card-body">
                            <div class="form-group app-label">
                                <label class="text-muted"><b> Question 01 : </b> Veuillez indiquer la durée de la formation</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="duree_formation" id="duree_one" value="1">
                                    <label class="form-check-label" for="duree_one" value="1"> Durée supérieure ou égale à 15 jours et inférieure ou égale à 01 mois. </label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="duree_formation" id="duree_two" value="2">
                                    <label class="form-check-label" for="duree_two" > Durée supérieure ou égale à 01 mois et inférieure ou égale à 02 mois. </label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="duree_formation" id="duree_three" value="3">
                                    <label class="form-check-label" for="duree_three" > Durée supérieure à 02 mois. </label>
                                </div>
                            </div>
                            <br>
                            <div class="form-group app-label">
                                <label class="text-muted"> <b> Question 02 : </b> Veuillez saisir le montant du salaire mensuel soumis à cotisation de sécurité sociale</label>
                                <input  name="montant" type="text" class="form-control item" value="" placeholder="Montant (en DA) du salaire mensuel." required>
                            </div>

                            <div class="alert alert-warning">

                                <p> <b> Au cas ou il y a plusieurs salariés concernés, répéter la simulation pour chacun d'entre eux. </b></p>
                        </div>
                            <div class="my-3"> </div>
                            <div class="text-center">
                                <button id="btnSubmit" type="submit" role="button" class="btn btn-primary" >Resultat</button>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>

    </section> --}}


  </main><!-- End #main -->

@endsection
