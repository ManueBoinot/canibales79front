@extends('layouts/app')

@section('content')
    <div class="container text-bg-light min-vh-100 p-3">
        <h1 class="text-center mb-4">MON ESPACE</h1>

        {{-- INFORMATIONS PERSONNELLES --}}
        <div class="row border p-2 p-md-4 mx-md-5">
            <div class="row justify-content-center">
                <h2 class="text-center">Informations personnelles</h2>
            </div>


            <div class="row justify-content-center pt-3 pt-md-5">

                <div class="col-4 offset-1 col-md-2">
                    <p>NOM</p>
                    <p>PRÉNOM</p>
                    <p>EMAIL</p>
                    <p>TÉLÉPHONE</p>
                </div>

                <div class="col-7 col-md-3">
                    <p class="fw-bold">{{ $user->nom }}</p>
                    <p class="fw-bold">{{ $user->prenom }}</p>
                    <p class="fw-bold">{{ $user->email }}</p>
                    <p class="fw-bold">{{ $user->tel }}</p>
                </div>

                <div class="col-4 offset-1 col-md-2">
                    <p>VOIE</p>
                    <p>COMPLÉMENT D'ADRESSE</p>
                    <p>CODE POSTAL</p>
                    <p>COMMUNE</p>
                </div>

                <div class="col-7 col-md-3">
                    <p class="fw-bold">{{ $user->adr_ligne_1 }}</p>
                    <p class="fw-bold">{{ $user->adr_ligne_2 }}</p>
                    <p class="fw-bold">{{ $user->code_postal }}</p>
                    <p class="fw-bold">{{ $user->commune }}</p>
                </div>
            </div>
        </div>

        {{-- ÉQUIPAGE --}}
        <div class="row p-2 p-md-4 mx-md-5">
            <div class="row justify-content-center">
                <h2 class="text-center my-4">Mes équipiers canins</h2>
            </div>


            <div class="row justify-content-center gap-3">
                @foreach ($user->chiens as $chien)
                    <div class="card col-12 col-md-5">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $chien->nom }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $chien->race }}</h6>
                            <p class="card-text">Né(e) le {{ date('d-m-Y', strtotime($chien->date_naiss)) }} ({{ $chien->age() }} ans)
                            </p>
                            <p></p>

                            {{-- Si chien catégorie 2 --}}
                            @if ($chien->categorie_2 == false)
                                <div class="col-11">
                                    <p class="text-info">{{ $chien->nom }} est un chien de CATÉGORIE 2 : merci de
                                        respecter la
                                        réglementation en vigueur</p>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
