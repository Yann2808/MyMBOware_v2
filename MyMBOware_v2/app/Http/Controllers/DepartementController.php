<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements = Departement::all();
        return view('departments.index', compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $departement = new Departement();
        $departement->code_dep = $request->code_dep;
        $departement->nom_dep = $request->nom_dep;
        $departement->code_dir = $request->code_dir;
        $departement->save();

        //Redirection vers la route department.index
        return Redirect::route('departement.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $departement = Departement::find($id);

        return view('departments.show', compact('departement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $departement = Departement::find($id);
        return view('departments.edit', compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $departement = Departement::find($id);

        $departement->nom_dep = $request->nom_dep;
        $departement->code_dep = $request->code_dep;
        $departement->code_dir = $request->code_dir;

        $departement->save();

        return Redirect::route('departement.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        //
    }
}
