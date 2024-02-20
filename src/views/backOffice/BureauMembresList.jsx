import React from "react";

const BureauMembresList = () => {
	return (
		<div className="my-5">
			<p>
				<button
					className="btn btn-dark btn-lg"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#collapseBureau"
					aria-expanded="false"
					aria-controls="collapseBureau">
					Gestion des membres du Bureau de l'association
				</button>
			</p>

			<div className="collapse" id="collapseBureau">
				<div className="row">
					{/* {{-- FAQ LOOP --}} */}
					{/* @foreach ($bureaumembres as $bureaumembre) */}
					<div className="card col-11 col-md-5 col-xl-2 my-3 mx-auto text-dark">
						<div className="card-body">
							{/* <p className="card-text" style="height: 20px">{{ $bureaumembre->prenom }}</p> */}
							{/* <p className="card-title text-uppercase font-bold" style="height: 50px">
                             {{ $bureaumembre->statut }}</p> */}
							<img
								alt="{$bureaumembre}"
								className="pb-2"
								src="{{ asset('storage/' . $bureaumembre->image) }}"
								height="100px"
							/>
							<div className="d-flex justify-content-around">
								<form
									method="post"
									action="{{ route('bureaumembre.edit', $bureaumembre) }}">
									@method('get') @csrf
									<button className="btn btn-warning">
										<i className="fa-solid fa-pen"></i>
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
