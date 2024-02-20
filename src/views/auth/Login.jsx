import React from "react";

const Login = () => {
	return (
		<div className="container py-5">
			<div className="row justify-content-center">
				<div className="col-md-8">
					<div className="card">
						<div className="card-header">Connexion à l'espace membre</div>

						<div className="card-body">
							<form method="POST" action="{{ route('login') }}">
								{/* {{-- Email --}} */}
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
											autocomplete="email"
											autofocus
										/>
									</div>
								</div>

								{/* {{-- Mot de passe --}} */}
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
											autocomplete="current-password"
										/>
									</div>
								</div>

								{/* {{-- Case à cocher " se souvenir de moi " --}} */}
								<div className="row mb-3">
									<div className="col-md-6 offset-md-4">
										<div className="form-check">
											{/* <input className="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label className="form-check-label" for="remember">
                                            {{ __('Se souvenir de moi') }}
                                        </label> */}
										</div>
									</div>
								</div>

								{/* {{-- Bouton connexion --}} */}
								<div className="row mb-0">
									<div className="col-md-8 offset-md-4">
										<button type="submit" className="btn btn-dark">
											Connexion
										</button>

										{/* {{-- Oubli mot de passe --}} */}
										{/* @if (Route::has('password.request'))
                                        <a className="btn btn-link link-dark" href="{{ route('password.request') }}">
                                            Mot de passe oublié
                                        </a>
                                    @endif */}
									</div>
								</div>

								{/* {{-- Création de compte --}} */}
								<div className="row mt-4">
									<div className="col-md-8 offset-md-4 d-flex align-items-center gap-3">
										<p className="p-0 m-0 italic">Pas encore de compte ?</p>
										<a
											className="btn btn-outline-danger"
											href="{{ route('register') }}">
											Créer un compte
										</a>
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

export default Login();
