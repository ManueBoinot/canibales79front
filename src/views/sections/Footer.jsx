import React from "react";

const Footer = () => {
  return (
    <footer
      className="container-fluid text-white pt-3 px-5"
      style={{
        fontSize: "0.7rem",
        background:
          "linear-gradient(135deg, rgba(0,0,0,1) 30%, rgba(255,0,0,0.9) 100%)",
      }}
    >
      <div className="row mx-auto">
        {/* Colonne PLAN DU SITE FOOTER */}
        <div
          id="menu-footer"
          className="col-12 col-sm-4 text-center text-sm-start"
        >
          <h5 className="my-1 col-12" style={{ fontSize: "0.8rem" }}>
            PLAN DU SITE
          </h5>
          <ul className="list-unstyled row">
            <div className="col-md-6">
              <li className="list-item">
                <a href="/">Accueil</a>
              </li>
              <li className="list-item">
                <a href="/le-club">Qui sommes-nous ?</a>
              </li>
              <li className="list-item">
                <a href="/les-disciplines">Nos disciplines</a>
              </li>
              <li className="list-item">
                <a href="/infos-pratiques">Infos pratiques</a>
              </li>
              <li className="list-item">
                <a href="/equipement">Équipement</a>
              </li>
              <li className="list-item">
                <a href="/nous-rejoindre">Inscription</a>
              </li>
            </div>
            <div className="col-md-6">
              <li className="list-item">
                <a href="/reglementation">Réglementation</a>
              </li>
              <li className="list-item">
                <a href="/faq">Foire aux questions</a>
              </li>
              <li className="list-item">
                <a href="/les-partenaires">Nos partenaires</a>
              </li>
              <li className="list-item">
                <a href="/contact">Contact</a>
              </li>
              <li className="list-item">
                <a href="/mentions-legales">Mentions légales</a>
              </li>
            </div>
          </ul>
        </div>

        {/* Colonne LOGO FOOTER */}
        <div id="reseaux-footer" className="col-12 col-sm-4 text-center">
          <a href="/">
            <img
              src="/logos/logo-canibales-contour.png"
              style={{ width: "150px" }}
              title="Retour à l'accueil"
              alt="logo Canibales"
            />
          </a>
          <div>
            <a href="https://www.facebook.com/Canibales79" target="_blank" rel="noopener noreferrer">
              <i
                className="logo-footer fa-brands fa-square-facebook"
                style={{ fontSize: "30px" }}
                title="Notre page Facebook"
              ></i>
            </a>
            <a href="https://www.instagram.com/canibales_79/" target="_blank" rel="noopener noreferrer">
              <i
                className="logo-footer fa-brands fa-square-instagram p-1"
                style={{ fontSize: "30px" }}
                title="Notre page Instagram"
              ></i>
            </a>
          </div>
          <p className="m-2">Site réalisé par : Manue</p>
        </div>

        {/* Colonne COORDONNEES ASSO FOOTER */}
        <div
          id="mentions-footer"
          className="col-12 col-sm-4 text-center text-sm-end"
        >
          <h5 className="my-1" style={{ fontSize: "0.8rem" }}>
            CANIBALES 79
          </h5>
          <p className="m-1">Association loi 1901</p>
          <p className="m-1">
            Présidente :<br />
            Laura GUILBERT
          </p>
          <p className="m-1">
            25 route de Chauray
            <br />
            79260 FRANÇOIS
          </p>
          <a href="mailto:canibales79@gmail.com">canibales79@gmail.com</a>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
