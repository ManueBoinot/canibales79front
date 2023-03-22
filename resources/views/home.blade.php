@extends('layouts.app')

@section('content')

    {{-- Intégration du texte d'INTRODUCTION --}}
    @include('Composants.TexteIntro')

    {{-- Intégration RUBRIQUES --}}
    @include('Composants.RubriquesAccueil')

    {{-- Intégration ACTU --}}
    @include('Composants.ActuAccueil')
    
@endsection
