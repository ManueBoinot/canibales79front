@extends('layouts.app')

@section('content')
    <div class="container text-bg-dark py-5 px-md-5">
        <h1 class="text-center mb-5">MODIFICATION D'UNE QUESTION/RÉPONSE</h1>
        <div class="text-center">
            {{-- début formulaire modif QR --}}
            <form method="post" action="{{ route('faq.update', $faq) }}" class="text-start">
                @method('put')
                @csrf
                <input type="hidden" name="faq_id" value="{{ $faq->id }}">

                {{-- input QUESTION --}}
                <div class="mb-3">
                    <label for="question" class="form-label fw-bold">QUESTION À MODIFIER</label>
                    <input class="form-control" id="question" name="question" type="text" value="{{ $faq->question }}"
                        placeholder="Question actuelle : {{ $faq->question }}" required>
                </div>

                {{-- input REPONSE --}}
                <div class="mb-3">
                    <label for="reponse" class="form-label fw-bold">RÉPONSE À MODIFIER</label>
                    <input type="text" class="form-control" id="reponse" name="reponse"
                        placeholder="Réponse actuelle : {{ $faq->reponse }}" value="{{ $faq->reponse }}" required>
                </div>

                {{-- bouton SUBMIT --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-success my-3">Valider la mise à jour des informations</button>
                </div>
        </div>
    </div>
@endsection
