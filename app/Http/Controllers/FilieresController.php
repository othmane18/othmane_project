<?php

namespace App\Http\Controllers;

use App\Filiere;
use Illuminate\Http\Request;

class FilieresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('filieres.index')->with('fil' , Filiere::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filieres.create');
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

            'libelle_filiere'=> "required"

        ]);

        $fil = new Filiere();
        $fil->libelle_filiere = $request->libelle_filiere;
        $fil->save();
        return redirect()->route('filieres'); 
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
        $fil = Filiere::find($id);
        return view('filieres.edit')->with('fil' , $fil);
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

            "libelle_filiere" => "required"

        ]);

        $fil = new Filiere();
        $fil->libelle_filiere = $request->libelle_filiere;
        $fil->save();
        return redirect()->route('filieres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fil = Filiere::find($id);
        $fil->delete();
        return redirect()->route('filieres');
    }
}
