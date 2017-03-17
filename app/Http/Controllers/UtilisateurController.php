<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use App\Statu;
use App\Utilisateur;
class UtilisateurController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lesUsers=Utilisateur::All();
        $status=Statu::Pluck('role','id');
        return view('admin.user.index', ['lesUsers' => $lesUsers,  'status'=>$status]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $status=Statu::Pluck('role','id');
        return view('admin/user/create', compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'password'=>'required|min:6',
            'password_confirmation'=>'required|same:password', 
        ]);
        $users= new Utilisateur();
         $users->name=$request->get('name');
         $users->email=$request->get('email');
         $users->password=Hash::make($request->input('password'));
         $users->status_id=$request->get('status');
         $users->save();
         $request->session()->flash('success', 'Le compte a été crée !');
        return redirect(route('user.index'));

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
    public function edit($id,Request $request)
    {
        //
        $users=Utilisateur::find($id);
        $users->status_id=$request->input('status');
        $users->save();
        $request->session()->flash('success', "Le statut de l'utilisateur a été modifié" );
        return redirect("user.index");
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
}
