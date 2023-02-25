{{-- ÉQUIPAGE --}}
<div class="row py-3 px-xl-5 mx-auto align-items-center overflow-auto mb-5 rounded">

    <div class="row justify-content-center gap-3 mx-auto p-sm-4 border rounded">
        <h2 class="text-center my-4">Coéquipier(s) à 4 pattes</h2>
        @foreach ($user->chiens as $chien)
            <div class="card col-12 col-md-5 text-bg-light">
                <div class="card-body">
                    {{-- Boutons MODIF et SUPPRESSION chien --}}
                    <div class="text-end d-flex justify-content-end gap-1">
                        <form method="post" action="{{ route('chiens.edit', $chien) }}">
                            @method('get')
                            @csrf
                            <input type="hidden" name="chien_id" value="{{ $chien->id }}">
                            <button class="btn btn-outline-dark"><i class="fa-regular fa-pen-to-square"></i></button>
                        </form>
                    </div>

                    {{-- Infos du chien --}}
                    <h5 class="card-title fw-bold">{{ $chien->nom }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $chien->race }}</h6>
                    <p class="card-text">Né(e) le {{ date('d-m-Y', strtotime($chien->date_naiss)) }}
                        <span class="fst-italic"> ({{ $chien->age($chien) }}) </span>
                    </p>
                    <p></p>

                    {{-- Si chien catégorie 2 --}}
                    @if ($chien->categorie_2 == true)
                        <div class="col-11">
                            <p class="text-info">{{ $chien->nom }} est un chien de CATÉGORIE 2 : merci de
                                respecter la
                                réglementation en vigueur</p>
                        </div>
                    @endif

                </div>
            </div>
        @endforeach

        {{-- AJOUTER UNE METHODE POUR AFFICHER " PAS DE CHIEN ENREGISTRÉ " --}}

        @include('Composants.ChienModalCrea')

    </div>
</div>
