<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Http\Requests\StoreFormationRequest;
use App\Http\Requests\UpdateFormationRequest;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('actionFormation');

    }


    public function indexAr()
    {

        return view('actionFormationAr');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actionFormation');
    }


    public function createAr()
    {
        return view('actionFormationAr');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormationRequest $request)
    {
        $validated = $request->validate([
            'montant' => 'required',
            'duree_formation' => 'required',
        ]);

        $duree_formation = $request->get('duree_formation');
        $montant = $request->get('montant');

        /* --- Var de CALCUL --*/
        $taux_quote_empl = 0.25;
        $quote_empl = 0;
        $total = 0;
        $quote_empl = 0.25 * $montant;
        $total = $quote_empl * $duree_formation;

        return view('formResult', \compact(['montant', 'duree_formation' ,'taux_quote_empl', 'quote_empl','total' ]));

    }



    public function storeAr(StoreFormationRequest $request)
    {
        $validated = $request->validate([
            'montant' => 'required',
            'duree_formation' => 'required',
        ]);

        $duree_formation = $request->get('duree_formation');
        $montant = $request->get('montant');

        /* --- Var de CALCUL --*/
        $taux_quote_empl = 0.25;
        $quote_empl = 0;
        $total = 0;
        $quote_empl = 0.25 * $montant;
        $total = $quote_empl * $duree_formation;

        return view('formResultAr', \compact(['montant', 'duree_formation' ,'taux_quote_empl', 'quote_empl','total' ]));

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormationRequest  $request
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormationRequest $request, Formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        //
    }
}
