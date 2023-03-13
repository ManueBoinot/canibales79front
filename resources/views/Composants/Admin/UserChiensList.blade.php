{{-- Infos chiens --}}
<div class="row border-top pt-3">
    <h5 class="text-center">CHIEN(S) DE {{ mb_strtoupper($user->prenom) }}</h5>
    {{-- S'il n'y a pas de chien enregistré --}}
    @if (count($user->chiens) <= 0)
        <small class="text-center text-muted">Pas encore de chien enregistré
        </small>

        @else{{-- S'il y a un/des chiens enregistrés --}}
        @foreach ($user->chiens as $chien)
            <div class="card col-12 col-md-5 mx-auto text-bg-light bg-secondary">
                <div class="card-body">
                    {{-- Infos du chien --}}
                    <h5 class="card-title fw-bold">{{ $chien->nom }}</h5>
                    <h6 class="card-subtitle mb-2">{{ $chien->race }}</h6>
                    <p class="card-text">Né(e) le
                        {{ date('d-m-Y', strtotime($chien->date_naiss)) }}
                        <span class="fst-italic"> ({{ $chien->age($chien) }})
                        </span>
                    </p>

                    @isset($chien->vaccins)
                        <p>
                            <button class="btn btn-dark" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseVaccins" aria-expanded="false"
                                aria-controls="collapseVaccins">
                                Carnet de vaccination
                            </button>
                        </p>
                        <div class="collapse" id="collapseVaccins">
                            <div class="card card-body">
                                <img src="{{ '../../uploads/vaccinsChiens/' . $chien->vaccins }}"
                                    alt="Justificatif des vaccins">
                            </div>
                        </div>
                    @endisset

                    {{-- Si chien catégorie 2 --}}
                    @if ($chien->categorie_2 == true)
                        <div class="col-11">
                            <p class="fw-bold">Chien de CATÉGORIE 2</p>
                        </div>
                    @endif

                </div>
            </div>
        @endforeach
    @endif
</div>
