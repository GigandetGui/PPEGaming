<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lesActualites=Actualite::all();
        return view('admin/actualites/index')->with('lesActualites',$lesActualites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/actualites/create');
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
        $uneActualite= new Actualite();
        $uneActualite->titre=$request->get('titre');
        $uneActualite->description=$request->get('description');
        $uneActualite->date=Date('Y-m-d');
        $uneActualite->save();
        $request->session()->flash('success', 'L\'actualité a été créée !');
        return redirect(route('actualite.index'));
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
        $uneActualite=Actualite::find($id);
        return view('admin.actualites.edit', compact('uneActualite'));
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
        $uneActualite=Actualite::find($id);
        $uneActualite->titre=$request->get('titre');
        $uneActualite->description=$request->get('description');
        $uneActualite->save();
        $request->session()->flash('success', 'L\'actualité a été modifiée !');
        return redirect(route('actualite.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $uneActualite=Actualite::destroy($id);
        $request->session()->flash('success', 'L\'actualité a été supprimée !');
        return redirect(route('actualite.index'));
    }
}
