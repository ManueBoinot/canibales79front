import React from "react";

const HomeCategories = () => {
  return (
    <section
      id="rubriques"
      className="container-fluid py-5 px-1 px-sm-5 mx-auto bg-black"
    >
      <div className="row g-5">
        <h2 className="text-white text-center font-bold">NOS RUBRIQUES</h2>

        {/* Rubrique " INFOS PRATIQUES " */}
        <div className="col-12 col-md-6 col-xl-3">
          <a href="/infos-pratiques">
            <div className="card">
              <img
                src={
                  process.env.PUBLIC_URL + "assets/photos/card/card-club.jpeg"
                }
                className="card-img-top"
                alt="les canibales79 au cani-apéro"
              />
              <div className="card-body px-lg-4 text-black">
                <h5 className="font-bold">INFOS PRATIQUES</h5>
                <p className="card-text">
                  Horaires et types d'entraînements, compétitions, infos sur les
                  licences. Si vous souhaitez intégrer les CANIBALES79, c'est
                  aussi par ici!
                </p>
              </div>
            </div>
          </a>
        </div>

        {/* Rubrique " LES DISCIPLINES " */}
        <div className="col-12 col-md-6 col-xl-3">
          <a href="/les-disciplines">
            <div className="card">
              <img
                src={
                  process.env.PUBLIC_URL +
                  "assets/photos/card/card-disciplines.jpg"
                }
                className="card-img-top"
                alt="course de canicross en forêt"
              />
              <div className="card-body px-lg-4 text-black">
                <h5 className="font-bold">NOS DISCIPLINES</h5>
                <p className="card-text">
                  CaniCROSS, caniVTT, caniMARCHE... Kézako ? Tout ce qu'il faut
                  savoir au sujet des disciplines du sport tracté monochien et
                  des bonnes pratiques.
                </p>
              </div>
            </div>
          </a>
        </div>

        {/* Rubrique " EQUIPEMENT " */}
        <div className="col-12 col-md-6 col-xl-3">
          <a href="/equipement">
            <div className="card">
              <img
                src={
                  process.env.PUBLIC_URL +
                  "assets/photos/card/card-materiel.jpg"
                }
                className="card-img-top"
                alt="binôme en canicross"
              />
              <div className="card-body px-lg-4 text-black">
                <h5 className="font-bold">L'ÉQUIPEMENT</h5>
                <p className="card-text">
                  Sécurité et bien-être du binôme ! Vous trouverez ici des
                  conseils pour bien choisir votre équipement afin de pratiquer
                  votre nouveau sport préféré dans les règles de l'art.
                </p>
              </div>
            </div>
          </a>
        </div>

        {/* Rubrique " FOIRE AUX QUESTIONS " */}
        <div className="col-12 col-md-6 col-xl-3">
          <a href="/faq">
            <div className="card">
              <img
                src={
                  process.env.PUBLIC_URL + "assets/photos/card/card-faq.jpeg"
                }
                className="card-img-top"
                alt="chiens courant sur la plage"
              />
              <div className="card-body px-lg-4 text-black">
                <h5 className="font-bold">FOIRE AUX QUESTIONS</h5>
                <p className="card-text">
                  Les réponses aux questions les plus fréquemment posées. Notre{" "}
                  <strong>formulaire de contact</strong> est également à votre
                  disposition.
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>
  );
};

export default HomeCategories;
