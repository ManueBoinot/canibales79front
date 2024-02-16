import React from "react";

const BureauMembresList = () => {
	return (
		<div class="my-5">
			<p>
				<button
					class="btn btn-dark btn-lg"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#collapseBureau"
					aria-expanded="false"
					aria-controls="collapseBureau">
					Gestion des membres du Bureau de l'association
				</button>
			</p>

			<div class="collapse" id="collapseBureau">
				<div class="row">
					{/* {{-- FAQ LOOP --}} */}
					{/* @foreach ($bureaumembres as $bureaumembre) */}
					<div class="card col-11 col-md-5 col-xl-2 my-3 mx-auto text-dark">
						<div class="card-body">
							{/* <p class="card-text" style="height: 20px">{{ $bureaumembre->prenom }}</p> */}
							{/* <p class="card-title text-uppercase font-bold" style="height: 50px">
                             {{ $bureaumembre->statut }}</p> */}
							<img
								alt="{$bureaumembre}"
								class="pb-2"
								src="{{ asset('storage/' . $bureaumembre->image) }}"
								height="100px"
							/>
							<div class="d-flex justify-content-around">
								<form
									method="post"
									action="{{ route('bureaumembre.edit', $bureaumembre) }}">
									@method('get') @csrf
									<button class="btn btn-warning">
										<i class="fa-solid fa-pen"></i>
										Mettre à jour
									</button>
								</form>
							</div>
						</div>
					</div>
					{/* @endforeach */}
				</div>
			</div>
		</div>
	);
};

export default BureauMembresList;
