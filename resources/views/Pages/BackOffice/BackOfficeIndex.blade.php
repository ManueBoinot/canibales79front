@extends('layouts.app')

@section('content')
    <div class="container py-5 px-md-5 text-center" style="min-height: 80vh">

        <h1>INTERFACE ADMINISTRATEUR</h1>
        
        <h2></h2>

        {{-- LISTE DES UTILISATEURS --}}
        {{-- @include('Composants.BackOffice.UsersList') --}}

        {{-- LISTE DES MEMBRES DU BUREAU --}}
        @include('Composants.BackOffice.BureauMembresList')

        {{-- LISTE DES QUESTIONS/REPONSES FAQ --}}
        @include('Composants.BackOffice.FAQList')

    </div>
@endsection
