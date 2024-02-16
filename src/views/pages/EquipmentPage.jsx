import React from "react";

const Equipment = () => {

  const textCentered = {
    textAlign:'center'
  };

  return (
    <div class="container py-5 px-lg-5">
      <h1 class="mb-5 text-center font-bold">L'ÉQUIPEMENT</h1>

      {/* Intro */}
      <div class="row mb-5">
        <div class="row mb-4">
          <p class="text-center">
            Les sports de traction en binôme nécessitent un équipement adapté
            pour garantir confort et bien-être du chien comme de l'humain.
          </p>
        </div>

        {/* Equipement CANICROSS */}
        <div class="row mb-5 mt-5">
          <div class="col-auto">
            <figure>
              <a
                target="__blank"
                href="https://www.fenril.fr/kit-canicross/1438-kit-canicross-inlandsis-3760264640080.html"
              >
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "assets/photos/materiel/kit-canicross-inlandsis.jpg"
                  }
                  alt="kit complet canicross"
                />
              </a>
              <figcaption class="italic text-secondary">
                <small>Le kit complet Canicross de Inlandsis</small>
              </figcaption>
            </figure>
          </div>
          <div class="col">
            <h2 class="pb-3">
              <i class="fa-solid fa-person-running"></i>
              <i class="fa-solid fa-dog"></i> CANICROSS | CANIMARCHE
            </h2>
            <p>
              <strong>
                Pour le chien, il faut{" "}
                <span class="text-decoration-underline">un harnais</span>
              </strong>
              dont le choix est primordial pour éviter toute blessure et lui
              permettre de libérer son énergie sans limite.
              <br />
              Il doit être adapté à la morphologie de votre chien.
              <br />
              <span
                class="font-bold"
                style="color:#e70000"
              >
                <i class="fa-solid fa-triangle-exclamation"></i> Les harnais de
                type " JULIUS K-9 " SONT TOTALEMENT PROSCRITS !{" "}
                <i class="fa-solid fa-triangle-exclamation"></i>
              </span>
            </p>
            <p>
              <strong>
                Pour l'humain, il y a le choix entre{" "}
                <span class="text-decoration-underline">
                  baudrier et ceinture
                </span>
              </strong>{" "}
              : c'est avant tout une question de goût !<br />
              L'idéal est de pouvoir essayer différents modèles pour trouver
              celui qui vous convient le mieux (nous pouvons vous en prêter sur
              demande).
              <br />
              Il ne faut pas non plus négliger le choix de ses{" "}
              <strong class="text-decoration-underline">chaussures</strong> !
              <br />
              Et pour cela, nous vous invitons à rencontrer Yannick à son
              magasin{" "}
              <strong>
                <a
                  class="link-secondary"
                  href="https://foulees.com/-niort-"
                  target="__blank"
                >
                  FOUL&ES
                </a>
              </strong>
              , il vous donnera les meilleurs conseils pour trouver votre paire
              idéale.
            </p>
            <p>
              Enfin,{" "}
              <strong>
                pour relier chien et humain on utilise{" "}
                <span class="text-decoration-underline">
                  une laisse à amortisseur
                </span>
              </strong>{" "}
              qui permet d'absorber les chocs lors des variations d'allure.
              <br />
              Elle possède un mousqueton à chaque extrémité pour pouvoir être
              attachée au baudrier et au harnais.
            </p>
          </div>
        </div>

        {/* Equipement CANIVTT */}
        <div class="row mt-3">
          <div class="col-auto">
            <figure>
              <a
                target="__blank"
                href="https://www.fenril.fr/kits-cani-vtt/1425-kit-canivtt-inlandsis.html"
              >
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "assets/photos/materiel/kit-canivtt-inlandsis.jpg"
                  }
                  alt="kit complet canivtt"
                  title="Kit complet CANIVTT de Inlandsis"
                />
              </a>
              <figcaption class="italic text-secondary">
                <small>Le kit complet CaniVTT de Inlandsis</small>
              </figcaption>
            </figure>
          </div>
          <div class="col">
            <h2 class="pb-3">
              <i class="fa-solid fa-person-biking"></i>{" "}
              <i class="fa-solid fa-dog"></i> CANIVTT
            </h2>
            <p>
              <strong>
                Pour le caniVTT, le harnais du chien est le même que pour le
                canicross/la canimarche mais
                <span class="text-decoration-underline">
                  la laisse est plus longue
                </span>
              </strong>
              .<br />
              Elle possède un mousqueton à l'extrémité côté chien, et une
              boucle/poignée à l'autre extrémité pour être passée autour du
              guidon du VTT.
              <br />
              Si vous comptez pratiquer les deux disciplines il faudra vous
              équiper de 2 laisses différentes.
              <br />
              De plus,{" "}
              <strong>
                le port d'
                <span class="text-decoration-underline">
                  un casque et de gants
                </span>{" "}
                est obligatoire
              </strong>{" "}
              en caniVTT car la vitesse pouvant atteindre 60 km/h pour les plus
              aguerris, les chutes peuvent être dangereuses.
            </p>
            <p>
              <i class="fa-solid fa-triangle-exclamation"></i>{" "}
              <strong>
                Équipement supplémentaire du caniVTT :{" "}
                <span class="text-decoration-underline">la barre caniVTT</span>.
              </strong>
              <br />
              C'est une tige souple fixée sous le guidon du VTT dans laquelle on
              fait passer la laisse afin qu'elle ne se prenne pas dans la roue
              avant.
              <br />
              La barre caniVTT permet également d'apporter un amortissement
              supplémentaire en cas de brusque changement de direction du chien.
            </p>
          </div>
        </div>

        <div class="text-center py-4">
          <a
            class="link-danger"
            href="/les-disciplines"
          >
            <p>
              <i class="fa-regular fa-hand-pointer"></i> Infos sur nos
              disciplines
            </p>
          </a>
        </div>

        <div class="d-flex justify-content-around">
          <a
            href="/infos-pratiques"
            type="button"
            class="btn black-button"
          >
            INFOS PRATIQUES
          </a>
          <a
            href="/contact"
            type="button"
            class="btn red-button"
          >
            <i class="fa-solid fa-envelope me-2"></i>CONTACT
          </a>
        </div>
      </div>

      {/* CONSEILS SUR CHOIX DE HARNAIS PAR FENRIL */}
      {/* Harnais X-BACK */}
      <div class="row mb-5 border-top pt-5">
        <h2 class="font-bold text-center mb-4">
          CHOISIR LE BON HARNAIS POUR SON CHIEN
        </h2>
        <p class="text-center">
          Vous trouverez ci-dessous les conseils de notre partenaire{" "}
          <strong>
            <a
              target="__blank"
              class="link-secondary"
              href="https://www.fenril.fr/"
            >
              FENRIL
            </a>
          </strong>{" "}
          pour vous aider à choisir le meilleur harnais pour votre chien.
          <br />
        </p>
      </div>

      <div class="row mb-5 pb-3 border-bottom">
        <div class="col">
          <h3 class="font-bold">LES HARNAIS DE TYPE " X-BACK "</h3>
          <p>
            Dénommés ainsi en raison du X que forment les sangles sur le dos du
            chien, les harnais x-back sont le type de harnais le plus éprouvé et
            le plus populaire.
          </p>
          <p class="italic">
            <i class="fa-regular fa-hand-pointer"></i> Exemples :{" "}
            <a
              target="__blank"
              class="link-dark"
              href="https://www.fenril.fr/harnais-canicross/1303-harnais-polar-quest.html"
            >
              Inlandsis Polar Quest
            </a>
            ,{" "}
            <a
              target="__blank"
              class="link-dark"
              href="https://www.fenril.fr/harnais-canicross/378-x-back-sprint.html?search_query=lightweight&results=1"
            >
              Manmat Lightweight
            </a>
          </p>
          <ul>
            <li>
              <span class="font-bold">Avantages</span> : répartition optimale de
              la traction, confortables même sur de longues distances, plusieurs
              coupes disponibles en fonction des différents morphotypes,
              relativement stables
            </li>
            <li>
              <span class="font-bold">Inconvénients</span> : pendouillent si le
              chien ne tracte pas, pas de tailles pour les très petits ou très
              grands chiens, inadaptés aux chiens compacts type staff/staffie
            </li>
          </ul>
          <p>
            <span class="font-bold">Conclusion</span> :
          </p>
          <ul>
            <li>
              Harnais idéal pour 90% des chiens entre 14 et 45 Kg que ce soit en
              canicross, cani-VTT ou attelage
            </li>
            <li>
              Privilégier un modèle offrant un faible intervalle de poids entre
              chaque taille, ce qui évite de se retrouver entre 2 tailles avec
              aucune taille vraiment adaptée
            </li>
            <li>
              Préférer un modèle avec répartiteur sternal (sangle dédoublée sous
              la cage thoracique), plus stable et permettant une meilleure
              répartition de la traction.
            </li>
          </ul>
        </div>
        <div class="col-auto mx-auto">
          <img
            src="http://www.fenril.fr/img/cms/mms_img1701974663.jpg"
            alt="Inlandsis Polar Quest"
            width="300"
          />
        </div>
      </div>

      {/* Harnais COURTS */}
      <div class="row mb-5 pb-3 border-bottom">
        <div class="col">
          <h3 class="font-bold">LES HARNAIS COURTS</h3>
          <p class="italic">
            <i class="fa-regular fa-hand-pointer"></i> Exemples :{" "}
            <a
              target="__blank"
              class="link-dark"
              href="https://www.fenril.fr/harnais-canicross/107-harnais-canicross-zerodcshort.html"
            >
              DC Short
            </a>
            ,{" "}
            <a
              target="__blank"
              class="link-dark"
              href="https://www.fenril.fr/harnais-chien-traineau/1362-long-distance-harness-manmat.html"
            >
              Manmat Long Distance
            </a>
          </p>
          <ul>
            <li>
              <span class="font-bold">Avantages</span> : pas de pression sur les
              hanches, polyvalence vers la marche et la promenade, tailles
              disponibles pour tous les gabarits de chiens, réglables
            </li>
            <li>
              Inconvénient: tendance à remonter sous la gorge, moindre
              puissance, inadaptés à la traction de charges basses.
            </li>
          </ul>
          <p>
            <span class="font-bold">Conclusion</span> : nous recommandons les
            harnais courts pour{" "}
          </p>
          <ul>
            <li>les chiens compacts (staffie, staff, etc)</li>
            <li>
              les petits chiens de moins de 14 kg ou les très grands chiens de
              plus de 45 kg
            </li>
            <li>
              les activités au long cours (cani-rando, traineau longue distance)
            </li>
            <li>
              les chiens présentant une sensibilité particulière au niveau des
              hanches ou de la colonne vertébrale
            </li>
            <li>globalement pour une utilisation loisir polyvalente.</li>
          </ul>
        </div>
        <div class="col-auto mx-auto">
          <img
            src="http://www.fenril.fr/img/cms/griff-in-zero-short.jpg"
            alt="Zero DC Short"
            width="300"
          />
        </div>
      </div>

      {/* Harnais REGLABLES */}
      <div class="row mb-5 pb-3 border-bottom">
        <div class="col">
          <h3 class="font-bold">LES HARNAIS MULTI-RÉGLAGES</h3>
          <p class="italic">
            <i class="fa-regular fa-hand-pointer"></i> Exemples :{" "}
            <a
              target="__blank"
              class="link-dark"
              href="https://www.fenril.fr/harnais-canicross/1270-omnijore-ruffwear-harnais.html"
            >
              Ruffwear Omnijore
            </a>
            ,{" "}
            <a
              target="__blank"
              class="link-dark"
              href="https://www.fenril.fr/harnais-canicross/876-confort-harnais-canicross.html"
            >
              Difac Confort
            </a>
          </p>
          <ul>
            <li>
              <span class="font-bold">Avantages</span> : réglables
            </li>
            <li>
              <span class="font-bold">Inconvénients</span> : les réglages se
              desserrent à l’utilisation et les boucles peuvent provoquer des
              blessures par pression et/ou frottement
            </li>
          </ul>
          <p>
            <span class="font-bold">Conclusion</span> : pour possesseurs de
            plusieurs chiens souhaitant acquérir 1 seul harnais pour tous leurs
            chiens ou pour une utilisation loisir.
          </p>
        </div>
        <div class="col-auto mx-auto">
          <img
            style="margin-left:auto;margin-right:auto;"
            src="http://www.fenril.fr/img/cms/1237_1.jpg"
            alt="Ruffwear Omnijore harnais"
            width="300"
          />
        </div>
      </div>

      {/* Cas particuliers */}
      <div class="row mb-5 pb-3 border-bottom">
        <h3 class="font-bold">CAS PARTICULIERS</h3>
        <div class="col">
          <p>
            <i class="fa-regular fa-hand-pointer"></i>{" "}
            <a
              target="__blank"
              class="link-dark"
              href="https://www.fenril.fr/harnais-canicross/1788-inlandsis-open-back.html"
            >
              Inlandsis Open-Back
            </a>
          </p>
          <ul>
            <li>
              <span class="font-bold">Avantages</span> : conception idéale petits
              chiens et chiens compacts, réglage longueur de dos + cage
              thoracique
            </li>
            <li>
              <span class="font-bold">Inconvénients</span> : moins adapté pour les
              chiens de taille moyenne et grande pour lesquels un x-back sera
              plus stable
            </li>
          </ul>
        </div>
        <div class="col">
          <p>
            <i class="fa-regular fa-hand-pointer"></i>{" "}
            <a
              target="__blank"
              class="link-dark"
              href="https://www.fenril.fr/harnais-canicross/110-harnais-zerodc-faster.html"
            >
              Zero DC Faster
            </a>
          </p>
          <ul>
            <li>
              <span class="font-bold">Avantages</span> : modèle le plus stable sur
              les cages thoraciques profondes, le Faster a été à la base conçu
              spécifiquement pour les Greysters et Braques avec une cage
              thoracique très volumineuse
            </li>
            <li>
              <span class="font-bold">Inconvénients</span> : encolure ronde et
              large ayant tendance à gêner le mouvement des épaules et à
              comprimer la gorge.
            </li>
          </ul>
        </div>
        <div class="col">
          <p>
            <i class="fa-regular fa-hand-pointer"></i>{" "}
            <a
              target="__blank"
              class="link-dark"
              href="https://www.fenril.fr/harnais-canicross/443-harnais-free-motion.html"
            >
              Non Stop Free Motion
            </a>
          </p>
          <ul>
            <li>
              <span class="font-bold">Avantages</span> : relativement stable,
              partie arrière réglable en longueur
            </li>
            <li>
              <span class="font-bold">Inconvénients</span> : encombrant et rigide
            </li>
          </ul>
        </div>

        <div class="d-flex justify-content-around mt-3">
          <a
            href="/infos-pratiques"
            type="button"
            class="btn black-button"
          >
            INFOS PRATIQUES
          </a>
          <a
            href="/contact"
            type="button"
            class="btn red-button"
          >
            <i class="fa-solid fa-envelope me-2"></i>CONTACT
          </a>
        </div>
      </div>

      {/* Tableau de synthèse harnais */}
      <div class="row overflow-auto">
        <h3 class="font-bold text-center mb-4">
          Tableau de synthèse avec les modèles de harnais les plus populaires
        </h3>
        <table
          class="table table-striped-columns"
          style="height:259px"
          width="888"
        >
          <thead>
            <tr>
              <th scope="col">
                <p></p>
              </th>

              <th scope="col text-center align-items-center">
                <a
                  target="__blank"
                  class="btn btn-default"
                  href="https://www.fenril.fr/harnais-canicross/1303-harnais-polar-quest.html"
                >
                  Inlandsis Polar Quest
                </a>
              </th>

              <th scope="col">
                <a
                  target="__blank"
                  class="btn btn-default"
                  href="https://www.fenril.fr/harnais-canicross/325-x-back-classique.html"
                >
                  Manmat X-back classique
                </a>
              </th>

              <th scope="col">
                <a
                  target="__blank"
                  class="btn btn-default"
                  href="https://www.fenril.fr/harnais-canicross/1788-inlandsis-open-back.html"
                >
                  Inlandsis Open-Back
                </a>
              </th>

              <th scope="col">
                <a
                  target="__blank"
                  class="btn btn-default"
                  href="https://www.fenril.fr/harnais-canicross/325-x-back-classique.html"
                >
                  Inlandsis Blizzard Beast
                </a>
              </th>

              <th scope="col">
                <a
                  target="__blank"
                  class="btn btn-default"
                  href="https://www.fenril.fr/harnais-canicross/107-harnais-canicross-zerodcshort.html"
                >
                  Zero DC Short
                </a>
              </th>

              <th scope="col">
                <a
                  target="__blank"
                  class="btn btn-default"
                  href="https://www.fenril.fr/harnais-canicross/110-harnais-zerodc-faster.html"
                >
                  Zero DC Faster
                </a>
              </th>

              <th scope="col">
                <a
                  target="__blank"
                  class="btn btn-default"
                  href="https://www.fenril.fr/harnais-canicross/378-x-back-sprint.html"
                >
                  Manmat x-back Lightweight
                </a>
              </th>

              <th scope="col">
                <a
                  target="__blank"
                  class="btn btn-default"
                  href="https://www.fenril.fr/harnais-chien-traineau/1362-long-distance-harness-manmat.html"
                >
                  Manmat Long Distance
                </a>
              </th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>
                <p>
                  <strong>Nordiques, Bergers, Retrievers</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>++</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>+</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>+</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>+</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>+</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>+</strong>
                </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  <strong>Eurohound, Greyster, Braque</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>+</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}></td>
              <td style={textCentered}>
                <p>
                  <strong>++</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>+</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>+</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>++</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  <strong>Petits chiens -14 kg</strong>
                </p>
              </td>
              <td style="text-center;">
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>++</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>+</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>+</strong>
                </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  <strong>Grands chiens +45 kg</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}></td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>+</strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong></strong>
                </p>
              </td>
              <td style={textCentered}>
                <p>
                  <strong>+</strong>
                </p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      {/* Crédits */}
      <div class="row pb-5 text-end">
        <small class="italic text-secondary">
          (Source :{" "}
          <a
            href="https://www.fenril.fr/content/59-choix-harnais-canicross"
            class="link-secondary"
          >
            https://www.fenril.fr/content/59-choix-harnais-canicross)
          </a>
        </small>
      </div>
    </div>
  );
};
export default Equipment;
