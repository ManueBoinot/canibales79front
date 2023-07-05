<div class="text-center">
    <!-- Button trigger modal CREATE CHIEN -->
    <button type="button" class="btn btn-danger my-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Créer un chien
    </button>

    <!-- Modal -->
    <div class="modal fade text-dark" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Création du chien</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    {{-- début formulaire création CHIEN --}}
                    <form method="post" action="{{ route('chiens.store') }}" class="text-start"
                        enctype="multipart/form-data">
                        @csrf
                        {{-- input NOM CHIEN --}}
                        <div class="mb-3">
                            <label for="nom" class="form-label fw-bold">Nom</label>
                            <input class="form-control" id="nom" name="nom" type="text"
                                value="{{ old('nom') }}" required>
                        </div>
                        {{-- input RACE --}}
                        <div class="mb-3">
                            <label for="race" class="form-label fw-bold">Race</label>
                            <input type="text" class="form-control" id="race" name="race"
                                placeholder="Ex. : ' Border collie ' ou ' Malinois X Labrador '"
                                value="{{ old('race') }}" required>
                        </div>
                        {{-- input DATE NAISSANCE CHIEN --}}
                        <div class="mb-3">
                            <label for="date_naissance" class="form-label fw-bold">Date de naissance</label>
                            <input class="form-control" id="date_naissance" name="date_naissance" type="date"
                                value="{{ old('date_naiss') }}" required>
                        </div>
                        {{-- input CATEGORIE 2 --}}
                        <div class="mb-3">
                            <label for="categorie_2" class="form-label fw-bold">Chien de catégorie 2 ?</label>
                            <select class="form-select" aria-label="categorie_2" name="categorie_2"
                                value="{{ old('categorie_2') }}" required>
                                <option value="0" selected>Choisir une réponse</option>
                                <option value="0">Non</option>
                                <option value="1">Oui</option>
                            </select>
                        </div>
                        {{-- input VACCINS --}}
                        <div class="my-2">
                            <label for="vaccins" class="form-label fw-bold">Carnet de vaccination</label>
                            <input name="vaccins" type="file" class="form-control text-secondary" id="vaccins"
                                value="{{ old('vaccins') }}">
                            <div class="form-text">Fichiers images uniquement (jpeg, jpg, png, gif, svg) | Max 2 Mo
                            </div>
                        </div>
                        {{-- bouton VALIDER --}}
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger btn-lg">Ajouter mon
                                chien</button>
                        </div>
                    </form>
                </div>

                {{-- bouton ANNULER --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                </div>
                
            </div>
        </div>
    </div>
</div>
