import React from "react";

const Welcome = () => {
	return (
		<section id="intro-accueil" className="container py-5 mx-auto">
			<div
				id="disciplines-accueil"
				className="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-4 py-4">
				{/* Phrase d'accueil */}
				<h1 className="font-bold text-center my-auto pb-3">
					Bienvenue chez les Canibales 79 !
				</h1>

				{/* Présentation 3 disciplines */}
				<div className="col-span-1 md:col-span-2">
					<a href="/les-disciplines#canicross">
						<div
							id="accueil-canicross"
							className="intro-sports mx-auto bg-gray-700 text-white relative">
							<h3 className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-bold my-auto">
								CANICROSS
							</h3>
						</div>
					</a>
				</div>

				<div className="col-span-1">
					<a href="/les-disciplines#canivtt">
						<div
							id="accueil-canivtt"
							className="intro-sports mx-auto bg-gray-700 text-white relative">
							<h3 className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-bold my-auto">
								CANIVTT
							</h3>
						</div>
					</a>
				</div>

				<div className="col-span-1">
					<a href="/les-disciplines#canimarche">
						<div
							id="accueil-canimarche"
							className="intro-sports mx-auto bg-gray-700 text-white relative">
							<h3 className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-bold my-auto">
								CANIMARCHE
							</h3>
						</div>
					</a>
				</div>
			</div>

			{/* Texte d'accueil */}
			<div id="texte-accueil" className="text-center leading-loose">
				<p>
					Sportifs du dimanche ou athlètes confirmés,
					<br />
					Chiens de poche ou grands molosses,
					<br />
					Si votre quadrupède et vous êtes en bonne santé,
					<br />
					Alors toutes nos disciplines s'offrent à vous !<br />
				</p>
				<p>
					Chez les Canibales 79 il y en a pour tous les objectifs :<br />
					<strong>Dépassement de soi</strong>,{" "}
					<strong>routine sportive </strong>ou <strong>promenade active</strong>
					,<br />
					Chacun et chacune à son rythme y trouvera forcément sa place.
					<br />
				</p>

				<p>
					Au gré de nos sorties à <strong>Niort et alentours</strong> : Chauray,
					Celles sur Belle, le Lambon...
					<br />
					Vous découvrirez les Deux-Sèvres (79) sous un nouveau jour !
				</p>

				<p className="mb-4 font-bold">
					Seuls prérequis : BONNE HUMEUR et MOTIVATION !
				</p>

				<p>
					Alors n'hésitez plus et venez vous initier aux CANICROSS, CANIVTT et
					CANIMARCHE avec nous,
					<br />
					promis nous ne vous mordrons pas{" "}
					<small className="italic">
						(ou seulement un petit peu, nous avons une réputation à tenir)
					</small>
					...
				</p>

				<p className="mt-5 italic">
					Explorez nos rubriques pour en apprendre plus à notre sujet,
					<br />
					découvrir les disciplines, les bonnes pratiques et plus encore !
				</p>

				<div className="flex flex-wrap -mx-3 mt-4">
					<div className="w-full sm:w-1/2 px-3 mb-3 sm:mb-0">
						<a href="/faq" type="button" className="btn black-button">
							FOIRE AUX QUESTIONS
						</a>
					</div>
					<div className="w-full sm:w-1/2 px-3">
						<a href="/contact" type="button" className="btn red-button">
							<i className="fa-solid fa-envelope me-2"></i>CONTACT
						</a>
					</div>
				</div>
			</div>
		</section>
	);
};

export default Welcome;
