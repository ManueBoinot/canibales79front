@extends('layouts/app')

@section('content')
    <div class="container min-vh-100 p-3 p-lg-5 text-bg-dark bg-black">

        <h1 class="text-center mb-4 fw-bold">Bienvenue sur ton espace <span class="fw-bold"> {{ $user->prenom }} </span>!</h1>

        {{-- Informations de l'utilisateur --}}
        @include('Composants.UserInfoPerso')

        {{-- Chien(s) de l'utilisateur' --}}
        @include('Composants.ChienCard')

    </div>
@endsection
