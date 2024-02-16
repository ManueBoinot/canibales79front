import React from "react";
import BureauMembresList from "./BureauMembresList";
import FAQList from "./FAQList";

const BackOfficeIndex = () => {
    return (
<div class="container py-5 px-md-5 text-center h-100">

        <h1>INTERFACE ADMINISTRATEUR</h1>
        
        <p>Vous pouvez ici mettre à jour les membres du Bureau de l'association ainsi que gérer la Foire Aux Questions</p>

        {/* LISTE DES MEMBRES DU BUREAU */}
        <BureauMembresList />

        {/* LISTE DES QUESTIONS/REPONSES FAQ */}
        <FAQList />

    </div>

)}
    
export default BackOfficeIndex;
