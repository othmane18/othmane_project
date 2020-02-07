<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etablissement;
use Illuminate\Support\Facades\Auth;


class EtablissementsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        if (!Auth::guard("admin")->check()) {
            $this->middleware('auth:admin');
        } 
    }
    public function index()
    {
        return view('etablissements.index')->with('etat' , Etablissement::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etablissements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [

            "libelle_etablissement" => "required",
            "type_etablissement" => "required",
            "code_grisa" => "required",
            "adresse_etablissement" => "required",
            "telephone_etablissement" => "required",
            "ville_etablissement" => "required"
        ]);

       


            $etat = new Etablissement;
            $etat->libelle_etablissement = $request->libelle_etablissement;
            $etat->type_etablissement = $request->type_etablissement;
            $etat->code_grisa = $request->code_grisa;
            $etat->adresse_etablissement = $request->adresse_etablissement;
            $etat->telephone_etablissement = $request->telephone_etablissement;
            $etat->ville_etablissement = $request->ville_etablissement;
            $etat->save();

            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etat = Etablissement::find($id);
        return view('etablissements.edit')->with('etat' , $etat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request , [

            "libelle_etablissement" => "required",
            "ville_etablissement" => "required",
            "type_etablissement" => "required",
            "adresse_etablissement" => "required",
            "telephone_etablissement" => "required" 


        ]);

        $etat = Etablissement::find($id); 
        $etat->libelle_etablissement = $request->libelle_etablissement;
        $etat->ville_etablissement = $request->ville_etablissement;
        $etat->type_etablissement = $request->type_etablissement;
        $etat->adresse_etablissement = $request->adresse_etablissement;
        $etat->telephone_etablissement = $request->telephone_etablissement;
        $etat->save();

        return redirect()->route('etablissements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etat = Etablissement::find($id);
        $etat->delete();
        return redirect()->route('etablissements');
    }
}
