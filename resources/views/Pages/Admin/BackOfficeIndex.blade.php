@extends('layouts.app')

@section('content')
    <div class="container text-bg-dark py-5 px-md-5 text-center">

        <h1>INTERFACE ADMINISTRATEUR</h1>

        {{-- Message selon action effectuée --}}
        @if (session('status'))
            <div class="alert alert-success text-center">
                {{ session('status') }}
            </div>
        @endif

        {{-- LISTE DES UTILISATEURS --}}
        @include('Composants.Admin.UsersList')

        {{-- LISTE DES QUESTIONS/REPONSES FAQ --}}
        @include('Composants.Admin.FAQList')

        <a class="btn btn-danger btn-lg" href="{{ route('register') }}">{{ __('Créer un nouveau licencié') }}</a>



        {{-- <form method="get" action="{{ route('entrainements.index') }}">
            @method('get')
            @csrf
            <button class="btn btn-lg btn-info mx-2" title="Voir tous les questions/réponses">Gestion des
                entraînements</button>
        </form> --}}

    </div>
@endsection
