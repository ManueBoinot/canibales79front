@extends('layouts.app')

@section('content')
    <div class="container text-center py-5 px-lg-5">

        <h1 class="mb-5 fw-bold">NOUS REJOINDRE</h1>

        {{-- Image club plage --}}
        <div>
            <img class="img-fluid" src="assets/photos/club-plage.jpg" alt="les canibales79 sur la plage"
                style="max-width: 100%" width="700px">
        </div>

        <section class="mt-5 pb-4">
            <h2 class="fw-bold">Envie de nous rejoindre ?</h2>
            <p class="fs-5">Rien de plus simple !</p>
            <p>Écrivez-nous via notre <a href="/contact" class="link-danger fw-bold">formulaire de contact</a> et nous
                planifierons ensemble vos <strong style="color: rgb(230, 0, 0)">séances d'essai gratuites</strong>
                <small>(voir
                    détails ci-après)</small>.<br>
                Et si après cela vous souhaitez rejoindre le club, sachez que <strong>les inscriptions sont ouvertes toute
                    l'année</strong> !<br>
                Nous vous expliquerons le moment venu quelle est la démarche à suivre pour demander votre licence.
            </p>

            {{-- VACCINS OBLIGATOIRES --}}
            <div class="mx-auto" style="width: 100%; max-width: 500px">
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-triangle-exclamation fs-1"></i>
                    <div>
                        <strong>Les chiens doivent être à jour de leurs vaccins</strong> pour pouvoir participer à tout
                        entraînement,
                        sortie ou compétition sous la responsabilité des CANIBALES 79.
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-center gap-4">
                {{-- Lien vers DISCIPLINES --}}
                <a class="link-danger" href="/les-disciplines">
                    <i class="me-2 fa-regular fa-hand-pointer"></i> Infos sur nos disciplines
                </a>

                {{-- Lien vers ENTRAINEMENTS --}}
                <a class="link-secondary" href="/infos-pratiques"><i class="me-2 fa-solid fa-clock"></i>Horaires des
                    entraînements</a>
            </div>

        </section>

        {{-- SEANCES ESSAIS --}}
        <section class="mx-auto border-top pb-4">

            <h2 class="fw-bold my-5">SÉANCES D'ESSAI</h2>

            <p>La FSLC propose un <strong>PASS DÉCOUVERTE</strong> qui vous permet de profiter de non pas une, non pas
                deux, mais bien
                <strong style="color: rgb(230, 0, 0)">3 SÉANCES
                    D'ESSAI GRATUITES</strong> avec prise en charge par ses assurances Responsabilité Civile et
                Corporelle incluse !
            </p>
            <p>Nous vous expliquerons comment cela fonctionne lorsque vous viendrez à votre premier essai :)</p>

            {{-- INFO PRET MATERIEL --}}
            <div class="mx-auto" style="width: 100%; max-width: 500px">
                <div class="alert alert-dark d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-lightbulb fs-1"></i>
                    <div>
                        <strong>Vous n'avez pas encore d'équipement ?</strong> Pas de panique !<br>
                        Nous avons un large choix de harnais et accessoires pour que vous puissiez vous initier avant
                        d'investir.
                    </div>
                </div>
            </div>


            {{-- Bouton CONTACT --}}
            <div>
                <a href="/contact" type="button" class="btn red-button">
                    <i class="fa-solid fa-envelope me-2"></i>CONTACT</a>
            </div>

        </section>

        {{-- LICENCES --}}
        <section class="mx-auto border-top pb-4">

            <h2 class="fw-bold mt-5 mb-3">TARIFS LICENCES</h2>

            <p>Ces tarifs s'appliquent <strong>quelles que soient les disciplines pratiquées</strong> et sont
                identiques
                pour la catégorie Handisport.</p>

            <div class="mx-auto overflow-auto" style="max-width: 700px">
                <table class="table table-striped table-hover">
                    <thead class="text-bg-dark">
                        <tr>
                            <th scope="col" class="text-start">Type de licence</th>
                            <th scope="col" class="text-end">Part FSLC</th>
                            <th scope="col" class="text-end">Part club</th>
                            <th scope="col" class="text-end">Cotisation totale annuelle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start fw-bold">Loisir</td>
                            <td class="text-end">20 €</td>
                            <td class="text-end">20 €</td>
                            <td class="text-end fw-bold">40 €</td>
                        </tr>
                        <tr>
                            <td class="text-start fw-bold">Compétition</td>
                            <td class="text-end">30 €</td>
                            <td class="text-end">20 €</td>
                            <td class="text-end fw-bold">50 €</td>
                        </tr>
                        <tr>
                            <td class="text-start fw-bold">- 18 ans</td>
                            <td class="text-end">15 €</td>
                            <td class="text-end">10 €</td>
                            <td class="text-end fw-bold">25 €</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </div>
@endsection
