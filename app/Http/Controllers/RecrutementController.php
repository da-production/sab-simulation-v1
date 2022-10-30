<?php

namespace App\Http\Controllers;

use App\Models\Recrutement;
use App\Http\Requests\StoreRecrutementRequest;
use App\Http\Requests\UpdateRecrutementRequest;
use App\Models\Wilaya;

class RecrutementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $wilayas = Wilaya::all();

        return view('actionRecrutement', \compact(['wilayas']));

    }
    public function indexAr()
    {

        $wilayas = Wilaya::all();

        return view('actionRecrutementAr', \compact(['wilayas']));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actionRecrutement');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecrutementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeGlobale(StoreRecrutementRequest $request)
    {
        $validated = $request->validate([
            'montant' => 'required',
            'cod_wilaya' => 'required',
            'primo_demandeur' => 'required',
            'contrat' => 'required',
    ]);

    // $messages = [
    //         'cod_wilaya.required' => 'Veuillez choisir votre wilaya',
    //         'primo_demandeur.required' => 'Veuillez selectionner votre choix',
    //         'contrat.required' => 'Veuillez choisir votre type de contrat',
    //         'montant.required' => 'Vous devez introduire votre montant de cotisation',
    //         'montant.number' => 'Veuillez saisir un montant valide',
    // ];

    $cod_wilaya = $request->input('cod_wilaya');
        $wilaya = Wilaya::where('cod_wilaya','=',$cod_wilaya)->first();
        $primo_demandeur = $request->get('primo_demandeur');
        $contrat = $request->get('contrat');
        $montant = $request->get('montant');

        /* --- FORMULE-1 --*/
        $CNAC_Nord_NonDemandeur = 0.20;
        $CNAC_Nord_Demandeur = 0.28;
        $CNAC_Sud_form1 = 0.36;

         /* --- FORMULE-2 --*/
        $TRESOR_Nord_NonDemandeur = 0.20;
        $TRESOR_Nord_Demandeur = 0.52;
        $CNAC_Sud_form2 = 0.54;

        $sub_mentuel = 1000;

        /* --- Var de CALCUL --*/
        $taux_abbat_CNAC = 0;
        $abbat_CNAC = 0;
        $taux_abbat_Tresor = 0;
        $abbat_Tresor = 0;
        $taux_abbat_total =  0;
        $abbat_total =  0;
        $total = 0;
        $taux_quote_empl = 0.25;
        $quote_empl = 0;
        $quote_empl = 0.25 * $montant;

        if($wilaya->cod_region == 1)
        {
            if ($primo_demandeur == '1')
            {
                $taux_abbat_CNAC = $CNAC_Nord_Demandeur;
                $abbat_CNAC = $taux_abbat_CNAC * $quote_empl;
                $taux_abbat_Tresor = $TRESOR_Nord_Demandeur;
                $abbat_Tresor = $taux_abbat_Tresor * $quote_empl;
                $taux_abbat_total =  $taux_abbat_CNAC + $taux_abbat_Tresor;
                $abbat_total =  $abbat_CNAC + $abbat_Tresor ;
                $total = $quote_empl - $abbat_total;

            }
            else
            {
                $taux_abbat_CNAC = $CNAC_Nord_NonDemandeur;
                $abbat_CNAC = $taux_abbat_CNAC * $quote_empl;
                $taux_abbat_Tresor = $TRESOR_Nord_NonDemandeur;
                $abbat_Tresor = $taux_abbat_Tresor * $quote_empl;
                $taux_abbat_total =  $taux_abbat_CNAC + $taux_abbat_Tresor;
                $abbat_total =  $abbat_CNAC + $abbat_Tresor ;
                $total = $quote_empl - $abbat_total;
            }
        }
        else
        {
            if ($primo_demandeur == '1')
            {
                $taux_abbat_CNAC = $CNAC_Sud_form1;
                $abbat_CNAC = $taux_abbat_CNAC * $quote_empl;
                $taux_abbat_Tresor = $CNAC_Sud_form2;
                $abbat_Tresor = $taux_abbat_Tresor * $quote_empl;
                $taux_abbat_total =  $taux_abbat_CNAC + $taux_abbat_Tresor;
                $abbat_total =  $abbat_CNAC + $abbat_Tresor ;
                $total = $quote_empl - $abbat_total;

            }
            else
            {
                $taux_abbat_CNAC = $CNAC_Sud_form1;
                $abbat_CNAC = $taux_abbat_CNAC * $quote_empl;
                $taux_abbat_Tresor = $CNAC_Sud_form2;
                $abbat_Tresor = $taux_abbat_Tresor * $quote_empl;
                $taux_abbat_total =  $taux_abbat_CNAC + $taux_abbat_Tresor;
                $abbat_total =  $abbat_CNAC + $abbat_Tresor ;
                $total = $quote_empl - $abbat_total;
            }
        }
        //dd(compact('wilaya','total', 'taux_quote_empl', 'quote_empl') );
        return view('subResult', \compact(['wilaya', 'primo_demandeur', 'contrat', 'montant', 'quote_empl','abbat_Tresor','abbat_total','total' ]));

    }

    // public function storeFr(StoreRecrutementRequest $request)
    // {
    //     $tasks_controller = $this->storeGlobale($request);
    //     $tasks_controller->storeGlobale($primo_demandeur, $quote_empl);

    //     //$this->storeGlobale($request);

    //     dd($tasks_controller);
    //     //return view('subResult', \compact(['wilaya', 'primo_demandeur', 'contrat', 'montant', 'quote_empl','abbat_Tresor','abbat_total','total' ]));

    // }


    public function storeAr(StoreRecrutementRequest $request)
    {
        $validated = $request->validate([
            'montant' => 'required',
            'cod_wilaya' => 'required',
            'primo_demandeur' => 'required',
            'contrat' => 'required',
    ]);

    // $messages = [
    //         'cod_wilaya.required' => 'Veuillez choisir votre wilaya',
    //         'primo_demandeur.required' => 'Veuillez selectionner votre choix',
    //         'contrat.required' => 'Veuillez choisir votre type de contrat',
    //         'montant.required' => 'Vous devez introduire votre montant de cotisation',
    //         'montant.number' => 'Veuillez saisir un montant valide',
    // ];

    $cod_wilaya = $request->input('cod_wilaya');
        $wilaya = Wilaya::where('cod_wilaya','=',$cod_wilaya)->first();
        $primo_demandeur = $request->get('primo_demandeur');
        $contrat = $request->get('contrat');
        $montant = $request->get('montant');

        /* --- FORMULE-1 --*/
        $CNAC_Nord_NonDemandeur = 0.20;
        $CNAC_Nord_Demandeur = 0.28;
        $CNAC_Sud_form1 = 0.36;

         /* --- FORMULE-2 --*/
        $TRESOR_Nord_NonDemandeur = 0.20;
        $TRESOR_Nord_Demandeur = 0.52;
        $CNAC_Sud_form2 = 0.54;

        $sub_mentuel = 1000;

        /* --- Var de CALCUL --*/
        $taux_abbat_CNAC = 0;
        $abbat_CNAC = 0;
        $taux_abbat_Tresor = 0;
        $abbat_Tresor = 0;
        $taux_abbat_total =  0;
        $abbat_total =  0;
        $total = 0;
        $taux_quote_empl = 0.25;
        $quote_empl = 0;
        $quote_empl = 0.25 * $montant;

        if($wilaya->cod_region == 1)
        {
            if ($primo_demandeur == '1')
            {
                $taux_abbat_CNAC = $CNAC_Nord_Demandeur;
                $abbat_CNAC = $taux_abbat_CNAC * $quote_empl;
                $taux_abbat_Tresor = $TRESOR_Nord_Demandeur;
                $abbat_Tresor = $taux_abbat_Tresor * $quote_empl;
                $taux_abbat_total =  $taux_abbat_CNAC + $taux_abbat_Tresor;
                $abbat_total =  $abbat_CNAC + $abbat_Tresor ;
                $total = $quote_empl - $abbat_total;

            }
            else
            {
                $taux_abbat_CNAC = $CNAC_Nord_NonDemandeur;
                $abbat_CNAC = $taux_abbat_CNAC * $quote_empl;
                $taux_abbat_Tresor = $TRESOR_Nord_NonDemandeur;
                $abbat_Tresor = $taux_abbat_Tresor * $quote_empl;
                $taux_abbat_total =  $taux_abbat_CNAC + $taux_abbat_Tresor;
                $abbat_total =  $abbat_CNAC + $abbat_Tresor ;
                $total = $quote_empl - $abbat_total;
            }
        }
        else
        {
            if ($primo_demandeur == '1')
            {
                $taux_abbat_CNAC = $CNAC_Sud_form1;
                $abbat_CNAC = $taux_abbat_CNAC * $quote_empl;
                $taux_abbat_Tresor = $CNAC_Sud_form2;
                $abbat_Tresor = $taux_abbat_Tresor * $quote_empl;
                $taux_abbat_total =  $taux_abbat_CNAC + $taux_abbat_Tresor;
                $abbat_total =  $abbat_CNAC + $abbat_Tresor ;
                $total = $quote_empl - $abbat_total;

            }
            else
            {
                $taux_abbat_CNAC = $CNAC_Sud_form1;
                $abbat_CNAC = $taux_abbat_CNAC * $quote_empl;
                $taux_abbat_Tresor = $CNAC_Sud_form2;
                $abbat_Tresor = $taux_abbat_Tresor * $quote_empl;
                $taux_abbat_total =  $taux_abbat_CNAC + $taux_abbat_Tresor;
                $abbat_total =  $abbat_CNAC + $abbat_Tresor ;
                $total = $quote_empl - $abbat_total;
            }
        }
        //dd(compact('wilaya','total', 'taux_quote_empl', 'quote_empl') );
        return view('subResultAr', \compact(['wilaya', 'primo_demandeur', 'contrat', 'montant', 'quote_empl','abbat_Tresor','abbat_total','total' ]));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recrutement  $recrutement
     * @return \Illuminate\Http\Response
     */
    public function show(Recrutement $recrutement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recrutement  $recrutement
     * @return \Illuminate\Http\Response
     */
    public function edit(Recrutement $recrutement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecrutementRequest  $request
     * @param  \App\Models\Recrutement  $recrutement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecrutementRequest $request, Recrutement $recrutement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recrutement  $recrutement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recrutement $recrutement)
    {
        //
    }
}
