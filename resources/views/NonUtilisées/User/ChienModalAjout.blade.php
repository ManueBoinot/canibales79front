<div class="text-center">
    <!-- Button trigger modal CREATE CHIEN -->
    <button type="button" class="btn btn-warning my-2" data-bs-toggle="modal" data-bs-target="#ajoutChien">
        Ajouter un chien existant
    </button>

    <!-- Modal -->
    <div class="modal fade text-dark" id="ajoutChien" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="ajoutChienLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-bg-dark bg-black">
                    <h1 class="modal-title fs-5" id="ajoutChienLabel">Ajouter mon chien</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-black">

                    {{-- RATTACHER UN CHIEN EXISTANT --}}
                    <div class="p-3 mb-5 mx-auto border rounded text-bg-light">
                        <form method="post" action="{{ route('chienuser.store', $user) }}" class="text-start">
                            @csrf

                            <div class="mb-3">
                                <h5 class="text-center py-3 fw-bold">Mon chien est déjà rattaché à un licencié</h5>
                                <?php $chiens = DB::table('chiens')->get(); ?>

                                <select name="chien_id" class="form-select" required>
                                    <option disabled selected>Sélectionner un chien...</option>
                                    @foreach ($chiens as $chien)
                                        <option value="{{ $chien->id }}">{{ $chien->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- bouton VALIDER --}}
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark">Ajouter mon
                                    chien</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- bouton ANNULER --}}
                <div class="modal-footer text-bg-dark bg-black">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>
