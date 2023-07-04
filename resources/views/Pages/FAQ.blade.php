@extends('layouts.app')

@section('content')
    <div class="container py-5 px-md-5">
        
        <div class="text-center mb-5">
            <h1>FOIRE AUX QUESTIONS</h1>
            <h2 class="my-3 fw-medium">Réponses aux questions les plus fréquemment posées</h5>
        </div>

        {{-- FAQ LOOP --}}
        @foreach ($faqs as $faq)
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">

                    {{-- QUESTION --}}
                    <h2 class="accordion-header" id="{{ $loop->iteration }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $loop->iteration }}" aria-expanded="true"
                            aria-controls="collapse{{ $loop->iteration }}">
                            <h4>{{ $faq->question }}</h4>
                        </button>
                    </h2>

                    {{-- REPONSE --}}
                    <div id="collapse{{ $loop->iteration }}" class="accordion-collapse collapse"
                        aria-labelledby="{{ $loop->iteration }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {{ $faq->reponse }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="text-center">
            <p class="my-4">Votre question reste sans réponse ? Alors <a href="/contact" type="button"
                    class="btn red-button">CONTACTEZ-NOUS !</a>
            </p>
        </div>
    </div>
@endsection
