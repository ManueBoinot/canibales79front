@extends('layouts/app')

@section('content')
    <div class="container min-vh-100 p-3 p-lg-4 text-bg-light mx-auto">
        <h2 class="my-4 text-center fw-bold">MODIFIER MES INFORMATIONS</h2>


        {{-- MODIFICATION D'INFORMATIONS PERSONNELLES -------------------------- --}}
        <div class="row py-3">
            <form method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
                @csrf @method('put')

                {{-- input NOM --}}
                <div class="row mb-3">
                    <label for="nom" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Nom') }}</label>

                    <div class="col-md-6">
                        <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror"
                            name="nom" value="{{ $user->nom }}" autocomplete="nom" autofocus>

                        @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- input PRENOM --}}
                <div class="row mb-3">
                    <label for="prenom" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Prénom') }}</label>

                    <div class="col-md-6">
                        <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror"
                            name="prenom" value="{{ $user->prenom }}" autocomplete="prenom" autofocus>

                        @error('prenom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- input DATE NAISSANCE --}}
                <div class="row mb-5">
                    <label for="date_naiss" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Date de naissance') }}</label>

                    <div class="col-md-6">
                        <input id="date_naiss" type="date" class="form-control @error('date_naiss') is-invalid @enderror"
                            name="date_naiss" value="{{ $user->date_naiss }}" autocomplete="date_naiss">

                        @error('date_naiss')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- input EMAIL --}}
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Email') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $user->email }}" autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- input TELEPHONE --}}
                <div class="row mb-5">
                    <label for="tel" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Téléphone') }}</label>

                    <div class="col-md-6">
                        <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror"
                            name="tel" value="{{ $user->tel }}" autocomplete="tel">

                        @error('tel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- input ADRESSE LIGNE 1 --}}
                <div class="row mb-3">
                    <label for="adr_ligne_1"
                        class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Adresse') }}</label>

                    <div class="col-md-6">
                        <input id="adr_ligne_1" type="text"
                            class="form-control @error('adr_ligne_1') is-invalid @enderror" name="adr_ligne_1"
                            value="{{ $user->adr_ligne_1 }}" autocomplete="adr_ligne_1">

                        @error('adr_ligne_1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- input ADRESSE LIGNE 2 --}}
                <div class="row mb-3">
                    <label for="adr_ligne_2"
                        class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Complément d\'adresse') }}</label>

                    <div class="col-md-6">
                        <input id="adr_ligne_2" type="text"
                            class="form-control @error('adr_ligne_2') is-invalid @enderror" name="adr_ligne_2"
                            value="{{ $user->adr_ligne_2 }}" autocomplete="adr_ligne_2">

                        @error('adr_ligne_2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- input CODE POSTAL --}}
                <div class="row mb-3">
                    <label for="code_postal"
                        class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Code postal') }}</label>

                    <div class="col-md-6">
                        <input id="code_postal" type="text"
                            class="form-control @error('code_postal') is-invalid @enderror"
                            value="{{ $user->code_postal }}" name="code_postal" autocomplete="code_postal">

                        @error('code_postal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- input COMMUNE --}}
                <div class="row mb-5">
                    <label for="commune" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Commune') }}</label>

                    <div class="col-md-6">
                        <input id="commune" type="text" class="form-control @error('commune') is-invalid @enderror"
                            value="{{ $user->commune }}" name="commune" autocomplete="commune">

                        @error('commune')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                {{-- bouton VALIDER MODIF --}}
                <div class="row text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-dark">
                            {{ __('Valider les modifications') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>



        {{-- MODIFICATION MOT DE PASSE -------------------------- --}}
        <div class="row border rounded py-3">

            <div class="row mx-auto text-center">
                <h3 class="text-center p-3">MOT DE PASSE</h3>
            </div>

            {{-- Formulaire --}}
            <div class="row mx-auto text-center">
                <form method="POST" action="{{ route('updatePassword', $user) }}"> @csrf @method('put')

                    {{-- Ancien mot de passe --}}
                    <div class="row mb-3">
                        <label for="old_password"
                            class="col-md-4 col-form-label text-md-end">{{ __('Ancien mot de passe') }}</label>

                        <div class="col-md-6">
                            <input id="old_password" type="password"
                                class="form-control @error('old_password') is-invalid @enderror" name="old_password"
                                required>

                            @error('old_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- Nouveau mot de passe --}}
                    <div class="row mb-3">
                        <label for="new_password"
                            class="col-md-4 col-form-label text-md-end">{{ __('Nouveau mot de passe') }}</label>

                        <div class="col-md-6">
                            <input id="new_password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="new_password"
                                aria-describedby="passwordHelp" required>

                            <div id="passwordHelp" class="form-text text-start">Le mot de passe doit contenir au moins 8
                                caractères dont au moins 1 majuscule, 1 chiffre et 1 caractère spécial</div>

                            @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- Confirmer mot de passe --}}
                    <div class="row mb-3">
                        <label for="password-confirm"
                            class="col-md-4 col-form-label text-md-end">{{ __('Confirmer le nouveau mot de passe') }}</label>

                        <div class="col-md-6">
                            <input id="password_confirmation" type="password" class="form-control"
                                name="password_confirmation" required>

                            @error('password_confirmation')
                                <span class="invalid-feedback @error('password_confirmation') is-invalid @enderror"
                                    role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- Bouton SUBMIT modif mot de passe --}}
                    <div class="row text-center">
                        <div class="col">
                            <button type="submit" class="btn btn-dark">
                                {{ __('Valider la modification de mot du passe') }}
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        {{-- Suppression de compte --}}
        <div class="row py-3 mx-auto text-center">
            <div class="col">
                <form action="{{ route('users.destroy', $user) }}" method="POST">
                    @csrf @method('delete')
                    <button type="submit" class="btn btn-danger">
                        {{ __('Supprimer mon compte') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
