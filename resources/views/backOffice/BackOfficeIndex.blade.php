@extends('layouts.app')

@section('content')
    <div class="container py-5 px-md-5 text-center" style="min-height: 80vh">

        <h1>INTERFACE ADMINISTRATEUR</h1>
        
        <p>Vous pouvez ici mettre à jour les membres du Bureau de l'association ainsi que gérer la Foire Aux Questions</p>

        {{-- LISTE DES MEMBRES DU BUREAU --}}
        @include('backOffice.BureauMembresList')

        {{-- LISTE DES QUESTIONS/REPONSES FAQ --}}
        @include('backOffice.FAQList')

    </div>
@endsection
