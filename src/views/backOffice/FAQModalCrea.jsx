import React from "react";

const FAQModalCrea = () => {
	return (
		<div className="text-center">
			{/* <!-- Button trigger modal CREATE QR --> */}
			<button
				type="button"
				className="btn btn-info btn-lg my-4"
				data-bs-toggle="modal"
				data-bs-target="#staticBackdrop">
				+ Ajouter une nouvelle Q/R
			</button>

			{/* <!-- Modal --> */}
			<div
				className="modal modal-xl fade"
				id="staticBackdrop"
				data-bs-backdrop="static"
				data-bs-keyboard="false"
				tabindex="-1"
				aria-labelledby="staticBackdropLabel"
				aria-hidden="true">
				<div className="modal-dialog text-bg-light">
					<div className="modal-content">
						<div className="modal-header">
							<h1 className="modal-title fs-5" id="staticBackdropLabel">
								Création d'une nouvelle QUESTION / RÉPONSE
							</h1>
							<button
								type="button"
								className="btn-close"
								data-bs-dismiss="modal"
								aria-label="Close"></button>
						</div>
						<div className="modal-body">
							{/* {{-- début formulaire création QR --}} */}
							<form
								method="post"
								action="{{ route('faq.store') }}"
								className="text-start">
								@csrf
								{/* {{-- input QUESTION --}} */}
								<div className="mb-3">
									<label for="question" className="form-label font-bold">
										QUESTION
									</label>
									{/* <textarea className="form-control @error('question') is-invalid @enderror" id="question" name="question" type="text"
                                placeholder="Ex. : Je n'aime pas courir, est-ce que je peux quand même aimer le canicross ?" required>{{ old('question') }}</textarea> */}
								</div>
								{/* {{-- input REPONSE --}} */}
								<div className="mb-3">
									<label for="reponse" className="form-label font-bold">
										RÉPONSE
									</label>
									{/* <textarea type="text" className="form-control @error('reponse') is-invalid @enderror" id="reponse" name="reponse"
                                placeholder="Ex. : Tout à fait ! Le canicross est une autre dimension de la course à pied, et nombreux sont les pratiquants qui se surprennent à aimer courir une fois qu'ils se mettent au canicross. Courir avec son chien, ça change tout ;)"
                                required>{{ old('reponse') }}</textarea> */}
								</div>
								{/* {{-- bouton VALIDER --}} */}
								<div className="text-center">
									<button type="submit" className="btn btn-success btn-lg">
										AJOUTER CETTE NOUVELLE QUESTION/RÉPONSE
									</button>
								</div>
							</form>
						</div>

						{/* {{-- bouton ANNULER --}} */}
						<div className="modal-footer">
							<button
								type="button"
								className="btn btn-secondary"
								data-bs-dismiss="modal">
								Annuler
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
};
export default FAQModalCrea;
