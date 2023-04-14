<div class="text-center">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-danger btn-lg" data-bs-toggle="modal" data-bs-target="#UserDeleteModal">
        Supprimer mon compte
    </button>

    <!-- Modal -->
    <div class="modal modal-lg fade text-dark" id="UserDeleteModal" tabindex="-1" aria-labelledby="UserDeleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="UserDeleteModalLabel">Supprimer mon compte</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center text-danger">
                    <p>Es-tu sûr(e) de vouloir supprimer ton compte ?<br>
                        <strong>Cette action est irréversible.</strong>
                    </p>
                    <form action="{{ route('user.destroy', $user) }}" method="POST">
                        @csrf @method('delete')
                        <button type="submit" class="btn btn-danger">
                            {{ __('Supprimer mon compte') }}
                        </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>
