import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import Home from "./views/Home";
import ClubPresentation from "./views/pages/ClubPage";
import Sports from "./views/pages/SportsPage";
import PracticalInfo from "./views/pages/PracticalInfoPage";
import Equipment from "./views/pages/EquipmentPage";
import JoinUs from "./views/pages/JoinUsPage";
import Federation from "./views/pages/FederationPage";
import FAQ from "./views/pages/FAQPage";
import Partners from "./views/pages/PartnersPage";
import ContactForm from "./views/pages/ContactUsPage";
import LegalNotice from "./views/pages/LegalNoticePage";
import Footer from "./views/sections/Footer";
import Header from "./views/sections/Header";
import BackOfficeIndex from "./views/backOffice/BackOfficeIndex";
import BureauMembresList from "./views/backOffice/BureauMembresList";
import FAQList from "./views/backOffice/FAQList";

const App = () => {
	return (
		<Router>
			<div id="app">
				<Header />

				{/* Balise retour haut de page */}
				<div className="back_top">
					<a
						href="/#"
						title="Haut de page"
						className="inline-block p-1 me-1 mb-1 border rounded text-secondary">
						<i className="bi bi-arrow-up"></i>
					</a>
				</div>
				<Routes>
					<Route path="/" exact element={<Home />} />
					<Route path="/le-club" element={<ClubPresentation />} />
					<Route path="/les-disciplines" element={<Sports />} />
					<Route path="/infos-pratiques" element={<PracticalInfo />} />
					<Route path="/equipement" element={<Equipment />} />
					<Route path="/nous-rejoindre" element={<JoinUs />} />
					<Route path="/reglementation" element={<Federation />} />
					<Route path="/faq" element={<FAQ />} />
					<Route path="/les-partenaires" element={<Partners />} />
					<Route path="/contact" element={<ContactForm />} />
					<Route path="/mentions-legales" element={<LegalNotice />} />
					<Route path="/admin" element={<BackOfficeIndex />} />
					<Route path="/admin/bureau" element={<BureauMembresList />} />
					<Route path="/admin/faq" element={<FAQList />} />
				</Routes>
				<Footer />
			</div>
		</Router>
	);
};

export default App;
