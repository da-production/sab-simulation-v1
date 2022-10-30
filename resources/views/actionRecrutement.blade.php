@php
    $titleContent = "Simulation en ligne";
    $pagetitle = "Simulation en ligne";
    $translatePage = route('actionRecrutementAr');
@endphp
@extends('master')
@section('section-content')
    @section('translate')
        <li ><a href="{{ $translatePage }}">العربية</a></li>
    @endsection
  <main id="main">
    <div class="modal fade" id="popup_condition" tabindex="-1" aria-labelledby="readmoreLabel" aria-hidden="true">
        <div class="modal-ml modal-dialog modal-dialog-centered ">
          <div class="modal-content">
            <div class="modal-body">
                <div class="row content">
                    <div class="alert alert-warning alertPopup">
                        <p class="text-center"><i class="bi bi-exclamation-triangle" style="color: ORANGE !important; font-size: 30px !important;"></i></p>
                        <p class="text-center" style="color: black !important;"><b>L'employeur doit présenter un document attestant l'inscription du demandeur d'emploi recruté auprès des agences de placement conformément à la réglementation en vigueur.</b></p>
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
                <div class="content col-xl-5 d-flex flex-column justify-content-center">
                    <div class="section-title">
                        <h4><b>Action de Recrutement</b></h4>
                      </div>
                    <img src="{{ asset('assets/images/3.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-7">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        {{-- <div class="row">
                            <div class="col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box iconbox-blue">

                                    <h2><a href="{{ route('actionRecrutement') }}">Action de Recrutement</a></h2>
                                    <br>
                                    <div class="alert alert-warning">
                                        <p><b> L'employeur doit présenter un document attestant l'inscription du demandeur d'emploi recruté auprès des agences de placement conformément à la réglementation en vigueur </b></p>
                                    </div>
                                        <div class="mt-3">
                                        <a href="#recrutement" class="btn btn-primary " role="button">Simuler</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                        <div class="registration-form">
                            <form action="{{ route('resultatRecrutement') }}" method="GET" name="contact-form" id="contact-form3">
                                @csrf
                                <div class="form-icon">
                                    <span><i class="bi bi-question"></i></span>
                                </div>

                                    <div class="">
                                        
                                        <div class="form-group app-label">
                                            <div class="form-button">
                                            <label class="text-muted"><b> Question 01 : </b> quelle est la wilaya de recrutement ? </label>

                                                <select class="form-control item" name="cod_wilaya">
                                                    @foreach ($wilayas as $wilaya)
                                                        <option value="{{ $wilaya->cod_wilaya }}">{{ $wilaya->cod_wilaya }} -- {{ $wilaya->des_fr }} </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('cod_wilaya'))
                                                    <p class="text-danger"><b>Veuillez choisir votre wilaya</b></p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group app-label">
                                            <label class="text-muted" ><b> Question 02 : </b> s'agit il de recrutement d'un primo-demandeur ?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="primo_demandeur" id="demandeur_oui" value="1" {{ old("primo_demandeur") == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="demandeur_oui"> OUI </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="primo_demandeur" id="demandeur_non" value="0" {{ old("primo_demandeur") == '0' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="demandeur_non" > NON </label>
                                            </div>
                                            @if ($errors->has('primo_demandeur'))
                                                <p class="text-danger"><b>Veuillez selectionner une reponse</b></p>
                                            @endif
                                        </div>
                                        <br>
                                        <div class="form-group app-label">
                                            <label class="text-muted"><b> Question 03 : </b> quel est le type de contrat ?</label>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="contrat" id="contrat_cdd" value="1" {{ old("contrat") == '1' ? 'checked' : '' }} data-bs-toggle="modal" data-bs-target="#popup_cdd">
                                                <label class="form-check-label" for="contrat_cdd" > CDD </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="contrat" id="contrat_cdi" value="2" {{ old("contrat") == '2' ? 'checked' : '' }} >
                                                <label class="form-check-label" for="contrat_cdi"> CDI </label>
                                            </div>
                                            @if ($errors->has('contrat'))
                                                <span class="help-inline text-danger"><b>Veuillez choisir le type de contrat</b></span>
                                            @endif
                                        </div>
                                        <br>
                                        <div class="form-group app-label">
                                            <label class="text-muted"> <b> Question 04 : </b> Veuillez saisir le montant du salaire mensuel soumis à cotisation de sécurité sociale</label>
                                            <input  name="montant"  type="nomber" type="number" ondrop="return false;" onpaste="return false;"
                                            onkeypress="return event.charCode>=48 && event.charCode<=57" class="form-control item" value="{{ old('montant') }}" placeholder="Montant (en DA) du salaire mensuel.">
                                            @if ($errors->has('montant'))
                                                <p class="text-danger"><b>Veuillez saisir le montant du salaire mensuel soumis à cotisation</b></p>
                                            @endif
                                        </div>

                                        <div class="text-center">
                                            <button id="btnSubmit" type="submit" role="button" class="btn btn-primary" ><i class="bi bi-calculator"></i></button>
                                        </div>

                                    </div>
                            </form>


                    </div><!-- End .content-->
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->


    <div class="modal fade" id="popup_cdd" tabindex="-1" aria-labelledby="readmoreLabel" aria-hidden="true">
        <div class="modal-ml modal-dialog modal-dialog-centered ">
          <div class="modal-content">

            <div class="modal-body">
                <div class="row content">
                    <div class="alert alert-info alertPopup">
                        <p class="text-center"><b> La durée minimale du contrat exigée pour bénéficier des avantages est de 06 mois pour les secteurs suivant: Artisanat, Tourisme, Culture, Chantiers du bâtiment et travaux publics, Agriculture, Société de services et de 12 mois pour les autres secteurs.</b></p>
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

    var formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'DZD',
    });

   
        // function displayRadioValue() {
        //     var ele = document.getElementsByName('primo_demandeur');

        //     for(i = 0; i < ele.length; i++) {
        //         if(ele[i].checked)
        //         // document.getElementById("result").innerHTML
        //         //         = "Primo_demandeur: "+ele[i].value;
        //                 console.log(ele[i].value);
        //     }
        // }



    // var value= $("input:radio[name=primo_demandeur]:checked").val();

    // $("#btnSubmit").click(function(){
    // var value=$("input:radio[name=primo_demandeur]:checked").val();
    // console.log(value);
    // })

    // var primo_demandeurs = document.getElementsByName('primo_demandeur');
    // var primo_demandeur;
    // for(var i = 0; i < primo_demandeurs.length; i++){
    //     if(primo_demandeurs[i].checked){
    //         primo_demandeur = primo_demandeurs[i].value;
    //     }
    // }


    // $("input[type='radio'][name='primo_demandeur']:checked").val();

    // document.querySelector('input[name="primo_demandeur"]:checked').value;


    // if (document.getElementById('primo_demandeur').checked) {
    //     primo_demandeur = document.getElementById('primo_demandeur').value;
    // }


    // var demandeur = document.getElementById('demandeur').value;
    // var primo_demandeur;
    // if(demandeur =='1'){
    //     primo_demandeur = document.getElementById('demandeur_oui').value;

    // }else if(demandeur =='2'){
    //     primo_demandeur = document.getElementById('demandeur_non').value;

    // }

    // document.getElementByname('primo_demandeur').innerHTML = primo_demandeur;

</script>
@endsection


