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

                {{-- Bouton de création --}}
                @include('Composants.BackOffice.FAQModalCrea')

                {{-- FAQ LOOP --}}
                @foreach ($faqs as $faq)
                    <div class="card my-3 mx-auto text-dark" style="width: 800px; max-width: 80vw">
                        <div class="card-body">
                            <h5 class="card-title">Question n°{{ $loop->iteration }} : {{ $faq->question }}</h5>
                            <p class="card-text">{{ substr($faq->reponse, 0, 100) . ' ... ' }}</p>
                            <div class="d-flex justify-content-around">

                                <form method="post" action="{{ route('faq.edit', $faq) }}">
                                    @method('get')
                                    @csrf
                                    <button class="btn btn-warning"><i class="fa-solid fa-pen"></i>
                                        Modifier / supprimer</button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
