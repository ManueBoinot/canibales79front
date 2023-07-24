<?php

namespace App\Http\Controllers;

use App\Models\BureauMembre;
use App\Models\User;
use App\Models\Faq;
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
            $faqs = Faq::all();
            $bureaumembres = BureauMembre::all();
            return view('backOffice.BackOfficeIndex', ['users' => $users, 'faqs' => $faqs, 'bureaumembres' => $bureaumembres]);
        }
        abort(403);
    }
}
