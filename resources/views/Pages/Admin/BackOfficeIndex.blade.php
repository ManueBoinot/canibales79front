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

        {{-- <div class="my-5">
            <form method="get" action="{{ route('users.index') }}">
                @method('get')
                @csrf
                <button class="btn btn-lg btn-info mx-2" title="Voir tous les utilisateurs">Gestion des
                    utilisateurs</button>
            </form>
        </div> --}}

        <div class="my-5">
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample"
                    aria-expanded="false" aria-controls="collapseWidthExample">
                    Gestion de la FAQ
                </button>
            </p>
            <div style="min-height: 120px;">
                <div class="collapse" id="collapseWidthExample">
                    <div class="card card-body">
                        @include('Composants.Admin.FAQModalCrea')
                        {{-- FAQ LOOP --}}
                        @foreach ($faqs as $faq)
                            <div class="card text-bg-light my-3 mx-auto" style="width: 800px; max-width: 80vw">
                                <div class="card-body">
                                    <h5 class="card-title">Question n°{{ $loop->iteration }} : {{ $faq->question }}</h5>
                                    <p class="card-text">{{ substr($faq->reponse, 0, 100) . ' ... ' }}</p>
                                    <div class="d-flex justify-content-around">

                                        <form method="post" action="{{ route('faq.edit', $faq) }}">
                                            @method('get')
                                            @csrf
                                            <input type="hidden" name="faq_id" value="{{ $faq->id }}">
                                            <button class="btn btn-warning"><i class="fa-solid fa-pen"></i>
                                                Modifier</button>
                                        </form>

                                        {{-- Bouton modal SUPPRESSION CHIEN --}}
                                        @include('Composants.Admin.FAQModalDelete')

                                        {{-- <form method="post" action="{{ route('faq.destroy', $faq) }}">
                                            @method('delete')
                                            @csrf
                                            <input type="hidden" name="faq" value="{{ $faq->id }}">
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>
                                                Supprimer</button>
                                        </form> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- <form method="get" action="{{ route('entrainements.index') }}">
            @method('get')
            @csrf
            <button class="btn btn-lg btn-info mx-2" title="Voir tous les questions/réponses">Gestion des
                entraînements</button>
        </form> --}}
    </div>
@endsection
