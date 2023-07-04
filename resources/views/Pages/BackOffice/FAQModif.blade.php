@extends('layouts.app')

@section('content')
    <div class="container text-bg-dark py-5 px-md-5">
        <h1 class="text-center mb-5">MODIFICATION D'UNE QUESTION/RÉPONSE</h1>
        <div class="text-center">

            {{-- début formulaire modif QUESTION/REPONSE --}}
            <form method="post" action="{{ route('faq.update', $faq) }}" class="text-start">
                @method('put')
                @csrf

                {{-- input QUESTION --}}
                <div class="mb-3">
                    <label for="question" class="form-label fw-bold">QUESTION À MODIFIER</label>
                    <textarea class="form-control" id="question" name="question" type="text" value={{ $faq->question }}
                        placeholder="{{ $faq->question }}"></textarea>
                </div>

                {{-- input REPONSE --}}
                <div class="mb-3">
                    <label for="reponse" class="form-label fw-bold">RÉPONSE À MODIFIER</label>
                    <textarea class="form-control" id="reponse" name="reponse" type="text" value={{ $faq->reponse }}
                        placeholder="{{ $faq->reponse }}"></textarea>
                </div>

                {{-- bouton SUBMIT --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-success me-2 mt-2" title="Valider">Valider les modifications</button>
                    <a type="button" href="/admin" class="btn btn-secondary mt-2 mx-2" title="Annuler">Annuler</a>
                    {{-- Bouton modal SUPPRESSION QUESTION/REPONSE --}}
                    @include('Composants.BackOffice.FAQModalDelete')
                </div>
            </form>
        </div>
    </div>
@endsection
