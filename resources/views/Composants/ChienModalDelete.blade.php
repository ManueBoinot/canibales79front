
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ChienDeleteModal">
    <i class="fa-regular fa-trash-can"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="ChienDeleteModal" tabindex="-1" aria-labelledby="ChienDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ChienDeleteModalLabel">Retirer un chien</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>Es-tu sûr(e) de vouloir retirer <span class="fw-bold">{{ $chien->nom }}</span> de ton équipe ?<br>
                    <strong>Cette action est irréversible.</strong></p>
                <form method="post" action="{{ route('chiens.destroy', $chien) }}">
                    @method('delete')
                    @csrf
                    <input type="hidden" name="chien_id" value="{{ $chien->id }}">
                    <button type="submit" class="btn btn-danger">Je confirme vouloir retirer {{ $chien->nom }}</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>
