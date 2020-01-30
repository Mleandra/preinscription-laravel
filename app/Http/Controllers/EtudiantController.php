<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Niveau;
use App\Region;
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
            'prenom' => 'required',
            'date_naissance' => 'required',
            'lieu_naissance'=> 'required',
            'sexe'=> 'required',
            'langue'=> 'required',
            'etat_civil'=> 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'email'=> 'required',

            'nom_pere',
            'profession_pere',
            'nom_mere',
            'profession_mere',
            'nom_urgence' => 'required',
            'tel_urgence'=> 'required',
            'ville_urgence'=> 'required',
            'faculte'=> 'required',
            'choix1'=> 'required',
            'choix2' => 'required',
            'choix3'=> 'required',
            'niveau'=> 'required',
            'type_diplome'=> 'required',
            'annee_diplome'=> 'required',
            'date_delivrance'=> 'required',
            'infos_jury'=> 'required',
            'exam_number'=> 'required',
            'paiement'=> 'required',
            'transaction'=> 'required',


            'moyenne' ,



            'pays' => 'required',
            'region' => 'required',
            'new-region' => 'required_if:region,0'
            ]
        );
        $region_id = $request->get('region');
        if ($region_id == '0') {
         $region = new Region();
         $region->pays_id = $request->get('pays');
        $region->nom = $request->get('new-region');
        $region->save();
        $region_id = $region->id;
        }
        $etudiant =new Etudiant([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'date_naissance' => $request->get('date_naissance'),
            'lieu_naissance'=> $request->get('lieu_naissance'),
            'langue'=> $request->get('langue'),
            'etat_civil'=> $request->get('etat_civil'),
            'adresse'=> $request->get('adresse'),
            'telephone'=> $request->get('telephone'),
            'nom_pere'=> $request->get('nom_pere'),
            'profession_pere'=> $request->get('profession_pere'),
            'profession_mere'=> $request->get('profession_mere'),
            'nom_mere'=> $request->get('nom_mere'),
            'nom_urgence'=> $request->get('nom_urgence'),
            'tel_urgence'=> $request->get('tel_urgence'),
            'ville_urgence'=> $request->get('ville_urgence'),
            'annee_diplome'=> $request->get('annee_diplome'),
            'exam_nomber'=> $request->get('exam_number'),
            'info_jury'=> $request->get('infos_jury'),
            'moyenne'=> $request->get('moyenne'),
            'date_delivrence'=> $request->get('date_delivrance'),
            'choix_1'=> $request->get('choix1'),
            'choix_2'=> $request->get('choix2'),
            'choix_3'=> $request->get('choix3'),
            'region_id'=> $region_id,
            'niveau_id'=> $request->get('niveau'),
            'diplome_id'=> $request->get('type_diplome'),
            'paiement_id'=> $request->get('paiement'),
            'transaction'=> $request->get('transaction'),
            'sexe'=> $request->get('sexe'),
            'email'=> $request->get('email'),
            'delivreur'=> $request->get('issuer'),

            ]);
        $etudiant->save();

        return redirect()->route('etudiant.voir', ['id' => $etudiant->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show($etudiant)
    {

        return view('fiche', ['etudiant' => Etudiant::find($etudiant)]);
    }
    public function affiche(Request $request)
    {
        $this->validate($request,[
            'code'=>['required']
        ]);
        $code=$request->get('code');

        $etudiant=Etudiant::findorFail($code);
        if($etudiant) {

            return view('fiche',['etudiant'=> $etudiant]);
        }
        return back();
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

    public function admin()
    {
        return view('etudiant', ['etudiants' => Etudiant::all()]);
    }
}
