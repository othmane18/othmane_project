<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Niveauscolaire;

class NiveauscolairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('niveauscolaires.index')->with('niveau' , Niveauscolaire::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('niveauscolaires.create');
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

            "libelleniveau_scolaire" => "required"

          ]);

          $niv = new Niveauscolaire(); 
          $niv->libelleniveau_scolaire = $request->libelleniveau_scolaire;
          $niv->save();
          return redirect()->route('niveauscolaires');


          
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
        $niv = Niveauscolaire::find($id);
        return view('niveauscolaires.edit')->with('niv' , $niv);
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

            "libelleniveau_scolaire" => "required"

          ]);

          $niv = Niveauscolaire::find($id);
          $niv->libelleniveau_scolaire = $request->libelleniveau_scolaire;
          $niv->save();

          return redirect()->route('niveauscolaires');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $niv = Niveauscolaire::find($id);
       $niv->delete();

       return redirect()->route('niveauscolaires');
    }
}
