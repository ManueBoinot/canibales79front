<div class="text-center">
    <!-- Button trigger modal CREATE QR -->
    <button type="button" class="btn btn-info btn-lg my-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Ajouter une QUESTION / RÉPONSE
    </button>

    <!-- Modal -->
    <div class="modal modal-xl fade text-dark" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Création d'une nouvelle QUESTION / RÉPONSE
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    {{-- début formulaire création QR --}}
                    <form method="post" action="{{ route('faq.store') }}" class="text-start">
                        @csrf
                        {{-- input QUESTION --}}
                        <div class="mb-3">
                            <label for="question" class="form-label fw-bold">QUESTION</label>
                            <input class="form-control" id="question" name="question" type="text"
                                value="{{ old('question') }}"
                                placeholder="Ex. : Je n'aime pas courir, est-ce que je peux quand même aimer le canicross ?"
                                required>
                        </div>
                        {{-- input REPONSE --}}
                        <div class="mb-3">
                            <label for="reponse" class="form-label fw-bold">RÉPONSE</label>
                            <input type="text" class="form-control" id="reponse" name="reponse"
                                placeholder="Ex. : Tout à fait ! Le canicross est une autre dimension de la course à pied, et nombreux sont les pratiquants qui se surprennent à aimer courir une fois qu'ils se mettent au canicross. Courir avec son chien, ça change tout ;)"
                                value="{{ old('reponse') }}" required>
                        </div>
                        {{-- bouton VALIDER --}}
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg">CRÉER</button>
                        </div>
                    </form>
                </div>

                {{-- bouton ANNULER --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>
