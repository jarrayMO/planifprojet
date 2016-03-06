<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use Redirect;
use App\Projet;
use App\Tache;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TachesController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\Projet $projet
     * @return Response
     */
      public function index(Projet $projet)
      {
          return view('taches.index', compact('projet'));
      }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Projet $projet
     * @return Response
     */
    public function create(Projet $projet)
    {
      return view('taches.create', compact('projet'));
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Projet $projet
     * @return Response
     */
    public function store(Projet $projet)
    {
        $input = Input::all();
        $input['projet_id'] = $projet->id;
        Tache::create( $input );

        return Redirect::route('projets.show', $projet->id)->with('message_success', 'Tâche créée pour le projet ' .$projet->nom);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projet $projet
     * @param  \App\Tache $tache
     * @return Response
     */
    public function show(Projet $projet, Tache $tache)
    {
      return view('taches.edit', compact('projet', 'tache'));
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projet $projet
     * @param  \App\Tache $tache
     * @return Response
     */
    public function edit(Projet $projet, Tache $tache)
    {
      return view('taches.edit', compact('projet', 'tache'));
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Projet $projet
     * @param  \App\Tache $tache
     * @return Response
     */
    public function update(Projet $projet, Tache $tache)
    {
        $input = array_except(Input::all(), '_method');
        $tache->update($input);

        return Redirect::route('projets.show', [$projet->id])->with('message_modif', 'Tâche ' .$tache->nom. ' mise à jour pour le projet ' .$projet->nom);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projet $projet
     * @param  \App\Tache $tache
     * @return Response
     */
    public function destroy(Projet $projet, Tache $tache)
    {
        $tache_nom = $tache->nom;
        $tache->delete();
        return Redirect::route('projets.show', $projet->id)->with('message_delete', 'Tâche ' .$tache_nom. ' supprimée pour le projet ' .$projet->nom);
    }
}
