<?php

namespace App\Http\Controllers;

use App\Models\BureauMembre;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;

class BureauMembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bureaumembres = BureauMembre::all();
        return view('Pages.LeClub', ['bureaumembres' => $bureaumembres]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BureauMembre  $bureaumembre
     * @return \Illuminate\Http\Response
     */
    public function edit(BureauMembre $bureaumembre)
    {
        if (Auth::user()->isAdmin()) {
            return view('Pages.BackOffice.BureauMembreModif', ['bureaumembre' => $bureaumembre]);
        }
        abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BureauMembre  $bureaumembre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BureauMembre $bureaumembre)
    {
        if (Auth::user()->isAdmin()) {

            $request->validate([
                'prenom' => 'string|regex:/^[a-zA-Z]+$/|min:2|max:40|required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ], [
                'prenom.required' => 'Merci d\'entrer un prénom ou d\'annuler l\'action',
                'prenom.min' => 'Le prénom doit comporter au moins 2 caractères.',
                'prenom.max' => 'Le prénom doit comporter maximum 40 caractères.',
                'prenom.regex' => 'Le prénom doit être composé uniquement de lettres.',
                'image.mimes' => 'L\'image doit être au format png, jpg, jpeg, gif ou svg.',
                'image.image' => 'L\'image ne doit pas dépasser 2 Mo.'
            ]);

            $fileName = '';

            if ($request->hasFile('image')) {
                $fileName = strtolower($bureaumembre->prenom) . '-photo.' . $request->image->extension();
                $request->image->storeAs('public/uploads', $fileName);
                if ($bureaumembre->image) {
                    Storage::delete('public/uploads/' . $bureaumembre->image);
                }
            } else {
                $fileName = $bureaumembre->image;
            }

            $bureaumembre->update([
                'prenom' => ucwords($request->input('prenom')),
                'image' => $fileName
            ]);

            $bureaumembre->save();

            return redirect()->route('admin.index')->with('status', 'La mise à jour a bien été effectuée');
        }

        abort(403);
    }
}
