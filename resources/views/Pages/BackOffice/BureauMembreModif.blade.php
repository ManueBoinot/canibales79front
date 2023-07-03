@extends('layouts.app')

@section('content')
    <div class="container text-bg-dark py-5 px-md-5">
        <h1 class="text-center mb-5">MISE À JOUR D'UN MEMBRE DU BUREAU</h1>
        <div class="text-center">

            {{-- début formulaire mise à jour MEMBRE --}}
            <form method="post" action="{{ route('bureaumembre.update', $bureaumembre) }}" class="text-start" enctype="multipart/form-data">
                @method('put')
                @csrf

                {{-- STATUT (non modifiable) --}}
                <div class="mb-3">
                    <label for="prenom" class="form-label fw-bold">STATUT</label>
                    <p class="text-uppercase">{{$bureaumembre->statut }}</p>
                </div>

                {{-- input NOM --}}
                <div class="mb-3">
                    <label for="nom" class="form-label fw-bold">NOM</label>
                    <input class="form-control" id="nom" name="nom" type="text"
                        value="{{ $bureaumembre->nom }}"
                        placeholder="Nom actuel : {{ $bureaumembre->nom }}">
                </div>


                {{-- input PRENOM --}}
                <div class="mb-3">
                    <label for="prenom" class="form-label fw-bold">PRÉNOM</label>
                    <input class="form-control" id="prenom" name="prenom" type="text"
                        value="{{ $bureaumembre->prenom }}"
                        placeholder="Prénom actuel : {{ $bureaumembre->prenom }}" required>
                </div>

                {{-- input IMAGE --}}
                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">PHOTO</label>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="{{ asset('storage/uploads/'.$bureaumembre->image) }}" width="100px">
                </div>

                {{-- bouton SUBMIT --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-success my-3">Valider la mise à jour de ce membre du Bureau</button>
                </div>
            </form>

        </div>
    </div>
@endsection
