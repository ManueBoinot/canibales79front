@extends('layouts/app')

@section('content')
    <div class="container min-vh-100 p-3 p-lg-4 text-bg-light mx-auto">
        <h2 class="my-4 text-center fw-bold">MODIFIER MES INFORMATIONS</h2>

        {{-- MODIFICATION D'INFORMATIONS PERSONNELLES -------------------------- --}}
        <div class="row py-3">
            <form method="POST" action="{{ route('user.update', $user) }}" enctype="multipart/form-data">
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
                    <label for="date_naissance"
                        class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Date de naissance') }}</label>

                    <div class="col-md-6">
                        <input id="date_naissance" type="date"
                            class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance"
                            value="{{ $user->date_naissance }}" autocomplete="date_naissance">

                        @error('date_naissance')
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

                {{-- Champ NUMERO LICENCE --}}
                <div class="row mb-3">
                    <label for="numero_licence" class="col-md-4 col-form-label text-md-end">Numéro de
                        licence</label>

                    <div class="col-md-6">
                        <input id="numero_licence" type="text"
                            class="form-control @error('numero_licence') is-invalid @enderror" name="numero_licence"
                            value="{{ $user->numero_licence }}" required>

                        @error('numero_licence')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- Champ TYPE LICENCE --}}
                <div class="row mb-3">
                    <label for="type_licence" class="col-md-4 col-form-label text-md-end">Type de
                        licence</label>

                    <div class="col-md-6">
                        <select aria-label="type_licence" id="type_licence"
                            class="form-select @error('type_licence') is-invalid @enderror" name="type_licence" required>
                            <option value="{{ $user->type_licence }}" selected>Sélectionner un type de licence</option>
                            <option value="Loisir">Loisir</option>
                            <option value="Compétition">Compétition</option>
                            <option value="Junior">Junior</option>
                        </select>

                        @error('type_licence')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- Champ CATEGORIE --}}
                <div class="row mb-3">
                    <label for="categorie" class="col-md-4 col-form-label text-md-end">Catégorie
                        sportive</label>

                    <div class="col-md-6">
                        <select id="categorie" class="form-select @error('categorie') is-invalid @enderror" name="categorie"
                            value="{{ old('categorie') }}" required>
                            <option selected>Sélectionner une catégorie sportive</option>
                            <option value="benjamin">Benjamin(e)</option>
                            <option value="minime">Minime</option>
                            <option value="cadet">Cadet(te)</option>
                            <option value="junior">Junior</option>
                            <option value="adulte">Adulte</option>
                            <option value="sénior">Sénior</option>
                            <option value="vétéran 1">Vétéran(e) 1</option>
                            <option value="vétéran 2">Vétéran(e) 2</option>
                            <option value="vétéran 3">Vétéran(e) 3</option>
                        </select>

                        <!-- Button trigger modal -->
                        <a class="link-danger fst-italic" href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Un doute sur ta catégorie ?
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Les catégories
                                            d'âge
                                            en
                                            sport</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body overflow-auto text-center">
                                        <img src="../assets/categories-fslc.png" style="width: fit-content"
                                            alt="infos sur les catégories d'âge en sport">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Super
                                            merci !</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @error('categorie')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- input ADRESSE LIGNE 1 --}}
                <div class="row mb-3">
                    <label for="adresse_ligne_1"
                        class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Adresse') }}</label>

                    <div class="col-md-6">
                        <input id="adresse_ligne_1" type="text"
                            class="form-control @error('adresse_ligne_1') is-invalid @enderror" name="adresse_ligne_1"
                            value="{{ $user->adresse_ligne_1 }}" autocomplete="adresse_ligne_1">

                        @error('adresse_ligne_1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- input ADRESSE LIGNE 2 --}}
                <div class="row mb-3">
                    <label for="adresse_ligne_2"
                        class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Complément d\'adresse') }}</label>

                    <div class="col-md-6">
                        <input id="adresse_ligne_2" type="text"
                            class="form-control @error('adresse_ligne_2') is-invalid @enderror" name="adresse_ligne_2"
                            value="{{ $user->adresse_ligne_2 }}" autocomplete="adresse_ligne_2">

                        @error('adresse_ligne_2')
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

        {{-- _________________________________________________________________________________________________ --}}
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

        {{-- ________________________________________________________________________________________________ --}}
        {{-- Suppression de compte --}}
        <div class="row py-3 mx-auto text-center">
            @include('Composants.UserModalDelete')
        </div>
    </div>
@endsection
