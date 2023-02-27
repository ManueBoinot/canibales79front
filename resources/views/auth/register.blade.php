@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            {{-- Champ NOM --}}
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Nom</label>

                                <div class="col-md-6">
                                    <input id="nom" type="text"
                                        class="form-control @error('nom') is-invalid @enderror" name="nom"
                                        value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Champ PRENOM --}}
                            <div class="row mb-3">
                                <label for="prenom" class="col-md-4 col-form-label text-md-end">Prénom</label>

                                <div class="col-md-6">
                                    <input id="prenom" type="text"
                                        class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                        value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Champ DATE NAISSANCE --}}
                            <div class="row mb-3">
                                <label for="date_naiss" class="col-md-4 col-form-label text-md-end">Date de
                                    naissance</label>

                                <div class="col-md-6">
                                    <input id="date_naiss" type="date"
                                        class="form-control @error('date_naiss') is-invalid @enderror" name="date_naiss"
                                        value="{{ old('date_naiss') }}" required autocomplete="date_naiss" autofocus>

                                    @error('date_naiss')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Champ EMAIL --}}
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Champ TELEPHONE --}}
                            <div class="row mb-3">
                                <label for="tel" class="col-md-4 col-form-label text-md-end">Téléphone</label>

                                <div class="col-md-6">
                                    <input id="tel" type="tel"
                                        class="form-control @error('tel') is-invalid @enderror" name="tel"
                                        value="{{ old('tel') }}" required autocomplete="tel" autofocus>

                                    @error('tel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Champ ADRESSE LIGNE 1 --}}
                            <div class="row mb-3">
                                <label for="adr_ligne_1" class="col-md-4 col-form-label text-md-end">Adresse</label>

                                <div class="col-md-6">
                                    <input id="adr_ligne_1" type="text"
                                        class="form-control @error('adr_ligne_1') is-invalid @enderror" name="adr_ligne_1"
                                        value="{{ old('adr_ligne_1') }}" required autocomplete="adr_ligne_1" autofocus>

                                    @error('adr_ligne_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Champ ADRESSE LIGNE 2 --}}
                            <div class="row mb-3">
                                <label for="adr_ligne_2" class="col-md-4 col-form-label text-md-end">Complément
                                    d'adresse</label>

                                <div class="col-md-6">
                                    <input id="adr_ligne_2" type="text"
                                        class="form-control @error('adr_ligne_2') is-invalid @enderror" name="adr_ligne_2"
                                        value="{{ old('adr_ligne_2') }}" autocomplete="adr_ligne_2" autofocus>

                                    @error('adr_ligne_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Champ CODE POSTAL --}}
                            <div class="row mb-3">
                                <label for="code_postal" class="col-md-4 col-form-label text-md-end">Code postal</label>

                                <div class="col-md-6">
                                    <input id="code_postal" type="text"
                                        class="form-control @error('code_postal') is-invalid @enderror" name="code_postal"
                                        value="{{ old('code_postal') }}" required autocomplete="code_postal" autofocus>

                                    @error('code_postal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Champ COMMUNE --}}
                            <div class="row mb-3">
                                <label for="commune" class="col-md-4 col-form-label text-md-end">Commune</label>

                                <div class="col-md-6">
                                    <input id="commune" type="text"
                                        class="form-control @error('commune') is-invalid @enderror" name="commune"
                                        value="{{ old('commune') }}" required autocomplete="commune" autofocus>

                                    @error('commune')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Champ PASSWORD --}}
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Mot de passe</label>

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

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmer mot de
                                    passe</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
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
