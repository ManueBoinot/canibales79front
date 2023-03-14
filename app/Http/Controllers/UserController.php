<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
            ->orderBy('nom', 'asc')
            ->get();
        return view('Pages.Admin.BackOfficeIndex', ['users' => $users]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);
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
        $this->authorize('edit');

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
        $this->authorize('update', $user);

        $request->validate([
            'prenom' => ['required', 'string', 'max:40'],
            'nom' => ['required', 'string', 'max:40'],
            'email' => ['required', 'string', 'email', 'max:40',],
            'date_naiss' => ['required', 'date', 'before:today'],
            'adr_ligne_1' => ['required', 'string', 'max:40'],
            'adr_ligne_2' => ['string', 'max:40'],
            'code_postal' => ['required', 'string', 'max:5'],
            'commune' => ['required', 'string', 'max:40'],
            'tel' => ['required', 'string', 'max:20']
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
        $user->save();

        return redirect()->route('users.show', $user)->with('message', 'Modifications effectuées');
    }

    // ___________________________________________________________________________
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $user)
    {
        $this->authorize('delete', $user);
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.index')->with('status', 'L\'utilisateur a bien été supprimé');
    }
}
