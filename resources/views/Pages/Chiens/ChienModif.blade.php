@extends('layouts/app')

@section('content')
    <div class="container min-vh-100 p-3 p-lg-5 text-bg-light">

        <h2 class="text-center mb-5">Mettre à jour les infos de <span class="fw-bold">{{ $chien->nom }}</span> </h2>

        <form method="post" action="{{ route('chiens.update', $chien) }}" class="text-start">
            @method('put')
            <div class="row">
                @csrf
                <input type="hidden" name="chien_id" value="{{ $chien->id }}">
                {{-- input NOM CHIEN --}}
                <div class="col-sm-6 mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input class="form-control" id="nom" name="nom" type="text" placeholder="{{ $chien->nom }}" value="{{ $chien->nom }}" required>
                </div>
                {{-- input RACE --}}
                <div class="col-sm-6 mb-3">
                    <label for="race" class="form-label">Race</label>
                    <input type="text" class="form-control" id="race" name="race"
                         placeholder="{{ $chien->race }}" value="{{ $chien->race }}" required>
                </div>
                {{-- input DATE NAISSANCE CHIEN --}}
                <div class="col-sm-6 mb-3">
                    <label for="date_naiss" class="form-label">Date de naissance</label>
                    <input class="form-control" id="date_naiss" name="date_naiss" type="date" value="{{ $chien->date_naiss }}" required>
                </div>
                {{-- input CATEGORIE 2 --}}
                <div class="col-sm-6 mb-3">
                    <label for="categorie_2" class="form-label">Chien de catégorie 2 ?</label>
                    <select class="form-select" aria-label="categorie_2"name="categorie_2"  required>
                        <option value="{{ $chien->categorie_2 }}"  selected>Choisir une réponse</option>
                        <option value="1">Oui</option>
                        <option value="0">Non</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-danger btn-lg">Valider la mise à jour des informations</button>
                </div>
            </div>
        </form>

    </div>
@endsection
