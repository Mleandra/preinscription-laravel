<?php

namespace App\Http\Controllers;

use App\Filiere;
use App\Faculte;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultes = Faculte::all();
        return view('filieres', ['etudiants' => Filiere::all(),'facultes'=>$facultes]);
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
            'filiere'=>'required',
            'faculte' => 'required',
        ]);
        $filiere=New Filiere([
            'nom'=>$request->get('filiere'),
            'faculte_id'=> $request->get('faculte'),
        ]);
        $filiere->save();

        return redirect()->route('admin.filiere');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show(Filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Filiere $filiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filiere $filiere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filiere $filiere)
    {
        //
    }
}
