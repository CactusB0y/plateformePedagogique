<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('profil',compact('users'));
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
        $update = User::find($id);
        $update->name = $request->name;
        $update->prenom = $request->prenom;
        $update->age = $request->age;
        $update->email = $request->email;
        if($request->password == $request->passwordComfirm){
            $update->password = Hash::make($request->password);
        } else {
            return redirect()->back();
        }
        $update->save();
        return redirect()->back();
    }

    public function editPicture(Request $request, $id)
    {
        $updatePicture = User::find($id);
        if($updatePicture->src == "cactus.jpg"){
            $updatePicture->src = $request->src;
            $updatePicture->src = $request->file('src')->hashName();
            $request->file('src')->storePublicly('img','public');
        } else {
            $updatePicture->src = $request->src;
            Storage::disk('public')->delete('img/'.$updatePicture->src);
            $updatePicture->src = $request->file('src')->hashName();
            $request->file('src')->storePublicly('img','public');
        }
        $updatePicture->save();
        return redirect()->back();
    }

    public function addMatiere(Request $request, $id)
    {
        // $addMatiere = User::find($id);
        // $addMatiere->matiere_id = $request->matiere_id;
        // $addMatiere->save();
        // return redirect()->back();

        $user = User::find($id);
        $user->matieres()->attach($request->matiere_id);
        return redirect()->back()->with('abonnement','vous suivez actuellement ce cours');
    }

    public function detachMatiere(Request $request, $id)
    {
        // $addMatiere = User::find($id);
        // $addMatiere->matiere_id = $request->matiere_id;
        // $addMatiere->save();
        // return redirect()->back();

        $user = User::find($id);
        $user->matieres()->detach($request->matiere_id);
        return redirect()->back()->with('desabonner','vous ne suivez plus ce cours');
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
