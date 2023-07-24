@extends('layouts.app')

@section('content')

    {{-- Intégration du texte d'INTRODUCTION --}}
    @include('CompAccueilIntro')

    {{-- Intégration RUBRIQUES --}}
    @include('CompAccueilRubriques')

    {{-- Intégration ACTU --}}
    @include('CompAccueilActu')
    
@endsection
