import React from "react";

const Verify = () => {
	return (
		<div className="container">
			<div className="row justify-content-center">
				<div className="col-md-8">
					<div className="card">
						<div className="card-header">Verify Your Email Address</div>

						<div className="card-body">
							<form
								className="d-inline"
								method="POST"
								action="{{ route('verification.resend') }}">
								<button
									type="submit"
									className="btn btn-link p-0 m-0 align-baseline">
									click here to request another
								</button>
								.
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
};

export default Verify;
