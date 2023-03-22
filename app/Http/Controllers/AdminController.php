<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\FAQ;
use Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    // ____________________________________________________________________________
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            $users = User::all()->sortBy('nom');
            $faqs = FAQ::all();
            return view('Pages.Admin.BackOfficeIndex', ['users' => $users, 'faqs' => $faqs]);
        }
        abort(403);
    }
}
