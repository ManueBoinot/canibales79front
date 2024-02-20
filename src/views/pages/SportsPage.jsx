import React from "react";

const Sports = () => {
  const redText = {
    color: "rgb(230, 0, 0)",
  };
  return (
    <div
      className="container py-5 px-lg-5"
      id="canicross"
    >
      <h1 className="mb-5 text-center font-bold">LES DISCIPLINES</h1>

      {/* INFO CANICROSS */}
      <div className="row pt-4 pb-5 align-items-center">
        <div className="col-12 col-md-auto mx-auto mb-3">
          <img
            src={
              process.env.PUBLIC_URL +
              "assets/photos/carre/carre-canicross.jpeg"
            }
            alt="illustration canicross"
            className="illu-disciplines"
          />
        </div>
        <div className="col mx-lg-5">
          <h2>LE CANICROSS</h2>
          <p>
            Le Canicross est une course à pied, coureur et chien sont reliés par
            une longe avec amortisseur.
            <br />
            C’est une <span className="font-bold">discipline de vitesse</span>.
            L’athlète éprouve des sensations formidables : il peut gagner de
            deux à quatre kilomètres à l’heure.
            <br />
            Seule une complicité avec son partenaire canin permet de tels
            résultats.
            <br />
            Un équipement spécifique s’impose pour accompagner les performances
            des athlètes (harnais, baudrier, ceinture, ligne de trait).
            <br />
            <span
              className="font-bold"
              style={redText}
            >
              Le chien doit avoir 18 mois
            </span>{" "}
            pour commencer la compétition.
            <br />
            Le canicross s’adresse à tous les humains et toutes les races de
            chiens (sauf catégorie 1). Les chaussures à pointes sont strictement
            interdites pour éviter de blesser nos compagnons canins.
            <br />
            La distance du parcours en Canicross est comprise{" "}
            <span className="font-bold">entre 5 et 9 km</span> en fonction des
            températures.
          </p>
          <a
            href="/equipement"
            type="button"
            className="btn black-button"
          >
            Infos ÉQUIPEMENT
          </a>
        </div>
      </div>

      {/* INFO CANITRAIL */}
      <div className="row pt-4 pb-5 align-items-center">
        <div className="col-12 col-md-auto mx-auto mb-3">
          <img
            src={
              process.env.PUBLIC_URL + "assets/photos/carre/carre-canitrail.jpg"
            }
            alt="illustration canitrail"
            className="illu-disciplines"
          />
        </div>
        <div className="col mx-lg-5">
          <h2>LE CANITRAIL</h2>
          <p>
            Le Canitrail est plus une{" "}
            <span className="font-bold">discipline d’endurance</span>. L'équipement
            est le même que pour le Canicross. Le parcours de Canitrail est plus
            long que celui du Canicross avec une distance comprise{" "}
            <span className="font-bold">entre 10 et 20 km</span> et un dénivelé plus
            important. L’allure est par contre différente car il faut en général
            alterner course et marche.
            <br />
            Il est prudent d’emporter son ravitaillement et notamment de l’eau
            pour pouvoir hydrater son chien.
            <br />
            Les règles sont identiques à celles du canicross : il faut respecter
            son chien, on ne doit pas le tirer, l’empêcher de faire ses besoins
            ou de se ravitailler et on doit l’attendre si nécessaire.
            <br />
            Pour commencer la compétition,{" "}
            <span
              className="font-bold"
              style={redText}
            >
              le chien doit avoir au moins 24 mois.
            </span>
            <br />
            Cette discipline s’adresse à tous les humains et toutes les races de
            chiens (sauf catégorie 1).
          </p>
          <a
            href="/equipement"
            type="button"
            className="btn black-button"
            id="canivtt"
          >
            Infos ÉQUIPEMENT
          </a>
        </div>
      </div>

      {/* INFO CANIVTT */}
      <div className="row pt-4 pb-5 align-items-center">
        <div className="col-12 col-md-auto mx-auto mb-3">
          <img
            src={
              process.env.PUBLIC_URL + "assets/photos/carre/carre-canivtt.jpg"
            }
            alt="illustration canivtt"
            className="illu-disciplines"
          />
        </div>
        <div className="col mx-lg-5">
          <h2>LE CANIVTT</h2>
          <p>
            Le CaniVTT est une discipline{" "}
            <span className="font-bold">
              réservée aux adultes et juniors (à partir de 15 ans)
            </span>
            , le chien est relié au VTT par une longe de 1m50 à 2m00 maximum.
            <br />
            Le vététiste doit suivre le rythme de son chien sur des parcours de{" "}
            <span className="font-bold">5 à 9 km</span>.<br />
            C’est un sport technique, où l’on peut atteindre des vitesses de
            pointe impressionnantes de plus de 50 km/h et des vitesses moyennes
            allant jusqu’à 35 km/h.
            <br />
            L’homme ne doit faire qu’un avec son chien et surtout être au niveau
            de son chien.
            <br />
            Le port du casque et des gants est obligatoire pour pratiquer ce
            sport à sensations fortes.
            <br />
            <span
              className="font-bold"
              style={redText}
            >
              Le chien doit avoir au minimum 18 mois
            </span>{" "}
            pour le pratiquer.
            <br />
            Cette discipline s’adresse à tous les humains et à toutes les races
            de chiens (sauf catégorie 1).
          </p>
          <p>
            NB : il existe une autre discipline semblable au caniVTT mais qui se
            pratique avec une trottinette spécifique : le{" "}
            <strong>CANIPÉDICYCLE</strong>. Méconnu, il nécessite une certaine
            technique et demande un plus gros effort encore que le caniVTT. Les
            prérequis sont les mêmes que pour le caniVTT.
          </p>
          <a
            href="/equipement"
            type="button"
            className="btn black-button"
            id="canimarche"
          >
            Infos ÉQUIPEMENT
          </a>
        </div>
      </div>

      {/* INFO CANIMARCHE */}
      <div className="row pt-4 pb-5 align-items-center">
        <div className="col-12 col-md-auto mx-auto mb-3">
          <img
            src={
              process.env.PUBLIC_URL +
              "assets/photos/carre/carre-canimarche.jpg"
            }
            alt="illustration canimarche"
            className="illu-disciplines"
          />
        </div>
        <div className="col mx-lg-5">
          <h2>LA CANIMARCHE</h2>
          <p>
            La Canimarche (ou Canirando) est une activité qui met l’accent sur
            la beauté du paysage.
            <br />
            L’équipement est le même que celui du Canicross ou Canitrail.
            <br />
            La canimarche est un mariage entre la marche (qu’elle soit rapide ou
            non) et votre chien. Cela se pratique le plus souvent en pleine
            nature, en compétition ou en loisir ce sport permet de renforcer le
            lien entre vous et votre animal.
            <br />
            <span
              className="font-bold"
              style={redText}
            >
              Le chien doit avoir 18 mois
            </span>{" "}
            pour commencer la compétition.
          </p>
          <a
            href="/equipement"
            type="button"
            className="btn black-button"
          >
            Infos ÉQUIPEMENT
          </a>
        </div>
      </div>

      {/* Boutons EQUIPEMENT et CONTACT */}
      <div className="text-center">
        <a
          href="/contact"
          type="button"
          className="btn red-button"
        >
          <i className="fa-solid fa-envelope me-2"></i>CONTACT
        </a>
      </div>

      {/* Lien vers la source FSLC */}
      <div className="row mt-5 text-end">
        <small className="text-secondary">
          (Source :{" "}
          <a
            href="https://www.fslc-canicross.net/les-disciplines/"
            className="text-secondary"
          >
            {" "}
            https://www.fslc-canicross.net/les-disciplines/)
          </a>
        </small>
      </div>
    </div>
  );
};

export default Sports;
