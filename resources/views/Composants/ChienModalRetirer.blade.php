<div class="text-end">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ChienRetirerModal">
        <i class="fa-regular fa-trash-can" title="Retirer le chien"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade text-dark" id="ChienRetirerModal" tabindex="-1" aria-labelledby="ChienRetirerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ChienRetirerModalLabel">Retirer un chien</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Es-tu sûr(e) de vouloir retirer <span class="fw-bold">{{ $chien->nom }}</span> de ton équipe
                        ?</strong>
                    </p>
                    <form method="post" action="{{ route('chienuser.destroy', $chien) }}">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="chien_id" value="{{ $chien->id }}">
                        <button type="submit" class="btn btn-danger">Je confirme vouloir retirer
                            {{ $chien->nom }}</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>
