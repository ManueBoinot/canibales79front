<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChienUser;
use Auth;
use App\Models\User;
use App\Models\Chien;

class ChienUserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ChienUser::create([
            'user_id' => Auth::id(),
            'chien_id' => $request->chien_id
        ]);

        $user = Auth::user();

        return redirect()->route('user.show', ['user' => $user])->with('status', 'Chien ajouté à l\'équipe');
    }

    // ___________________________________________________________________________
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chien $chien)
    {
        $user = Auth::user();
        $user->chiens()->detach();
        $chien->users()->detach();

        return redirect()->route('user.show', ['user' => $user])->with('status', 'Le chien a bien été retiré de l\'équipe');
    }
}
