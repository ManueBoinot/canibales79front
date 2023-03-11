@extends('layouts/app')

@section('content')
    <div class="text-bg-light">
        <div class="row">
            <h1 class="text-center mb-4 fw-bold">MON ESPACE PERSONNEL</h1>
        </div>

        {{-- INFORMATIONS ENREGISTRÉES USER --}}
        <div class="row border text-center rounded px-5 py-3 mb-5">

            {{-- INFORMATIONS PERSONNELLES --}}
            <div class="row text-center mx-auto px-5 pb-4 fs-4">

                <div class="row fs-4">
                    <h3 class="mb-3">INFORMATIONS PERSONNELLES</h3>
                </div>

                <div class="row p-2 rounded">
                    <div class="col-md-4 d-flex justify-content-center">
                        <p class="pe-4 m-1">NOM</p>
                        <p class="m-1">{{ $user->nom }}</p>
                    </div>

                    <div class="col-md-4 d-flex justify-content-center">
                        <p class="pe-4 m-1">PRÉNOM</p>
                        <p class="m-1">{{ $user->prenom }}</p>
                    </div>

                    <div class="col-md-4 d-flex justify-content-center">
                        <p class="pe-4 m-1">EMAIL</p>
                        <p class="m-1">{{ $user->email }}</p>
                    </div>

                    <div class="col-md-4 d-flex justify-content-center">
                        <p class="pe-4 m-1">TÉLÉPHONE</p>
                        <p class="m-1">{{ $user->tel }}</p>
                    </div>
                </div>

                <div class="row border-top text-center mx-auto px-5 pb-4 fs-4">
                    <div class="col-12 col-lg-5 mx-auto text-start border rounded">
                        <div class="row p-4">
                            <h5 class="text-center py-2 fw-bold border-bottom">ADRESSE</h5>
                            <div class="col-4">
                                <p>RUE</p>
                                <p>COMPLÉMENT D'ADRESSE</p>
                                <p>CODE POSTAL</p>
                                <p>COMMUNE</p>
                            </div>

                            <div class="col-8">
                                <p>{{ $user->adr_ligne_1 }}</p>
                                <p>{{ $user->adr_ligne_2 }}</p>
                                <p>{{ $user->code_postal }}</p>
                                <p>{{ $user->commune }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- MODIFICATION D'INFORMATIONS -------------------------- --}}
        <div class="row text-center border-top">
            <div class="row">
                <h1 class="mt-3 my-4 fw-bold">MODIFIER LES INFORMATIONS</h1>
            </div>

            <div class="col-12 col-lg-6">

                {{-- Modif nom, prénom, email, téléphone ------------------------------------ --}}
                <div class="row border rounded p-3 mx-auto mb-4">
                    <div class="row">
                        <h3 class="text-center p-3">INFORMATIONS PERSONNELLES</h3>
                    </div>

                    <div class="row">
                        <form method="POST" action="{{ route('users.update', $user) }}">
                            @csrf @method('put')

                            <div class="row mb-3">
                                <label for="nom"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="nom" type="text"
                                        class="form-control @error('nom') is-invalid @enderror" name="nom"
                                        value="{{ $user->nom }}" required autocomplete="nom" autofocus>

                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="prenom"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Prénom') }}</label>

                                <div class="col-md-6">
                                    <input id="prenom" type="text"
                                        class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                        value="{{ $user->prenom }}" required autocomplete="prenom" autofocus>

                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Courriel') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $user->email }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 mt-4">
                                <label for="rue"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Voie') }}</label>

                                <div class="col-md-6">
                                    <input id="voie" type="text"
                                        class="form-control @error('voie') is-invalid @enderror" name="voie"
                                        value="{{ $user->adr_ligne_1 }}" required autocomplete="voie">

                                    @error('voie')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 mt-4">
                                <label for="rue"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Complément d\'adresse') }}</label>

                                <div class="col-md-6">
                                    <input id="adr_ligne_2" type="text"
                                        class="form-control @error('adr_ligne_2') is-invalid @enderror" name="adr_ligne_2"
                                        value="{{ $user->adr_ligne_2 }}" required autocomplete="adr_ligne_2">

                                    @error('adr_ligne_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="code_postal"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Code postal') }}</label>

                                <div class="col-md-6">
                                    <input id="code_postal" type="text"
                                        class="form-control @error('code_postal') is-invalid @enderror"
                                        value="{{ $user->code_postal }}" name="code_postal" required
                                        autocomplete="code_postal">

                                    @error('code_postal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="commune"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Commune') }}</label>

                                <div class="col-md-6">
                                    <input id="commune" type="text"
                                        class="form-control @error('commune') is-invalid @enderror"
                                        value="{{ $user->commune }}" name="commune" required autocomplete="commune">

                                    @error('commune')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-6 mx-auto">
                                    <button type="submit" class="btn btn-warning">
                                        {{ __('Valider les modifications') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                {{-- Modif mot de passe ------------------------------------ --}}
                <div class="row border rounded p-3 mx-auto my-2">

                    <div class="row mx-auto">
                        <h3 class="text-center p-3">MOT DE PASSE</h3>
                    </div>

                    {{-- Formulaire --}}
                    <div class="row mx-auto">
                        <form method="POST" action="{{ route('updatePassword', $user) }}"> @csrf @method('put')
                            <div class="row mb-3">
                                <label for="old_password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Ancien mot de passe') }}</label>

                                {{-- Ancien mot de passe --}}
                                <div class="col-md-6">
                                    <input id="old_password" type="password"
                                        class="form-control @error('old_password') is-invalid @enderror"
                                        name="old_password" required autocomplete="old-password">

                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Nouveau mot de passe --}}
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nouveau mot de passe') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
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
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            {{-- Bouton SUBMIT modif mot de passe --}}
                            <div class="row mb-0">
                                <div class="col-6 mx-auto">
                                    <button type="submit" class="btn btn-warning">
                                        {{ __('Valider la modification de mot du passe') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>



            {{-- Suppression de compte --}}
            <form action="{{ route('users.destroy', $user) }}" method="POST">
                @csrf @method('delete')
                <div class="row mb-3">
                    <div class="col-6 mx-auto">
                        <button type="submit" class="btn btn-danger">
                            {{ __('Supprimer mon compte') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
