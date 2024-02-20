import React from 'react';

const News = () => {
    return (
        <section className="container-lg py-5 px-1 px-sm-5 mx-auto">
            <div className="row g-4 text-center">
                <h2 className="text-center font-bold my-5">ACTUALITÉ DU CLUB</h2>

                {/* PUBLI RESEAUX SOCIAUX */}
                <div className="row mx-auto pb-3">
                    <h5 className="mb-3">Suivez-nous sur <strong>Facebook</strong> et <strong>Instagram</strong> pour être au courant de toutes nos actualités !</h5>

                    <div className="d-flex justify-content-center gap-5 fs-1">
                        <a href="https://www.facebook.com/Canibales79" target="_blank" rel="noopener noreferrer" title="Notre page Facebook">
                            <img src={process.env.PUBLIC_URL + "assets/logos/logo_facebook.png"} className="logo-60" alt="logo Facebook" />
                        </a>
                        <a href="https://www.instagram.com/canibales_79/" target="_blank" rel="noopener noreferrer" title="Notre page Instagram">
                            <img src={process.env.PUBLIC_URL + "assets/logos/logo_instagram.png"} className="logo-60" alt="logo Instagram" />
                        </a>
                    </div>
                </div>

                {/* ARTICLES PRESSE */}
                <div className="row text-center border-top" id="actu">
                    <h3 className="pt-5">ON PARLE DE NOUS</h3>

                    {/* ARTICLES 1 */}
                    <div className="col-lg-4">
                        <a href="https://www.lanouvellerepublique.fr/deux-sevres/commune/souvigne-79/saint-maixent-le-canicross-fait-son-retour-dans-la-foret-de-l-hermitain" target="_blank" rel="noopener noreferrer">
                            <div className="card text-bg-dark mx-auto">
                                <img src={process.env.PUBLIC_URL + "assets/presse/article-nr-2022.jpg"} className="card-img" alt="article Nouvelle République 2022" />
                                <div className="card-img-overlay py-4 py-lg-3 py-xxl-2">
                                    <h5 className="card-title pt-4 pt-lg-2 pt-xxl-5 text-uppercase font-bold">La Nouvelle République</h5>
                                    <p className="card-text py-4 fs-5">Saint-Maixent : le canicross fait son retour dans la forêt de l’Hermitain</p>
                                    <p className="card-text"><small>16/05/2022</small></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    {/* ARTICLES 2 */}
                    <div className="col-lg-4">
                        <a href="https://www.lanouvellerepublique.fr/deux-sevres/les-nouveaux-adeptes-de-la-course-a-six-pattes"
                            target="_blank" rel="noopener noreferrer">

                            <div className="card text-bg-dark mx-auto">
                                <img src={process.env.PUBLIC_URL + "assets/presse/article-ouestfr-2022.jpg"} className="card-img"
                                    alt="article Nouvelle République 2017" />
                                <div className="card-img-overlay py-4 py-lg-3 py-xxl-2">
                                    <h5 className="card-title pt-4 pt-lg-2 pt-xxl-5 text-uppercase font-bold">Ouest France</h5>
                                    <p className="card-text py-4 fs-5">Souvigné. Seconde édition du canicross de l’Hermitain</p>
                                    <p className="card-text"><small>13/05/2022</small></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                {/* ARTICLES 3 */}
                <div className="col-lg-4">
                    <a href="https://www.ouest-france.fr/nouvelle-aquitaine/souvigne-79800/seconde-edition-du-canicross-de-lhermitain-12cbc6cc-ea43-4d64-aaa0-e43d416e06a5"
                        target="_blank" rel="noopener noreferrer">

                        <div className="card text-bg-dark mx-auto">
                            <img src={process.env.PUBLIC_URL + "assets/presse/article-nr-2017.jpg"} className="card-img"
                                alt="article Nouvelle République 2017" />
                            <div className="card-img-overlay py-4 py-lg-3 py-xxl-2">
                                <h5 className="card-title pt-4 pt-lg-2 pt-xxl-5 text-uppercase font-bold">La Nouvelle République</h5>
                                <p className="card-text py-4 fs-5">Les nouveaux adeptes de la course à six pattes</p>
                                <p className="card-text"><small>23/10/2017</small></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section >
    );
};

export default News;
