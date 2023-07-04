@extends('layouts.app')

@section('content')
    <div class="container text-bg-dark py-5 px-md-5">
        <h1 class="text-center mb-5">MISE À JOUR D'UN MEMBRE DU BUREAU</h1>

        {{-- début formulaire mise à jour MEMBRE --}}
        <form method="post" action="{{ route('bureaumembre.update', $bureaumembre) }}" class="text-start pt-5 border-top"
            enctype="multipart/form-data">
            @method('put')
            @csrf

            {{-- PARTIE GAUCHE --}}
            <div class="row mx-auto">
                <div class="col-10 col-md-4 text-center mx-auto mb-5 mb-md-0">
                    {{-- STATUT (non modifiable) --}}
                    <div class="mb-3">
                        <label for="prenom" class="form-label fw-bold">STATUT</label>
                        <p class="text-uppercase fs-3">{{ $bureaumembre->statut }}</p>
                    </div>
                    {{-- IMAGE APERÇU --}}
                    <img src="{{ asset('storage/uploads/' . $bureaumembre->image) }}" width="150px">
                </div>

                {{-- PARTIE DROITE --}}
                <div class="col mx-auto">
                    {{-- input PRENOM --}}
                    <div class="mb-5">
                        <label for="prenom" class="form-label fs-5">Mise à jour du PRÉNOM</label>
                        <input class="form-control text-secondary fst-italic" style="max-width: 500px" id="prenom" name="prenom" type="text"
                            value="{{ $bureaumembre->prenom }}"
                            required>
                    </div>

                    {{-- input IMAGE --}}
                    <div>
                        <label for="image" class="form-label fs-5">Mise à jour de la PHOTO</label>
                        <input type="file" name="image" class="form-control mb-1" style="max-width: 500px" aria-describedby="imageHelp">
                        <small id="imageHelp" class="form-text text-light fst-italic"><i class="fa-solid fa-triangle-exclamation fs-3"></i> FORMAT CARRÉ IMPÉRATIF ! | Taille max. : 2 Mo | Fichiers acceptés : .jpg |.jpeg |.png |.gif |.svg</div>
                    </div>
                </div>

                {{-- bouton SUBMIT --}}
                <div class="row text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-success my-3">VALIDER</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
