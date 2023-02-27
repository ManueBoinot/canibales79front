<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'prenom' => ['required', 'string', 'max:40'],
            'nom' => ['required', 'string', 'max:40'],
            'email' => ['required', 'string', 'email', 'max:40', 'unique:users'],
            'date_naiss' => ['required', 'date', 'before:today'],
            'adr_ligne_1' => ['required', 'string', 'max:40'],
            'adr_ligne_2' => ['nullable', 'string', 'max:40'],
            'code_postal' => ['required', 'string', 'max:5'],
            'commune' => ['required', 'string', 'max:40'],
            'tel' => ['required', 'string', 'max:14'],
            'att_resp_civ' => ['nullable', 'file', 'mimes:jpeg,jpg,png,gif,svg,pdf', 'max:2048'],
            'certif_medic' => ['nullable', 'file', 'mimes:jpeg,jpg,png,gif,svg,pdf', 'max:2048'],
            'autoris_parent' => ['nullable', 'file', 'mimes:jpeg,jpg,png,gif,svg,pdf', 'max:2048'],
            'password' => ['required', 'string', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()]
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return $user = User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'date_naiss' => $data['date_naiss'],
            'adr_ligne_1' => $data['adr_ligne_1'],
            'adr_ligne_2' => $data['adr_ligne_2'],
            'code_postal' => $data['code_postal'],
            'commune' => $data['commune'],
            'tel' => $data['tel'],
            'password' => Hash::make($data['password'])
        ]);
    }
}
