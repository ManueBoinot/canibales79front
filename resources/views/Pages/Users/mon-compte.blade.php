@extends('layouts/app')

@section('content')
    <div class="container text-bg-light vh-100 py-5">
        <div class="row">
            <h1 class="text-center mb-4">MON ESPACE PERSONNEL</h1>
        </div>

        {{-- INFORMATIONS PERSONNELLES --}}
        <div class="row mx-auto">
            <div class="col-3">
                <p>NOM</p>
                <p >PRÉNOM</p>
                <p>EMAIL</p>
                <p>TÉLÉPHONE</p>
                <p>VOIE</p>
                <p>COMPLÉMENT D'ADRESSE</p>
                <p>CODE POSTAL</p>
                <p>COMMUNE</p>
            </div>

            <div class="col">
                <p>{{ $user->nom }}</p>
                <p>{{ $user->prenom }}</p>
                <p>{{ $user->email }}</p>
                <p>{{ $user->tel }}</p>
                <p>{{ $user->adr_ligne_1 }}</p>
                <p>{{ $user->adr_ligne_2 }}-</p>
                <p>{{ $user->code_postal }}</p>
                <p>{{ $user->commune }}</p>
            </div>
        </div>
    </div>
@endsection
