@extends('layouts/app')

@section('content')
    <div class="container min-vh-100 p-3 p-lg-5 text-bg-dark bg-black">

        <h2 class="text-center mb-4 fw-bold">Mettre à jour les infos de <span class="fw-bold">{{ $chien->nom }}</span> </h2>

        <div class="d-flex justify-content-end gap-5">
            {{-- Bouton pour RETIRER le chien de l'équipe --}}
            @include('Composants.User.ChienModalRetirer')

            {{-- Bouton modal SUPPRESSION CHIEN --}}
            @include('Composants.User.ChienModalDelete')
        </div>

        <form method="post" action="{{ route('chiens.update', $chien) }}" class="text-start" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="row">
                @csrf
                <input type="hidden" name="chien_id" value="{{ $chien->id }}">

                {{-- input NOM CHIEN --}}
                <div class="col-sm-6 mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input class="form-control" id="nom" name="nom" type="text"
                        placeholder="{{ $chien->nom }}" value="{{ $chien->nom }}" required>
                </div>

                {{-- input RACE --}}
                <div class="col-sm-6 mb-3">
                    <label for="race" class="form-label">Race</label>
                    <input type="text" class="form-control" id="race" name="race"
                        placeholder="{{ $chien->race }}" value="{{ $chien->race }}" required>
                </div>

                {{-- input DATE NAISSANCE CHIEN --}}
                <div class="col-sm-6 mb-3">
                    <label for="date_naissance" class="form-label">Date de naissance</label>
                    <input class="form-control" id="date_naissance" name="date_naissance" type="date"
                        value="{{ $chien->date_naissance }}" required>
                </div>

                {{-- input CATEGORIE 2 --}}
                <div class="col-sm-6 mb-3">
                    <label for="categorie_2" class="form-label">Chien de catégorie 2 ?</label>
                    <select class="form-select" aria-label="categorie_2" name="categorie_2" required>
                        <option value="{{ $chien->categorie_2 }}" selected>Choisir une réponse</option>
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                    </select>
                </div>

                {{-- input VACCINS --}}
                <div class="col-sm-6 mb-3">
                    <label for="vaccins" class="form-label fw-bold">Carnet de vaccination</label>
                    <input name="vaccins" type="file" class="form-control text-secondary" id="vaccins"
                        value="{{ $chien->vaccins }}">
                    <div class="form-text">Fichiers image uniquement (jpeg, jpg, png, gif, svg) | Max 2 Mo</div>
                </div>

                {{-- bouton SUBMIT --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-success my-3">Valider la mise à jour des informations</button>
                </div>
            </div>
        </form>
    </div>
@endsection
