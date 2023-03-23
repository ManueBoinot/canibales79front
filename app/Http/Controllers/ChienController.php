<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Chien;
use Illuminate\Support\Arr;

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
    public function show(Chien $chien, User $user)
    {
        $user = Auth::user();
        $chien->load('users');
        return view('pages.users.mon-compte', ['user' => $user]);
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

        $user = Auth::user();

        $request->validate([
            'nom' => 'required | min:2 | max:40',
            'race' => 'required | min:3 | max:50',
            'categorie_2' => 'required ',
            'date_naissance' => 'required ',
            'vaccins' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $chien = Chien::create([
            'user_id' => $user->id,
            'nom' => ucwords($request->input('nom')),
            'race' => ucwords($request->input('race')),
            'categorie_2' => $request->input('categorie_2'),
            'date_naissance' => $request->input('date_naissance')
        ]);

        $chien->vaccins = isset($request['vaccins']) ? uploadVaccinsChiens($request['vaccins']) : null;
        $chien->save();

        $chien->users()->attach($user->id);

        return redirect()->route('user.show', ['user' => $user])->with('status', $request->nom . ' a rejoint l\'équipe !');
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

        $chien->load('users');
        $user = Auth::user();

        $users = Arr::pluck($chien->users, 'id');

        if (in_array($user->id, $users)) {
            return view('Pages.Chiens.ChienModif', ['chien' => $chien]);
        }
        abort(403);
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
            'date_naissance' => 'required ',
            'vaccins' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $chien->update([
            'user_id' => $user->id,
            'nom' => ucwords($request->input('nom')),
            'race' => ucwords($request->input('race')),
            'categorie_2' => $request->input('categorie_2'),
            'date_naissance' => $request->input('date_naissance')
        ]);

        $chien->vaccins = isset($request['vaccins']) ? uploadVaccinsChiens($request['vaccins']) : null;
        $chien->save();

        return redirect()->route('user.show', ['user' => $user])->with('status', 'Les informations concernant ' . $request->nom . ' ont bien été mises à jour.');
    }

    // ___________________________________________________________________________
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chien $chien, User $user)
    {
        $user = Auth::user();
        $chien->delete();
        return redirect()->route('user.show', ['user' => $user])->with('status', 'Le chien a bien été supprimé');
    }
}
