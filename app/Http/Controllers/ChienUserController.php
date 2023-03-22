<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChienUser;
use Auth;

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
}
