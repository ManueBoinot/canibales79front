<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Chien;
use Illuminate\Support\Facades\Gate;

class ChienController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    // ___________________________________________________________________________
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Chien $chien)
    {
        if (!Gate::allows('view', $chien)) {
            abort(403);
        }

        $user = Auth::user();
        $chien->load('users');
        return view('Pages.Users.mon-compte', ['chien' => $chien, 'user' => $user]);
    }

    // ___________________________________________________________________________
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Chien $chien)
    {
        if (!Gate::allows('create', $chien)) {
            abort(403);
        }

        $user = Auth::user();

        $request->validate([
            'nom' => 'required | min:2 | max:40',
            'race' => 'required | min:3 | max:50',
            'categorie_2' => 'required ',
            'date_naiss' => 'required ',
            'vaccins' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $chien = Chien::create([
            'user_id' => $user->id,
            'nom' => ucwords($request->input('nom')),
            'race' => ucwords($request->input('race')),
            'categorie_2' => $request->input('categorie_2'),
            'date_naiss' => $request->input('date_naiss')
        ]);

        $chien->vaccins = isset($request['vaccins']) ? uploadVaccinsChiens($request['vaccins']) : null;
        $chien->save();

        $chien->users()->attach($user->id);
        $userDb = User::find($user->id);
        $userDb->save();

        return redirect()->route('users.show', ['user' => $user])->with('status', $request->nom . ' a rejoint l\'équipe !');
    }

    // ___________________________________________________________________________
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Chien $chien)
    {
        if (!Gate::allows('edit', $chien)) {
            abort(403);
        }
        return view('Pages.Chiens.ChienModif', ['chien' => $chien]);
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

        if (!Gate::allows('update', $chien)) {
            abort(403);
        }

        $user = Auth::user();

        $request->validate([
            'nom' => 'required | min:2 | max:40',
            'race' => 'required | min:3 | max:50',
            'categorie_2' => 'required ',
            'date_naiss' => 'required ',
            'vaccins' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $chien->update([
            'user_id' => $user->id,
            'nom' => ucwords($request->input('nom')),
            'race' => ucwords($request->input('race')),
            'categorie_2' => $request->input('categorie_2'),
            'date_naiss' => $request->input('date_naiss')
        ]);

        $chien->vaccins = isset($request['vaccins']) ? uploadVaccinsChiens($request['vaccins']) : null;
        $chien->save();

        return redirect()->route('users.show', ['user' => $user])->with('status', 'Les informations concernant ' . $request->nom . ' ont bien été mises à jour.');
    }

    // ___________________________________________________________________________
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Chien $chien)
    {
        if (!Gate::allows('delete', $chien)) {
            abort(403);
        }

        $user = Auth::user();
        $chien = Chien::find($id);
        $chien->delete();
        return redirect()->route('users.show', ['user' => $user])->with('status', $chien->nom . ' a bien été supprimé');
    }
}
