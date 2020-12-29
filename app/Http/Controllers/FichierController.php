<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FichierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichiers = Fichier::all();
        $matieres = Matiere::all();
        return view('backoffice.fichierIndex',compact('fichiers','matieres'));
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

        $validatedData = $request->validate([
            'nom' => 'required',
            'src' => 'required',
            'matiere_id' => 'required',
        ]);

        $store = new Fichier;
        $store->nom=$request->nom;
        $store->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('files','public');
        $store->matiere_id = $request->matiere_id;
        $store->save();
        return redirect()->back()->with('storeFichier', 'Fichier ajouter!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function show(Fichier $fichier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Fichier::find($id);
        return view('backoffice.partials.fichierEdit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fichier $fichier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Fichier::find($id);
        Storage::disk('public')->delete('files/'.$delete->src);
        $delete->delete();
        return redirect('/fichier')->with('deleteFichier', 'Fichier supprimer!');
    }
}
