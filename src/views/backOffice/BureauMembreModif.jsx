import React from "react";

const BureauMembreModif = () => {
	return (
		<div className="container py-5 px-md-5">
			<h1 className="text-center mb-5">MISE À JOUR D'UN MEMBRE DU BUREAU</h1>

			{/* {{-- début formulaire mise à jour MEMBRE --}} */}
			<form
				method="post"
				action="{{ route('bureaumembre.update', $bureaumembre) }}"
				className="text-start pt-5 border-top"
				enctype="multipart/form-data">
				<div className="row mx-auto">
					<div className="col-10 col-md-4 text-center mx-auto mb-5 mb-md-0">
						{/* {{-- STATUT (non modifiable) --}} */}
						<div className="mb-3">
							<label for="prenom" className="form-label font-bold">
								STATUT
							</label>
							{/* <p className="text-uppercase fs-3">{{ $bureaumembre->statut }}</p> */}
						</div>
						{/* {{-- IMAGE APERÇU --}} */}
						<img
							alt="$bureaumembre"
							src="{{ asset('storage/' . $bureaumembre->image) }}"
							width="150px"
						/>
					</div>

					<div className="col mx-auto">
						{/* {{-- input PRENOM --}} */}
						<div className="mb-5">
							<label for="prenom" className="form-label fs-5">
								Mise à jour du PRÉNOM
							</label>
							<input
								className="form-control text-secondary @error('prenom') is-invalid @enderror"
								// style="max-width: 500px"
								name="prenom"
								type="text"
								placeholder="{{ $bureaumembre->prenom }}"
								value="{{ $bureaumembre->prenom }}"
								required
							/>
						</div>

						{/* {{-- input IMAGE --}} */}
						<div>
							<label for="image" className="form-label fs-5">
								Mise à jour de la PHOTO
							</label>
							<input
								type="file"
								name="image"
								className="form-control mb-1 @error('image') is-invalid @enderror"
								// style="max-width: 500px"
								aria-describedby="imageHelp"
							/>
							<small id="imageHelp" className="form-text text-secondary italic">
								<i className="fa-solid fa-triangle-exclamation fs-3"></i> FORMAT
								CARRÉ IMPÉRATIF ! | Taille max. : 2 Mo | Fichiers acceptés :
								.jpg |.jpeg |.png |.gif |.svg
							</small>
						</div>
					</div>

					{/* {{-- bouton SUBMIT --}} */}
					<div className="row text-center">
						<div className="col">
							<button
								type="submit"
								className="btn btn-success mt-2"
								title="Valider">
								VALIDER
							</button>
							<a
								type="button"
								href="/admin"
								className="btn btn-secondary mt-2 mx-2"
								title="Annuler">
								Annuler
							</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	);
};

export default BureauMembreModif;
