<div class="my-5">
    <p>
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBureau"
            aria-expanded="false" aria-controls="collapseBureau">
            Gestion des membres du Bureau de l'association
        </button>
    </p>

    <div style="min-height: 120px;">
        <div class="collapse" id="collapseBureau">
            <div class="row">

                {{-- FAQ LOOP --}}
                @foreach ($bureaumembres as $bureaumembre)
                    <div class="card col-11 col-md-6 col-xl-2 my-3 mx-auto text-dark">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold">{{ $bureaumembre->statut }}</h5>
                            <p class="card-text">{{ $bureaumembre->prenom }}</p>
                            <img class="pb-2" src="{{ asset('storage/uploads/'.$bureaumembre->image) }}" width="100px">

                            <div class="d-flex justify-content-around">
                                <form method="post" action="{{ route('bureaumembre.edit', $bureaumembre) }}">
                                    @method('get')
                                    @csrf
                                    <button class="btn btn-warning"><i class="fa-solid fa-pen"></i>
                                        Mettre à jour</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
