<div class="text-end">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ChienDeleteModal">
        <i class="fa-regular fa-trash-can" title="Supprimer le chien"></i>
    </button>

    <!-- Modal -->
    <div class="modal modal-lg fade text-dark" id="ChienDeleteModal" tabindex="-1" aria-labelledby="ChienDeleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ChienDeleteModalLabel">Supprimer un chien</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center text-danger">
                    <p>Es-tu sûr(e) de vouloir supprimer <span class="fw-bold">{{ $chien->nom }}</span> ?<br>
                        <strong>Cette action est irréversible et supprimera {{ $chien->nom }} de la base de données, y compris pour ses autres maîtres(ses).</strong>
                    </p>
                    <form method="post" action="{{ route('chiens.destroy', $chien) }}">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="chien_id" value="{{ $chien->id }}">
                        <button type="submit" class="btn btn-danger">Je confirme vouloir supprimer
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
