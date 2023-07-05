@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Créer un compte') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            {{-- Champ NOM --}}
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Nom</label>

                                <div class="col-md-6">
                                    <input id="nom" type="text"
                                        class="form-control @error('nom') is-invalid @enderror" name="nom"
                                        value="{{ old('nom') }}" required autocomplete="nom">
                                </div>
                            </div>

                            {{-- Champ PRENOM --}}
                            <div class="row mb-3">
                                <label for="prenom" class="col-md-4 col-form-label text-md-end">Prénom</label>

                                <div class="col-md-6">
                                    <input id="prenom" type="text"
                                        class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                        value="{{ old('prenom') }}" required autocomplete="prenom">
                                </div>
                            </div>

                            {{-- Champ DATE NAISSANCE --}}
                            <div class="row mb-3">
                                <label for="date_naissance" class="col-md-4 col-form-label text-md-end">Date de
                                    naissance</label>

                                <div class="col-md-6">
                                    <input id="date_naissance" type="date"
                                        class="form-control @error('date_naissance') is-invalid @enderror"
                                        name="date_naissance" value="{{ old('date_naissance') }}" required>
                                </div>
                            </div>

                            {{-- Champ NUMERO LICENCE --}}
                            <div class="row mb-3">
                                <label for="numero_licence" class="col-md-4 col-form-label text-md-end">Numéro de
                                    licence</label>

                                <div class="col-md-6">
                                    <input id="numero_licence" type="text"
                                        class="form-control @error('numero_licence') is-invalid @enderror"
                                        name="numero_licence" value="{{ old('numero_licence') }}" required>
                                </div>
                            </div>

                            {{-- Champ TYPE LICENCE --}}
                            <div class="row mb-3">
                                <label for="type_licence" class="col-md-4 col-form-label text-md-end">Type de
                                    licence</label>

                                <div class="col-md-6">
                                    <select id="type_licence"
                                        class="form-select @error('type_licence') is-invalid @enderror" name="type_licence"
                                        value="{{ old('type_licence') }}" required>
                                        <option selected>Sélectionner un type de licence</option>
                                        <option value="Loisir">Loisir</option>
                                        <option value="Compétition">Compétition</option>
                                        <option value="Junior">Junior</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Champ CATEGORIE --}}
                            <div class="row mb-3">
                                <label for="categorie" class="col-md-4 col-form-label text-md-end">Catégorie
                                    sportive</label>

                                <div class="col-md-6">
                                    <select id="categorie" class="form-select @error('categorie') is-invalid @enderror"
                                        name="categorie" value="{{ old('categorie') }}" required>
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
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Super
                                                        merci !</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Champ EMAIL --}}
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required>
                                </div>
                            </div>

                            {{-- Champ TELEPHONE --}}
                            <div class="row mb-3">
                                <label for="tel" class="col-md-4 col-form-label text-md-end">Téléphone</label>

                                <div class="col-md-6">
                                    <input id="tel" type="tel"
                                        class="form-control @error('tel') is-invalid @enderror" name="tel"
                                        value="{{ old('tel') }}" required>
                                </div>
                            </div>

                            {{-- Champ ADRESSE LIGNE 1 --}}
                            <div class="row mb-3">
                                <label for="adresse_ligne_1" class="col-md-4 col-form-label text-md-end">Adresse</label>

                                <div class="col-md-6">
                                    <input id="adresse_ligne_1" type="text"
                                        class="form-control @error('adresse_ligne_1') is-invalid @enderror"
                                        name="adresse_ligne_1" value="{{ old('adresse_ligne_1') }}" required>
                                </div>
                            </div>

                            {{-- Champ ADRESSE LIGNE 2 --}}
                            <div class="row mb-3">
                                <label for="adresse_ligne_2" class="col-md-4 col-form-label text-md-end">Complément
                                    d'adresse</label>

                                <div class="col-md-6">
                                    <input id="adresse_ligne_2" type="text"
                                        class="form-control @error('adresse_ligne_2') is-invalid @enderror"
                                        name="adresse_ligne_2" value="{{ old('adresse_ligne_2') }}">
                                </div>
                            </div>

                            {{-- Champ CODE POSTAL --}}
                            <div class="row mb-3">
                                <label for="code_postal" class="col-md-4 col-form-label text-md-end">Code postal</label>

                                <div class="col-md-6">
                                    <input id="code_postal" type="text"
                                        class="form-control @error('code_postal') is-invalid @enderror"
                                        name="code_postal" value="{{ old('code_postal') }}" required>
                                </div>
                            </div>

                            {{-- Champ COMMUNE --}}
                            <div class="row mb-3">
                                <label for="commune" class="col-md-4 col-form-label text-md-end">Commune</label>

                                <div class="col-md-6">
                                    <input id="commune" type="text"
                                        class="form-control @error('commune') is-invalid @enderror" name="commune"
                                        value="{{ old('commune') }}" required>
                                </div>
                            </div>

                            {{-- Champ PASSWORD --}}
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Mot de passe</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required aria-describedby="passwordHelp">

                                    <div id="passwordHelp" class="form-text text-start">Le mot de passe doit contenir au
                                        moins 8
                                        caractères dont au moins 1 majuscule, 1 chiffre et 1 caractère spécial</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmer mot de
                                    passe</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-dark">
                                        {{ __('Je crée mon compte') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
