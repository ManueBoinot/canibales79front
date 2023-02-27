<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chien;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user->load('role', 'bureau', 'licence', 'chiens');
        return view('Pages.Users.mon-compte', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('Pages.Users.modifier-infos', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'prenom' => ['required', 'string', 'max:40'],
            'nom' => ['required', 'string', 'max:40'],
            'email' => ['required', 'string', 'email', 'max:40',],
            'date_naiss' => ['required', 'date', 'before:today'],
            'adr_ligne_1' => ['required', 'string', 'max:40'],
            'adr_ligne_2' => ['string', 'max:40'],
            'code_postal' => ['required', 'string', 'max:5'],
            'commune' => ['required', 'string', 'max:40'],
            'tel' => ['required', 'string', 'max:20'],
            'att_resp_civ' => ['nullable', 'image', 'mimes:jpeg,jpg,png,gif,svg', 'max:2048'],
            'certif_medic' => ['nullable', 'image', 'mimes:jpeg,jpg,png,gif,svg', 'max:2048'],
            'autoris_parent' => ['nullable', 'image', 'mimes:jpeg,jpg,png,gif,svg', 'max:2048']
        ]);

        $user->prenom = $request->input('prenom');
        $user->nom = $request->input('nom');
        $user->email = $request->input('email');
        $user->date_naiss = $request->input('date_naiss');
        $user->adr_ligne_1 = $request->input('adr_ligne_1');
        $user->adr_ligne_2 = $request->input('adr_ligne_2');
        $user->code_postal = $request->input('code_postal');
        $user->commune = $request->input('commune');
        $user->tel = $request->input('tel');

        $user->att_resp_civ = uploadAttRespCiv($request['att_resp_civ']);
        // $user->certif_medic = isset($request['certif_medic']) ? uploadCertifMedic($request['certif_medic']) : null;
        // $user->autoris_parent = isset($request['autoris_parent']) ? uploadAutorisParent($request['autoris_parent']) : null;
        $user->save();

        return redirect()->route('users.show', $user)->with('message', 'Modifications effectuées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('/home')->with('message', 'Compte utilisateur supprimé');
    }
}
