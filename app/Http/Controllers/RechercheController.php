<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;
use App\Jeu;

class RechercheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesUtilisateurs=Utilisateur::all();
        $lesJeux=Jeu::all();
        return view('recherche/index')->with('lesUtilisateurs',$lesUtilisateurs)->with('lesJeux',$lesJeux);
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function recherche(Request $request)
    {
        $lesUtilisateurs=Utilisateur::All();
        $lesJeux=Jeu::All();
        return view('recherche/index')->with('lesUtilisateurs',$lesUtilisateurs)->with('lesJeux',$lesJeux); 
    }
    
        public function envoyerMessage(Request $request, $id)
    {
        $utilisateur = Utilisateur::find($id);// Je récupère l'objet correspondant à l'id de ma technologie 
        return view('messagerie/utilisateur')->with('utilisateur',$utilisateur);   
    }
}
