<div class="text-end">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-danger btn-lg" data-bs-toggle="modal" data-bs-target="#FAQDeleteModal">
        <i class="fa-regular fa-trash-can"></i>
    </button>

    <!-- Modal -->
    <div class="modal modal-lg fade text-dark" id="FAQDeleteModal" tabindex="-1" aria-labelledby="FAQDeleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="FAQDeleteModalLabel">Retirer un chien</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Es-tu sûr(e) de vouloir retirer supprimer cette question/réponse
                        ?<br>
                        <strong>Cette action est irréversible.</strong>
                    </p>
                    <form method="post" action="{{ route('faq.destroy', $faq) }}">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="faq" value="{{ $faq->id }}">
                        <button type="submit" class="btn btn-danger">Je confirme cette action</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>
