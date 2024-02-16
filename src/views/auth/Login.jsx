import React from "react";

const Login = () => {
	return (
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">Connexion à l'espace membre</div>

						<div class="card-body">
							<form method="POST" action="{{ route('login') }}">
								{/* {{-- Email --}} */}
								<div class="row mb-3">
									<label
										for="email"
										class="col-md-4 col-form-label text-md-end">
										Email
									</label>

									<div class="col-md-6">
										<input
											id="email"
											type="email"
											class="form-control @error('email') is-invalid @enderror"
											name="email"
											value="{{ old('email') }}"
											required
											autocomplete="email"
											autofocus
										/>
									</div>
								</div>

								{/* {{-- Mot de passe --}} */}
								<div class="row mb-3">
									<label
										for="password"
										class="col-md-4 col-form-label text-md-end">
										Mot de passe
									</label>

									<div class="col-md-6">
										<input
											id="password"
											type="password"
											class="form-control @error('password') is-invalid @enderror"
											name="password"
											required
											autocomplete="current-password"
										/>
									</div>
								</div>

								{/* {{-- Case à cocher " se souvenir de moi " --}} */}
								<div class="row mb-3">
									<div class="col-md-6 offset-md-4">
										<div class="form-check">
											{/* <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Se souvenir de moi') }}
                                        </label> */}
										</div>
									</div>
								</div>

								{/* {{-- Bouton connexion --}} */}
								<div class="row mb-0">
									<div class="col-md-8 offset-md-4">
										<button type="submit" class="btn btn-dark">
											Connexion
										</button>

										{/* {{-- Oubli mot de passe --}} */}
										{/* @if (Route::has('password.request'))
                                        <a class="btn btn-link link-dark" href="{{ route('password.request') }}">
                                            Mot de passe oublié
                                        </a>
                                    @endif */}
									</div>
								</div>

								{/* {{-- Création de compte --}} */}
								<div class="row mt-4">
									<div class="col-md-8 offset-md-4 d-flex align-items-center gap-3">
										<p class="p-0 m-0 italic">Pas encore de compte ?</p>
										<a
											class="btn btn-outline-danger"
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
