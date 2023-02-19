<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Chien;

class ChienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id; // récupération de l'id du user connecté
        $user = User::find($userId); // récupération du user en base de données avec la fonction find()
        $user->load('chiens'); // chargement de ses chiens avec un eager loading
        return view('Pages.Users.mon-compte', ['user' => $user]); // on retourne la vue pour afficher les chiens en y injectant le user
    }

    public function age(Chien $chien)
    {
        $anniv = $chien->date_naiss;
        $auj = now();
        $age = $auj->diff($anniv);
        return $age;
    }
}
