<?php

namespace App\Http\Controllers;

use App\Faculte;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class FaculteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('facultes', ['etudiants' => Faculte::all()]);
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
        'faculte' => 'required',
            ]);

        $faculte =New Faculte([
            'nom'=>$request->get('faculte'),


        ]);
        $faculte->save();

        return redirect()->route('admin.faculte');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Faculte  $faculte
     * @return \Illuminate\Http\Response
     */
    public function show(Faculte $faculte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faculte  $faculte
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculte $faculte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faculte  $faculte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculte $faculte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faculte  $faculte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculte $faculte)
    {
        //
    }
}
