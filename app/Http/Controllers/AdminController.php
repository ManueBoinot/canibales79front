<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Entrainement;
use App\Models\FAQ;

class AdminController extends Controller
{
    public function index(){
        $users = User::all()->sortBy('nom');
        $entrainements = Entrainement::all();
        $faqs = FAQ::all();
        return view('Pages.Admin.BackOfficeIndex',['users'=>$users, 'entrainements' => $entrainements, 'faqs'=>$faqs]);
     }
}
