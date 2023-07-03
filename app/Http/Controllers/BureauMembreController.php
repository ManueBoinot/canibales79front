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
                'prenom' => 'string|max:40',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $fileName = '';

            if ($request->hasFile('image')) {
                $fileName = strtolower($request->prenom) . time() . '.' . $request->image->extension();
                $request->image->storeAs('public/uploads', $fileName);
                if ($bureaumembre->image) {
                    Storage::delete('public/uploads/' . $bureaumembre->image);
                }
            } else {
                $fileName = $bureaumembre->image;
            }

            $bureaumembre->update([
                'prenom' => $request->input('prenom'),
                'image' => $fileName
            ]);

            $bureaumembre->save();

            return redirect()->route('admin.index')->with('status', 'La mise à jour a bien été effectuée');
        }

        abort(403);
    }
}
