<div class="my-5">
    <p>
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
            Gestion de la FAQ
        </button>
    </p>
    <div style="min-height: 120px;">
        <div class="collapse" id="collapseWidthExample">
            <div class="card card-body">

                {{-- Bouton de modification --}}
                @include('Composants.BackOffice.FAQModalCrea')

                {{-- FAQ LOOP --}}
                @foreach ($faqs as $faq)
                    <div class="card my-3 mx-auto" style="width: 800px; max-width: 80vw">
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

                                {{-- Bouton modal SUPPRESSION QUESTION/REPONSE --}}
                                @include('Composants.BackOffice.FAQModalDelete')

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
