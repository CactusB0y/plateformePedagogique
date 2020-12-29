<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matieres = Matiere::all();
        return view('backoffice.matiereIndex',compact('matieres'));
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
        ]);

        $store = new Matiere;
        $store->nom=$request->nom;
        $store->description=$request->description;
        $store->save();
        return redirect()->back()->with('storeMatiere', 'Matière ajouter!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Matiere::find($id);
        $fichiers = Fichier::all();
        return view('coursShow',compact('show','fichiers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Matiere::find($id);
        return view('backoffice.partials.matiereEdit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
        ]);

        $update = Matiere::find($id);
        $update->nom = $request->nom;
        $update->description=$request->description;
        $update->save();
        return redirect('/matiere')->with('updateMatiere', 'Matière modifier!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Matiere::find($id);
        $delete->delete();
        return redirect()->back()->with('deleteMatiere', 'Matière supprimer!');
    }
}
