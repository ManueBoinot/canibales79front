@extends('layouts.app')

@section('content')
    <div class="container text-bg-dark py-5 px-md-5 text-center">

        <h1>INTERFACE ADMINISTRATEUR</h1>

        {{-- LISTE DES UTILISATEURS --}}
       {{-- @include('Composants.BackOffice.UsersList') --}}

        {{-- LISTE DES QUESTIONS/REPONSES FAQ --}}
        @include('Composants.BackOffice.FAQList')

    </div>
@endsection
