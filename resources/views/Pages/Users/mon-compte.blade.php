@extends('layouts/app')

@section('content')
    <div class="container min-vh-100 p-3 p-lg-5 text-bg-light">
        <h1 class="text-center mb-4">Bienvenue sur ton espace <span class="fw-bold"> {{ $user->prenom }} </span>!</h1>

        {{-- Message lorsqu'un chien a été ajouté au profil --}}
        @if (session('status'))
            <div class="alert alert-success text-center">
                {{ session('status') }}
            </div>
        @endif

        {{-- INFORMATIONS PERSONNELLES --}}
        <div class="row border py-3 px-xl-3 mx-auto align-items-center overflow-auto mb-5 rounded"
            style="background-color: white">

            <div class="col-12">
                <h2 class="text-center pb-4">Informations personnelles</h2>
            </div>


            <div class="col-lg-6 d-flex">
                <div class="col-5">
                    <p>NOM</p>
                </div>
                <div class="col-7">
                    <p class="fw-bold">{{ $user->nom }}</p>
                </div>
            </div>

            <div class="col-lg-6 d-flex">
                <div class="col-5">
                    <p>PRÉNOM</p>
                </div>
                <div class="col-7">
                    <p class="fw-bold">{{ $user->prenom }}</p>
                </div>
            </div>

            <div class="col-lg-6 d-flex">
                <div class="col-5">
                    <p>EMAIL</p>
                </div>
                <div class="col-7">
                    <p class="fw-bold">{{ $user->email }}</p>
                </div>
            </div>

            <div class="col-lg-6 d-flex">
                <div class="col-5">
                    <p>TÉLÉPHONE</p>
                </div>
                <div class="col-7">
                    <p class="fw-bold">{{ $user->tel }}</p>
                </div>
            </div>

            <div class="col-lg-6 d-flex">
                <div class="col-5">
                    <p>ADRESSE</p>
                </div>
                <div class="col-7">
                    <p class="fw-bold">{{ $user->adr_ligne_1 }}</p>
                </div>
            </div>

            <div class="col-lg-6 d-flex">
                <div class="col-5">
                    <p>COMPL. ADR.</p>
                </div>
                <div class="col-7">
                    <p class="fw-bold">{{ $user->adr_ligne_2 }}</p>
                </div>
            </div>

            <div class="col-lg-6 d-flex">
                <div class="col-5">
                    <p>CODE POSTAL</p>
                </div>
                <div class="col-7">
                    <p class="fw-bold">{{ $user->code_postal }}</p>
                </div>
            </div>

            <div class="col-lg-6 d-flex">
                <div class="col-5">
                    <p>COMMUNE</p>
                </div>
                <div class="col-7">
                    <p class="fw-bold">{{ $user->commune }}</p>
                </div>
            </div>

        </div>

        {{-- ÉQUIPAGE --}}
        <div class="row border py-3 px-xl-3 mx-auto align-items-center rounded">
            <div class="row justify-content-center">
                <h2 class="text-center my-4">Coéquipier(s) à 4 pattes</h2>
            </div>


            <div class="row justify-content-center gap-3 mx-auto">
                @foreach ($user->chiens as $chien)
                    <div class="card col-12 col-md-5">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $chien->nom }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $chien->race }}</h6>
                            <p class="card-text">Né(e) le {{ date('d-m-Y', strtotime($chien->date_naiss)) }}
                                ({{ $chien->age($chien) }})
                            </p>
                            <p></p>

                            {{-- Si chien catégorie 2 --}}
                            @if ($chien->categorie_2 == true)
                                <div class="col-11">
                                    <p class="text-info">{{ $chien->nom }} est un chien de CATÉGORIE 2 : merci de
                                        respecter la
                                        réglementation en vigueur</p>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach

                {{-- AJOUTER UNE METHODE POUR AFFICHER " PAS DE CHIEN ENREGISTRÉ " --}}

                <div class="text-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Ajouter un chien
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Création du chien</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ route('chiens.store') }}" class="text-start">
                                        @csrf
                                        {{-- input NOM --}}
                                        <div class="mb-3">
                                            <label for="nom" class="form-label">Nom</label>
                                            <input class="form-control" id="nom" name="nom" type="text"
                                                required>
                                        </div>
                                        {{-- input RACE --}}
                                        <div class="mb-3">
                                            <label for="race" class="form-label">Race</label>
                                            <input type="text" class="form-control" id="race" name="race"
                                                placeholder="Ex. : ' Border collie ' ou ' Malinois X Labrador '" required>
                                        </div>
                                        {{-- input DATE NAISSANCE --}}
                                        <div class="mb-3">
                                            <label for="date_naiss" class="form-label">Date de naissance</label>
                                            <input class="form-control" id="date_naiss" name="date_naiss" type="date"
                                                required>
                                        </div>
                                        {{-- input CATEGORIE --}}
                                        <div class="mb-3">
                                            <label for="categorie_2" class="form-label">Chien de catégorie 2 ?</label>
                                            <select class="form-select" aria-label="categorie_2" name="categorie_2"
                                                required>
                                                <option selected>Choisir une réponse</option>
                                                <option value="1">Oui</option>
                                                <option value="0">Non</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-danger btn-lg">Ajouter mon
                                                chien</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
