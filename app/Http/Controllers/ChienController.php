<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Chien;
use App\Models\Vaccin;

class ChienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id; // récupération de l'id du user connecté
        $user = User::find($userId); // récupération du user en base de données avec la fonction find()
        $user->load('chiens'); // chargement de ses chiens avec un eager loading
        return view('Pages.Users.mon-compte', ['user' => $user]); // on retourne la vue pour afficher les chiens en y injectant le user
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Chien $chien)
    {
        $user = Auth::user();
        $chien->load('vaccins', 'users');
        return view('Pages.Users.mon-compte', ['chien' => $chien, 'user' => $user]);
    }

    // ___________________________________________________________________________
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nom' => 'required | min:2 | max:40',
            'race' => 'required | min:3 | max:50',
            'categorie_2' => 'required ',
            'date_naiss' => 'required ',
        ]);

        $chien = Chien::create([
            'user_id' => $user->id,
            'nom' => ucwords($request->input('nom')),
            'race' => ucwords($request->input('race')),
            'categorie_2' => $request->input('categorie_2'),
            'date_naiss' => $request->input('date_naiss')
        ]);

        $chien->users()->attach($user->id);
        $userDb = User::find($user->id);
        $userDb->save();

        return redirect()->route('chiens.index')->with('status', $request->nom . ' a rejoint l\'équipe !');
    }
 
    // ___________________________________________________________________________
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Chien $chien , Vaccin $vaccins)
    {
        $vaccins = Vaccin::get();
        return view('Pages.Chiens.ChienModif', ['chien' => $chien, 'vaccins' => $vaccins]);
    }

    // ___________________________________________________________________________
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chien $chien)
    {
        $user = Auth::user();

        $request->validate([
            'nom' => 'required | min:2 | max:40',
            'race' => 'required | min:3 | max:50',
            'categorie_2' => 'required ',
            'date_naiss' => 'required ',
        ]);

        $chien->update([
            'user_id' => $user->id,
            'nom' => ucwords($request->input('nom')),
            'race' => ucwords($request->input('race')),
            'categorie_2' => $request->input('categorie_2'),
            'date_naiss' => $request->input('date_naiss'),
        ]);

        return redirect()->route('chiens.index')->with('status', 'Les informations concernant ' . $request->nom . ' ont bien été mises à jour.');
    }

    // ___________________________________________________________________________
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chien = Chien::find($id);
        $chien->delete();
        return redirect()->route('chiens.index')->with('status', $chien->nom . ' a bien été supprimé');
    }

}
