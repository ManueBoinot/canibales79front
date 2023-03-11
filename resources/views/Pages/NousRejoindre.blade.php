@extends('layouts.app')

@section('content')
    <div class="container px-2 px-lg-3 py-5 bg-white px-lg-5 text-center">

        <h1 class=" fw-bold">NOUS REJOINDRE</h1>

        {{-- Image club plage --}}
        <div>
            <img class="img-fluid" src="../assets/photos/club-plage.jpg" alt="les canibales79 sur la plage"
                style="max-width: 100%" width="700px">
        </div>

        <section class="mt-5">
            <h3 class="fw-bold">Envie de nous rejoindre ?</h3>
            <h5>Rien de plus simple !</h5>
            <p>Écris-nous via notre <a href="/contact" class="link-danger fw-bold">formulaire de contact</a> et nous
                planifierons ensemble tes <strong style="color: rgb(230, 0, 0)">séances d'essai gratuites</strong>
                <small>(voir
                    détails ci-après)</small>.<br>
                Et si après cela tu souhaites rejoindre le club, sache que <strong>les inscriptions sont ouvertes toute
                    l'année</strong> !<br>
                Nous t'expliquerons le moment venu quelle est la démarche à suivre pour demander ta licence.
            </p>

            {{-- VACCINS OBLIGATOIRES --}}
            <div class="mx-auto" style="width: 100%; max-width: 600px">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                    <symbol id="info-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                    </symbol>
                    <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path
                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </symbol>
                </svg>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-1 me-2" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>
                        <strong>Les chiens doivent être à jour de leurs vaccins</strong> pour pouvoir participer à tout
                        entraînement,
                        sortie ou compétition sous la responsabilité des CANIBALES 79.
                    </div>
                </div>
            </div>

            <div class="text-center py-4"><a class="link-danger" href="/les-disciplines">
                <h5><i class="fa-regular fa-hand-pointer"></i> Disciplines et conditions d'accès</h5>
            </a></div>

            <a class="link-secondary" href="/le-club#entrainements">Horaires des entraînements<i
                    class="ms-2 fa-solid fa-clock"></i></a>

        </section>

        <div class="row gap-2 border-top mt-3 mx-auto">

            {{-- LICENCES --}}
            <section class="col-lg-5 mx-auto">

                <h2 class="fw-bold my-5">TARIFS LICENCES</h2>

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
                <p>Ces tarifs s'appliquent <strong>quelles que soient les disciplines pratiquées</strong> et sont
                    identiques
                    pour la catégorie Handisport.</p>

            </section>

            {{-- SEANCES ESSAIS --}}
            <section class="col-lg-5 mx-auto">

                <h2 class="fw-bold my-5">SÉANCES D'ESSAI</h2>

                <p>La FSLC propose un <strong>PASS DÉCOUVERTE</strong> qui te permet de profiter de non pas une, non pas
                    deux, mais bien
                    <strong style="color: rgb(230, 0, 0)">3 SÉANCES
                        D'ESSAI GRATUITES</strong> avec prise en charge par ses assurances Responsabilité Civile et
                    Corporelle incluse !
                </p>
                <p>Nous t'expliquerons comment cela fonctionne lorsque tu viendras à ton premier essai :)</p>

                <div class="alert alert-danger mx-auto" role="alert" style="width: 450px; max-width: 80vw">
                    <strong>Tu n'as pas encore de matériel ?</strong> Pas de panique !<br>
                    Nous avons un large choix de harnais et accessoires pour que tu puisses t'initier avant
                    d'investir.
                </div>
            </section>

            <div class="text-center"> <a href="/contact"><button type="button" class="btn text-white contact"
                        style="background-color: rgb(255,0,0)"><i class="fa-solid fa-envelope me-2"></i>CONTACT</button></a>
            </div>

        </div>
    </div>
@endsection
