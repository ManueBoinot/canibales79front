<div class="text-center">
    <!-- Button trigger modal CREATE CHIEN -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Ajouter un chien
    </button>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Création du chien</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('chiens.store') }}" class="text-start">
                        @csrf
                        {{-- input NOM CHIEN --}}
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input class="form-control" id="nom" name="nom" type="text" required>
                        </div>
                        {{-- input RACE --}}
                        <div class="mb-3">
                            <label for="race" class="form-label">Race</label>
                            <input type="text" class="form-control" id="race" name="race"
                                placeholder="Ex. : ' Border collie ' ou ' Malinois X Labrador '" required>
                        </div>
                        {{-- input DATE NAISSANCE CHIEN --}}
                        <div class="mb-3">
                            <label for="date_naiss" class="form-label">Date de naissance</label>
                            <input class="form-control" id="date_naiss" name="date_naiss" type="date" required>
                        </div>
                        {{-- input CATEGORIE 2 --}}
                        <div class="mb-3">
                            <label for="categorie_2" class="form-label">Chien de catégorie 2 ?</label>
                            <select class="form-select" aria-label="categorie_2" name="categorie_2" required>
                                <option selected>Choisir une réponse</option>
                                <option value="1">Oui</option>
                                <option value="0">Non</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger btn-lg">Ajouter mon
                                chien</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>
