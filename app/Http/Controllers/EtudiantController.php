<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Niveau;
use App\Pays;
use App\Faculte;
use App\Diplome;
use App\Payement;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pays = Pays::all();
        $facultes = Faculte::all();
        $diplomes = Diplome::all();
        $paiements= Payement::all();
        $niveaux = Niveau::all();
        return view('formPreinscription', ['pays' => $pays, 'facultes'=>$facultes , 'diplomes'=>$diplomes,'paiements'=>$paiements,'niveaux'=>$niveaux]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required',
            'prenom ' => 'required',
            'date_naissance' => 'required',
            'lieu_naissance'=> 'required',
            'langue'=> 'required',
            'etat_civil'=> 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'nom_pere',
            'profession_pere',
            'nom_mere',
            'profession_mere',
            'nom_urgence' => 'required',
            'tel_urgence'=> 'required',
            'ville_urgence'=> 'required',
            'annee_diplome'=> 'required',
            'exam_nomber'=> 'required',
            'info_jury'=> 'required',
            'moyenne' ,
            'date_delivrence'=> 'required',
            'choix_1'=> 'required',
            'choix_2' => 'required',
            'choix_3'=> 'required',
            'region_id'=> 'required',
            'niveau_id'=> 'required',
            'diplome_id'=> 'required'
            ]
        );
        $etudiant =new Etudiant([
            'nom' => $request->get('fnom'),
            'prenom ' => $request->get('prenom'),
            'date_naissance' => $request->get('Datenaissance'),
            'lieu_naissance'=> $request->get('lieunaissance'),
            ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
