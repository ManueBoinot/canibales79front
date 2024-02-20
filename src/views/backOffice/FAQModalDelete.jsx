import React from "react";

const FAQModalDelete = () => {
	return (
		<div>
			{/* Button trigger modal */}
			<button
				type="button"
				className="btn btn-danger btn-lg ms-5 mt-2"
				data-bs-toggle="modal"
				data-bs-target="#FAQDeleteModal"
			>
				<i className="fa-regular fa-trash-can" title="Supprimer"></i>
			</button>
			{/* Modal */}
			<div
				className="modal modal-lg fade"
				id="FAQDeleteModal"
				tabindex="-1"
				aria-labelledby="FAQDeleteModalLabel"
				aria-hidden="true"
			>
				<div className="modal-dialog modal-dialog-centered">
					<div className="modal-content">
						<div className="modal-header">
							<h1 className="modal-title fs-5" id="FAQDeleteModalLabel">
								Supprimer la question/réponse
							</h1>
							<button
								type="button"
								className="btn-close"
								data-bs-dismiss="modal"
								aria-label="Close"
							></button>
						</div>
						<div className="modal-body text-center">
							<p>
								Es-tu sûr(e) de vouloir retirer supprimer cette question/réponse
								?<strong>Cette action est irréversible.</strong>
							</p>
							<form method="post" action="{{ route('faq.destroy', $faq) }}">
								<input type="hidden" name="faq" value="{{ $faq->id }}" />
								<button type="submit" className="btn btn-danger">
									Je confirme cette action
								</button>
							</form>
						</div>
						<div className="modal-footer">
							<button
								type="button"
								className="btn btn-secondary"
								data-bs-dismiss="modal"
							>
								Annuler
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
};
export default FAQModalDelete;
