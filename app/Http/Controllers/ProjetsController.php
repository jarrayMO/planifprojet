<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Projet;
use App\Tache;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $projets = Projet::with('taches')->orderBy('dateFinProj', 'asc')->get();
      return view('projets.index', compact('projets', 'taches'));
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        Projet::create( $input );

        return Redirect::route('projets.index')->with('message_success', 'Projet crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  Projet $projet
     * @return Response
     */
    public function show(Projet $projet)
    {
        return view('projets.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Projet $projet
     * @return Response
     */
    public function edit(Projet $projet)
    {
        return view('projets.edit', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Projet $projet
     * @return Response
     */
    public function update(Projet $projet)
    {
        $input = array_except(Input::all(), '_method');
        $projet->update($input);

        return Redirect::route('projets.show', $projet->id)->with('message_modif', 'Projet ' .$projet->nom. ' mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Projet $projet
     * @return Response
     */
    public function destroy(Projet $projet)
    {
        $projet_nom = $projet->nom;
        $projet->delete();
        return Redirect::route('projets.index')->with('message_delete', 'Projet ' .$projet_nom. ' supprimé');
    }
}
