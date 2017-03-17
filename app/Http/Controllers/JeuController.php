<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jeu;
use App\Type;
use File;

class JeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lesJeux=Jeu::all();
        return view('admin/jeux/index')->with('lesJeux',$lesJeux);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $lesTypes=Type::Pluck('titre','id');
        return view('admin/jeux/create', compact('lesTypes'));
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
        $nomPhoto = $request->file('photo')->getClientOriginalName();
        $upload = $request->file('photo')->move('images/logo_jeux', $nomPhoto);

        $unJeu= new Jeu();
         $unJeu->nom=$request->get('nom');
         $unJeu->Description=$request->get('description');
         $unJeu->date_sortie=$request->get('date_sortie');
         $unJeu->photo=$nomPhoto;
         $unJeu->type_id=$request->get('type');
         $unJeu->save();
         $request->session()->flash('success', 'Le jeu a été crée !');
        return redirect(route('jeu.index'));
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
        $lesJeux=Jeu::all();
        $lesTypes=Type::orderBy('titre','asc')->get();
        return view('jeux/index')->with('lesJeux',$lesJeux)->with('lesTypes',$lesTypes);
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
        $lesTypes=Type::Pluck('titre','id');
        $unJeu=Jeu::find($id);
        return view('admin.jeux.edit', compact('unJeu','lesTypes'));
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
        $unJeu=Jeu::find($id);


        if ($request->hasFile('photo')) {
        $nomPhoto = $request->file('photo')->getClientOriginalName();
        $upload = $request->file('photo')->move('images/logo_jeux', $nomPhoto);
        $unJeu->photo=$nomPhoto;
    }


        $unJeu->nom=$request->get('nom');
        $unJeu->description=$request->get('description');
        $unJeu->date_sortie=$request->get('date_sortie');
        $unJeu->type_id=$request->get('type');
        $unJeu->save();
        $request->session()->flash('success', 'Le jeu a été modifié !');
        return redirect(route('jeu.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        //
        $unJeu=Jeu::destroy($id);
        $request->session()->flash('success', 'Le jeu a été supprimé !');
        return redirect(route('jeu.index'));
    }
}
