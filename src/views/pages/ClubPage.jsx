import React from "react";
import OfficeMembers from "../sections/OfficeMembers";

const ClubPresentation = () => {
  return (
    <div className="container py-5 px-lg-5">
      <h1 className="mb-5 text-center font-bold">LE CLUB CANIBALES79</h1>

      {/* BUREAU */}
      <div className="row mb-4">
        <h2 className="mb-4">LE BUREAU</h2>
        <p>
          Le club des Canibales79 a été créé le 12 août 2017 et est le premier
          club de canicross à avoir été créé dans les Deux-Sèvres (79).
          <br />
          Son siège social est à Chauray et il compte aujourd'hui plus d'une
          quarantaine de licenciés.
          <br />
          <br />
          Le Bureau de l'association est composé de :
        </p>
        <div className="row my-4 text-center justify-content-around">
          {/* Affichage dynamique du Bureau */}
          <OfficeMembers />
        </div>
      </div>

      {/* REFERENTS */}
      <div className="row">
        <h2 className="mb-4">LES RÉFÉRENTS DU CLUB</h2>

        <div className="mb-3">
          <h3>RÉFÉRENTS ACCUEIL DES NOUVEAUX</h3>
          <p>
            <strong>
              Dimitri, Marion, Nathalie et Micky sont les référents accueil des
              nouveaux
            </strong>
            , ce sont eux les premiers contacts via le Messenger de la page
            Facebook canibales79 , et se proposent d’être présents lors des
            séances d’essai en canicross.
            <br />
            Le but de cette séance d'essai est de faire un point sur
            l'équipement, la forme du binôme, expliquer les bases de la
            discipline puis courir sur un petit parcours selon le niveau du
            binôme.
            <br />
            Les séances d’essai se font généralement le jeudi soir à Chauray.
            <br />
            Selon les besoins des débutants, les référents se proposent de
            former un groupe « débutants » en même temps que l’entrainement
            canicross du jeudi soir afin que les débutants puissent prendre
            confiance à un rythme plus cool et sur une distance plus courte.
            <br />
            Au fur et à mesure, l’allure et la distance augmentent
            progressivement afin de pouvoir rejoindre le groupe plus « confirmé
            » dès que les débutants le souhaitent.
          </p>
        </div>

        <div class="mb-3">
          <h3>RÉFÉRENTE CANICROSS</h3>
          <p>
            <strong>Laura est référente canicross</strong>, elle propose des
            entraînements, mais aussi des défis/challenges toujours dans un
            esprit convivial.
            <br />
          </p>
        </div>

        <div class="mb-3">
          <h3>RÉFÉRENTE CANIMARCHE</h3>
          <p>
            <strong>Karine est la référente canimarche</strong>, elle essaie de
            regrouper les propositions de canimarches sur le mois afin qu’un
            planning soit préétabli, via le tchat Canimarche.
            <br />
            Les entrainements de canimarche ont lieu le dimanche matin à 09h00.
          </p>
        </div>

        <div className="mb-3">
          <h3>RÉFÉRENTE CANIVTT</h3>
          <p>
            <strong>Léa est la référente caniVTT</strong>, elle organise
            plusieurs dimanches par mois des entraînements. Les entrainements
            ont lieu le dimanche matin à 10h00, certaines sorties peuvent être
            proposées en semaine selon les disponibilités.
          </p>
        </div>
      </div>

      {/* Bouton contact */}
      <div className="d-flex justify-content-around">
        <a
          href="/infos-pratiques"
          type="button"
          className="btn black-button"
        >
          INFOS PRATIQUES
        </a>
        <a
          href="/contact"
          type="button"
          className="btn red-button"
        >
          <i className="fa-solid fa-envelope me-2"></i>CONTACT
        </a>
      </div>
    </div>
  );
};

export default ClubPresentation;
