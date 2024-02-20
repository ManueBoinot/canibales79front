import React from 'react';

const JoinUs = () => {
  return (
    <div className="container text-center py-5 px-lg-5">
      <h1 className="mb-5 font-bold">NOUS REJOINDRE</h1>

      {/* Image club plage */}
      <div>
        <img className="img-fluid" src="/photos/club-plage.jpg" alt="les canibales79 sur la plage" style={{ maxWidth: '100%' }} width="700px" />
      </div>

      <section className="mt-5 pb-4">
        <h2 className="font-bold">Envie de nous rejoindre ?</h2>
        <p className="fs-5">Rien de plus simple !</p>
        <p>
          Écrivez-nous via notre <a href="/contact" className="link-danger font-bold">formulaire de contact</a> et nous planifierons ensemble vos <strong style={{ color: 'rgb(230, 0, 0)' }}>séances d'essai gratuites</strong> <small>(voir détails ci-après)</small>.
          <br />
          Et si après cela vous souhaitez rejoindre le club, sachez que <strong>les inscriptions sont ouvertes toute l'année</strong> !
          <br />
          Nous vous expliquerons le moment venu quelle est la démarche à suivre pour demander votre licence.
        </p>

        {/* VACCINS OBLIGATOIRES */}
        <div className="mx-auto" style={{ width: '100%', maxWidth: '500px' }}>
          <div className="alert alert-danger d-flex align-items-center" role="alert">
            <i className="fa-solid fa-triangle-exclamation fs-1"></i>
            <div>
              <strong>Les chiens doivent être à jour de leurs vaccins</strong> pour pouvoir participer à tout entraînement, sortie ou compétition sous la responsabilité des CANIBALES 79.
            </div>
          </div>
        </div>

        <div className="d-flex justify-content-center gap-4">
          {/* Lien vers DISCIPLINES */}
          <a className="link-danger" href="/les-disciplines">
            <i className="me-2 fa-regular fa-hand-pointer"></i> Infos sur nos disciplines
          </a>

          {/* Lien vers ENTRAINEMENTS */}
          <a className="link-secondary" href="/infos-pratiques"><i className="me-2 fa-solid fa-clock"></i>Horaires des entraînements</a>
        </div>
      </section>

      {/* SEANCES ESSAIS */}
      <section className="mx-auto border-top pb-4">
        <h2 className="font-bold my-5">SÉANCES D'ESSAI</h2>
        <p>
          La FSLC propose un <strong>PASS DÉCOUVERTE</strong> qui vous permet de profiter de non pas une, non pas deux, mais bien <strong style={{ color: 'rgb(230, 0, 0)' }}>3 SÉANCES D'ESSAI GRATUITES</strong> avec prise en charge par ses assurances Responsabilité Civile et Corporelle incluse !
        </p>
        <p>Nous vous expliquerons comment cela fonctionne lorsque vous viendrez à votre premier essai :)</p>

        {/* INFO PRET MATERIEL */}
        <div className="mx-auto" style={{ width: '100%', maxWidth: '500px' }}>
          <div className="alert alert-dark d-flex align-items-center" role="alert">
            <i className="fa-solid fa-lightbulb fs-1"></i>
            <div>
              <strong>Vous n'avez pas encore d'équipement ?</strong> Pas de panique !
              <br />
              Nous avons un large choix de harnais et accessoires pour que vous puissiez vous initier avant d'investir.
            </div>
          </div>
        </div>

        {/* Bouton CONTACT */}
        <div>
          <a href="/contact" type="button" className="btn red-button">
            <i className="fa-solid fa-envelope me-2"></i>CONTACT
          </a>
        </div>
      </section>

      {/* LICENCES */}
      <section className="mx-auto border-top pb-4">
        <h2 className="font-bold mt-5 mb-3">TARIFS LICENCES</h2>
        <p>Ces tarifs s'appliquent <strong>quelles que soient les disciplines pratiquées</strong> et sont identiques pour la catégorie Handisport.</p>

        <div className="mx-auto overflow-auto" style={{ maxWidth: '700px' }}>
          <table className="table table-striped table-hover">
            <thead className="text-bg-dark">
              <tr>
                <th scope="col" className="text-start">Type de licence</th>
                <th scope="col" className="text-end">Part FSLC</th>
                <th scope="col" className="text-end">Part club</th>
                <th scope="col" className="text-end">Cotisation totale annuelle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td className="text-start font-bold">Loisir</td>
                <td className="text-end">20 €</td>
                <td className="text-end">20 €</td>
                <td className="text-end font-bold">40 €</td>
              </tr>
              <tr>
                <td className="text-start font-bold">Compétition</td>
                <td className="text-end">30 €</td>
                <td className="text-end">20 €</td>
                <td className="text-end font-bold">50 €</td>
              </tr>
              <tr>
                <td className="text-start font-bold">- 18 ans</td>
                <td className="text-end">15 €</td>
                <td className="text-end">10 €</td>
                <td className="text-end font-bold">25 €</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </div>
  );
};

export default JoinUs;
