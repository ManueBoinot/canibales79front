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
                            name="nom" value="{{ $user->nom }}" required autocomplete="nom" autofocus>

                        @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- input PRENOM --}}
                <div class="row mb-5">
                    <label for="prenom" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Prénom') }}</label>

                    <div class="col-md-6">
                        <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror"
                            name="prenom" value="{{ $user->prenom }}" required autocomplete="prenom" autofocus>

                        @error('prenom')
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
                            name="email" value="{{ $user->email }}" required autocomplete="email">

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
                            name="tel" value="{{ $user->tel }}" required autocomplete="tel">

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
                            value="{{ $user->adr_ligne_1 }}" required autocomplete="adr_ligne_1">

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
                            value="{{ $user->code_postal }}" name="code_postal" required autocomplete="code_postal">

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
                            value="{{ $user->commune }}" name="commune" required autocomplete="commune">

                        @error('commune')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                {{-- input CERTIF MEDIF --}}
                <div class="row mb-3">
                    <label for="certif_medic" class="col-md-4 form-label text-md-end fw-bold align-self-center">Certificat
                        médical</label>
                    <div class="col-md-6">
                        <input name="certif_medic" type="file"
                            class="form-control text-secondary @error('certif_medic') is-invalid @enderror"
                            id="certif_medic" value="{{ $user->certif_medic }}">

                        @error('certif_medic')
                            <span class="invalid-feedback" role="alert">
                                <strong>Le document doit être un PDF ou une image</strong>
                            </span>
                        @enderror

                        <div class="form-text text-start fst-italic">Fichiers PDF et images uniquement (jpeg, jpg,
                            png, gif, svg) |
                            Max 2
                            Mo
                        </div>
                    </div>
                </div>

                {{-- input ATT RESP CIV --}}
                <div class="row mb-3">
                    <label for="att_resp_civ"
                        class="col-md-4 form-label text-md-end fw-bold align-self-center">Attestation de
                        responsabilité
                        civile</label>
                    <div class="col-md-6">
                        <input name="att_resp_civ" type="file"
                            class="form-control text-secondary @error('att_resp_civ') is-invalid @enderror"
                            id="att_resp_civ" value="{{ $user->att_resp_civ }}">

                        @error('att_resp_civ')
                            <span class="invalid-feedback" role="alert">
                                <strong>Le document doit être un PDF ou une image</strong>
                            </span>
                        @enderror

                        <div class="form-text text-start fst-italic">Fichiers PDF et images uniquement (jpeg, jpg,
                            png, gif, svg) |
                            Max 2
                            Mo</div>
                    </div>
                </div>

                {{-- input AUTORISATION PARENTALE --}}
                <div class="row mb-3">
                    <label for="autoris_parent"
                        class="col-md-4 form-label text-end fw-bold align-self-center">Autorisation
                        parentale
                        (pour
                        les
                        mineurs)</label>
                    <div class="col-md-6">
                        <input name="autoris_parent" type="file"
                            class="form-control text-secondary @error('autoris_parent') is-invalid @enderror"
                            id="autoris_parent" value="{{ $user->autoris_parent }}">

                        @error('autoris_parent')
                            <span class="invalid-feedback" role="alert">
                                <strong>Le document doit être un PDF ou une image</strong>
                            </span>
                        @enderror

                        <div class="form-text text-start fst-italic">Fichiers PDF et images uniquement (jpeg, jpg,
                            png, gif, svg) |
                            Max 2
                            Mo</div>
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
                    <div class="row mb-3">
                        <label for="old_password"
                            class="col-md-4 col-form-label text-md-end">{{ __('Ancien mot de passe') }}</label>

                        {{-- Ancien mot de passe --}}
                        <div class="col-md-6">
                            <input id="old_password" type="password"
                                class="form-control @error('old_password') is-invalid @enderror" name="old_password"
                                required autocomplete="old-password">

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
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

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
