<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
            ->orderBy('nom', 'asc')
            ->get()
            ->load('role', 'chiens');
        return view('Pages.Admin.BackOfficeIndex', ['users' => $users]);
    }

    // ____________________________________________________________________________
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        if ($request->user()->cannot('view', $user)) {
            abort(403);
        }

        $user->load('role', 'chiens');
        return view('pages.users.mon-compte', ['user' => $user]);
    }

    // ____________________________________________________________________________
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        if ($request->user()->cannot('edit', $user)) {
            abort(403);
        }
        return view('pages.users.modifier-infos', ['user' => $user]);
    }

    // ____________________________________________________________________________
    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        if ($request->user()->cannot('update', $user)) {
            abort(403);
        }

        $request->validate([
            'prenom' => ['string', 'max:40'],
            'nom' => ['string', 'max:40'],
            'email' => ['required', 'string', 'email', 'max:40'],
            'numero_licence' => ['required', 'string', 'max:6'],
            'date_naissance' => ['date', 'before:today'],
            'adresse_ligne_1' => ['string', 'max:40'],
            'adresse_ligne_2' => ['nullable', 'string', 'max:40'],
            'code_postal' => ['string', 'max:6'],
            'commune' => ['string', 'max:40'],
            'tel' => ['string', 'max:20']
        ]);

        $user->prenom = $request->input('prenom');
        $user->nom = $request->input('nom');
        $user->email = $request->input('email');
        $user->numero_licence = $request->input('numero_licence');
        $user->type_licence = $request->input('type_licence');
        $user->date_naissance = $request->input('date_naissance');
        $user->adresse_ligne_1 = $request->input('adresse_ligne_1');
        $user->adresse_ligne_2 = $request->input('adresse_ligne_2');
        $user->code_postal = $request->input('code_postal');
        $user->commune = $request->input('commune');
        $user->tel = $request->input('tel');
        $user->save();

        return redirect()->route('user.show', $user)->with('message', 'Modifications effectuées');
    }

    // _________________________________________________________________________
    /**
     * Met à jour le PASSWORD
     *
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, User $user)
    {

        if ($request->user()->cannot('updatePassword', $user)) {
            abort(403);
        }

        $this->validate($request, [
            'new_password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()]
        ]);

        $hashedPassword = $user->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            if (!Hash::check($request->password_confirmation, $hashedPassword)) {

                $user->password = Hash::make($request->password_confirmation);
                $user->save();
                session()->flash('message', 'Le mot de passe a bien été modifié');
                return redirect()->back();
            } else {
                session()->flash('message', 'Le nouveau mot de passe doit être différent de l\'ancien');
                return redirect()->back();
            }
        } else {
            session()->flash('message', 'L\'ancien mot de passe est incorrect');
            return redirect()->back();
        }
    }

    // ___________________________________________________________________________
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        if ($request->user()->cannot('delete', $user)) {
            abort(403);
        }
        $user->delete();

        if (Auth::user()->isAdmin()) {

            return redirect()->route('admin.index')->with('status', 'L\'utilisateur a bien été supprimé');
        }
        return redirect()->route('home')->with('status', 'Ton compte a bien été supprimé');
    }
}
