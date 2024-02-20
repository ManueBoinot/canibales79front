import React from "react";

const Register = () => {
	return (
		<div className="container py-3">
			<div className="row justify-content-center">
				<div className="col-md-8">
					<div className="card">
						<div className="card-header">Créer un compte</div>

						<div className="card-body">
							<form
								method="POST"
								action="{{ route('register') }}"
								enctype="multipart/form-data">
								@csrf
								{/* {{-- Champ NOM --}} */}
								<div className="row mb-3">
									<label for="name" className="col-md-4 col-form-label text-md-end">
										Nom
									</label>

									<div className="col-md-6">
										<input
											id="nom"
											type="text"
											className="form-control @error('nom') is-invalid @enderror"
											name="nom"
											value="{{ old('nom') }}"
											required
											autocomplete="nom"
										/>
									</div>
								</div>
								{/* {{-- Champ PRENOM --}} */}
								<div className="row mb-3">
									<label
										for="prenom"
										className="col-md-4 col-form-label text-md-end">
										Prénom
									</label>

									<div className="col-md-6">
										<input
											id="prenom"
											type="text"
											className="form-control @error('prenom') is-invalid @enderror"
											name="prenom"
											value="{{ old('prenom') }}"
											required
											autocomplete="prenom"
										/>
									</div>
								</div>
								{/* {{-- Champ DATE NAISSANCE --}} */}
								<div className="row mb-3">
									<label
										for="date_naissance"
										className="col-md-4 col-form-label text-md-end">
										Date de naissance
									</label>

									<div className="col-md-6">
										<input
											id="date_naissance"
											type="date"
											className="form-control @error('date_naissance') is-invalid @enderror"
											name="date_naissance"
											value="{{ old('date_naissance') }}"
											required
										/>
									</div>
								</div>
								{/* {{-- Champ NUMERO LICENCE --}} */}
								<div className="row mb-3">
									<label
										for="numero_licence"
										className="col-md-4 col-form-label text-md-end">
										Numéro de licence
									</label>

									<div className="col-md-6">
										<input
											id="numero_licence"
											type="text"
											className="form-control @error('numero_licence') is-invalid @enderror"
											name="numero_licence"
											value="{{ old('numero_licence') }}"
											required
										/>
									</div>
								</div>
								{/* {{-- Champ TYPE LICENCE --}} */}
								<div className="row mb-3">
									<label
										for="type_licence"
										className="col-md-4 col-form-label text-md-end">
										Type de licence
									</label>

									<div className="col-md-6">
										<select
											id="type_licence"
											className="form-select @error('type_licence') is-invalid @enderror"
											name="type_licence"
											value="{{ old('type_licence') }}"
											required>
											<option selected>Sélectionner un type de licence</option>
											<option value="Loisir">Loisir</option>
											<option value="Compétition">Compétition</option>
											<option value="Junior">Junior</option>
										</select>
									</div>
								</div>
								{/* {{-- Champ CATEGORIE --}} */}
								<div className="row mb-3">
									<label
										for="categorie"
										className="col-md-4 col-form-label text-md-end">
										Catégorie sportive
									</label>

									<div className="col-md-6">
										<select
											id="categorie"
											className="form-select @error('categorie') is-invalid @enderror"
											name="categorie"
											value="{{ old('categorie') }}"
											required>
											<option selected>
												Sélectionner une catégorie sportive
											</option>
											<option value="benjamin">Benjamin(e)</option>
											<option value="minime">Minime</option>
											<option value="cadet">Cadet(te)</option>
											<option value="junior">Junior</option>
											<option value="adulte">Adulte</option>
											<option value="sénior">Sénior</option>
											<option value="vétéran 1">Vétéran(e) 1</option>
											<option value="vétéran 2">Vétéran(e) 2</option>
											<option value="vétéran 3">Vétéran(e) 3</option>
										</select>

										{/* <!-- Button trigger modal --> */}
										{/* <a
											className="link-danger italic"
											// href="#"
											data-bs-toggle="modal"
											data-bs-target="#exampleModal">
											Un doute sur ta catégorie ?
										</a> */}

										{/* <!-- Modal --> */}
										<div
											className="modal fade"
											id="exampleModal"
											tabindex="-1"
											aria-labelledby="exampleModalLabel"
											aria-hidden="true">
											<div className="modal-dialog modal-xl">
												<div className="modal-content">
													<div className="modal-header">
														<h1 className="modal-title fs-5" id="exampleModalLabel">
															Les catégories d'âge en sport
														</h1>
														<button
															type="button"
															className="btn-close"
															data-bs-dismiss="modal"
															aria-label="Close"></button>
													</div>
													<div className="modal-body overflow-auto text-center">
														<img
															src="../assets/categories-fslc.png"
															// style="width: fit-content"
															alt="infos sur les catégories d'âge en sport"
														/>
													</div>
													<div className="modal-footer">
														<button
															type="button"
															className="btn btn-secondary"
															data-bs-dismiss="modal">
															Super merci !
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								{/* {{-- Champ EMAIL --}} */}
								<div className="row mb-3">
									<label
										for="email"
										className="col-md-4 col-form-label text-md-end">
										Email
									</label>

									<div className="col-md-6">
										<input
											id="email"
											type="email"
											className="form-control @error('email') is-invalid @enderror"
											name="email"
											value="{{ old('email') }}"
											required
										/>
									</div>
								</div>
								{/* {{-- Champ TELEPHONE --}} */}
								<div className="row mb-3">
									<label for="tel" className="col-md-4 col-form-label text-md-end">
										Téléphone
									</label>

									<div className="col-md-6">
										<input
											id="tel"
											type="tel"
											className="form-control @error('tel') is-invalid @enderror"
											name="tel"
											value="{{ old('tel') }}"
											required
										/>
									</div>
								</div>
								{/* {{-- Champ ADRESSE LIGNE 1 --}} */}
								<div className="row mb-3">
									<label
										for="adresse_ligne_1"
										className="col-md-4 col-form-label text-md-end">
										Adresse
									</label>

									<div className="col-md-6">
										<input
											id="adresse_ligne_1"
											type="text"
											className="form-control @error('adresse_ligne_1') is-invalid @enderror"
											name="adresse_ligne_1"
											value="{{ old('adresse_ligne_1') }}"
											required
										/>
									</div>
								</div>
								{/* {{-- Champ ADRESSE LIGNE 2 --}} */}
								<div className="row mb-3">
									<label
										for="adresse_ligne_2"
										className="col-md-4 col-form-label text-md-end">
										Complément d'adresse
									</label>

									<div className="col-md-6">
										<input
											id="adresse_ligne_2"
											type="text"
											className="form-control @error('adresse_ligne_2') is-invalid @enderror"
											name="adresse_ligne_2"
											value="{{ old('adresse_ligne_2') }}"
										/>
									</div>
								</div>
								{/* {{-- Champ CODE POSTAL --}} */}
								<div className="row mb-3">
									<label
										for="code_postal"
										className="col-md-4 col-form-label text-md-end">
										Code postal
									</label>

									<div className="col-md-6">
										<input
											id="code_postal"
											type="text"
											className="form-control @error('code_postal') is-invalid @enderror"
											name="code_postal"
											value="{{ old('code_postal') }}"
											required
										/>
									</div>
								</div>
								{/* {{-- Champ COMMUNE --}} */}
								<div className="row mb-3">
									<label
										for="commune"
										className="col-md-4 col-form-label text-md-end">
										Commune
									</label>

									<div className="col-md-6">
										<input
											id="commune"
											type="text"
											className="form-control @error('commune') is-invalid @enderror"
											name="commune"
											value="{{ old('commune') }}"
											required
										/>
									</div>
								</div>
								{/* {{-- Champ PASSWORD --}} */}
								<div className="row mb-3">
									<label
										for="password"
										className="col-md-4 col-form-label text-md-end">
										Mot de passe
									</label>

									<div className="col-md-6">
										<input
											id="password"
											type="password"
											className="form-control @error('password') is-invalid @enderror"
											name="password"
											required
											aria-describedby="passwordHelp"
										/>

										<div id="passwordHelp" className="form-text text-start">
											Le mot de passe doit contenir au moins 8 caractères dont
											au moins 1 majuscule, 1 chiffre et 1 caractère spécial
										</div>
									</div>
								</div>
								<div className="row mb-3">
									<label
										for="password-confirm"
										className="col-md-4 col-form-label text-md-end">
										Confirmer mot de passe
									</label>

									<div className="col-md-6">
										<input
											id="password-confirm"
											type="password"
											className="form-control"
											name="password_confirmation"
											required
										/>
									</div>
								</div>
								<div className="row mb-0">
									<div className="col-md-6 offset-md-4">
										<button type="submit" className="btn btn-dark">
											Je crée mon compte
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
};

export default Register;
