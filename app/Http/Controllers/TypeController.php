<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lesTypes=Type::all();
        return view('admin/types/index')->with('lesTypes',$lesTypes);
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
        $this->validate($request, [
            'titre'=>'required|unique:types',
        ]);
        $unType= new Type();
         $unType->titre=$request->get('titre');
         $unType->save();
         $request->session()->flash('success', 'Le type de jeu a été crée !');
        return redirect(route('type.index'));
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
        $unType=Type::find($id);
        return view('admin.types.edit', compact('unType'));
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
        $unType=Type::find($id);
         $unType->titre=$request->get('titre');
         $unType->save();
         $request->session()->flash('success', 'Le type de jeu a été modifié !');
         return redirect(route('type.index')); 
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
        $unType=Type::destroy($id);
        $request->session()->flash('success', 'Le type de jeu a été supprimé !');
        return redirect(route('type.index'));
    }
}
