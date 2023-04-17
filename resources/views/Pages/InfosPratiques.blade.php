@extends('layouts.app')

@section('content')
    <div class="container py-5 px-lg-5">

        <div class="row">

            {{-- Images entrainements --}}
            <div class="col-auto d-none d-md-block">
                <div>
                    <img class="m-2 illu-sorties" src="../assets/photos/canicross-montage-01.jpeg"
                        alt="Canicross vu depuis le coureur">
                </div>
                <div class="col">
                    <img class="m-2 illu-sorties" src="../assets/photos/photo_entrainement.jpg"
                        alt="Les canibales 79 font du gainage">
                </div>
                <div class="col">
                    <img class="m-2 illu-sorties" src="../assets/photos/photo_entrainement_pluie.jpg"
                        alt="Les canibales 79 en sortie même sous la pluie">
                </div>
            </div>


            <div class="col">

                <h1 class="fw-bold pb-3 text-center">INFOS PRATIQUES</h1>

                {{-- NAV ===================================================================================================== --}}
                <nav class="mb-5">
                    <div class="nav nav-pills me-3 justify-content-start gap-1" role="tablist" id="nav-pill">

                        <button class="nav-link active" id="nav-horaires-pill" data-bs-toggle="tab"
                            data-bs-target="#pills-horaires" type="button" role="tab" aria-controls="pills-horaires"
                            aria-selected="true">Horaires des
                            entraînements</button>

                        <button class="nav-link" id="nav-types-pill" data-bs-toggle="pill" data-bs-target="#pills-types"
                            type="button" role="tab" aria-controls="pills-types" aria-selected="false">Types
                            d'entraînements</button>

                        <button class="nav-link" id="nav-competition-pill" data-bs-toggle="pill"
                            data-bs-target="#pills-competition" type="button" role="tab"
                            aria-controls="pills-competition" aria-selected="false">Compétition</button>

                        <button class="nav-link bg-danger" id="nav-rejoindre-pill" data-bs-toggle="pill"
                            data-bs-target="#pills-rejoindre" type="button" role="tab" aria-controls="pills-rejoindre"
                            aria-selected="false">Rejoindre le
                            club</button>

                    </div>
                </nav>

                <div class="tab-content text-start" id="nav-tabContent">

                    {{-- HORAIRES ENTRAINEMENTS ============================================================== --}}
                    <div class="tab-pane fade show active" id="pills-horaires" role="tabpanel"
                        aria-labelledby="nav-horaires-pill" tabindex="0">

                        <h2 class="fw-bold my-4">HORAIRES DES ENTRAÎNEMENTS</h2>

                        <p>
                            Chez les CANIBALES 79, nous faisons des sorties et entraînements toute l'année et par tous les
                            temps
                            !<br>
                            Enfin, presque : nous ne sortons pas avec les chiens en cas de forte chaleur et faisons
                            généralement une
                            pause en juillet et août.</p>

                        <table class="table table-striped table-secondary w-75 mx-auto">
                            <thead>
                                <tr>
                                    <th scope="col">Jour</th>
                                    <th scope="col">Heure</th>
                                    <th scope="col">Discipline</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MARDI</td>
                                    <td>19h00</td>
                                    <td>CANICROSS</td>
                                </tr>
                                <tr>
                                    <td>JEUDI</td>
                                    <td>19h00</td>
                                    <td>CANICROSS</td>
                                </tr>
                                <tr>
                                    <td>SAMEDI</td>
                                    <td>10h00</td>
                                    <td>CANICROSS</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" class="py-4">DIMANCHE</td>
                                    <td>09h00</td>
                                    <td>CANIMARCHE</td>
                                </tr>
                                <tr>
                                    <td>10h00</td>
                                    <td>CANIVTT</td>
                                </tr>
                            </tbody>
                        </table>

                        <small class="fst-italic">
                            NB : Lorsque les températures commencent à monter, l'heure des sorties du matin est adaptée en
                            fonction
                            de la
                            méteo.
                        </small>

                        <div class="py-3"><a class="link-dark fw-bold" href="/les-disciplines"
                                title="Aller à la rubrique LES DISCIPLINES">
                                <p><i class="fa-regular fa-hand-pointer"></i>
                                    Infos sur nos disciplines</p>
                            </a>
                        </div>

                    </div>

                    {{-- TYPES ENTRAINEMENTS ============================================================== --}}
                    <div class="tab-pane fade" id="pills-types" role="tabpanel" aria-labelledby="nav-types-pill"
                        tabindex="0">

                        {{-- Types de sorties --}}
                        <h2 class="my-4">TYPES D'ENTRAÎNEMENTS</h2>
                        <p>
                            En semaine, nous nous répartissons en deux groupes en fonction de l'objectif visé :</p>
                        <p>
                            - <strong>un groupe " entraînement "</strong> qui va effectuer des exercices de perfectionnement
                            (fractionné par exemple)<br>
                            - <strong>un groupe " sortie tranquille "</strong> pour se faire plaisir sans trop de difficulté
                        </p>
                        <p>
                            Les séances de fractionné permettent au maître et à son chien de progresser, tout en gardant un
                            esprit
                            ludique et en veillant à ce que le plaisir du chien reste intact.</p>
                        <p>
                            Les référents peuvent proposer des petits ateliers de quelques minutes lors de l’entraînement
                            pour les intéressés (travail de dépassements, départs, côtes, descentes, etc.).</p>
                        <p>
                            Des <strong>groupes d’allure</strong> peuvent également être formés afin que chacun puisse aller
                            à son
                            rythme :)
                        </p>

                        <div class="py-3"><a class="link-dark fw-bold" href="/les-disciplines"
                                title="Aller à la rubrique LES DISCIPLINES">
                                <p><i class="fa-regular fa-hand-pointer"></i>
                                    Infos sur nos disciplines</p>
                            </a>
                        </div>

                    </div>

                    {{-- COMPETITION ============================================================== --}}
                    <div class="tab-pane fade" id="pills-competition" role="tabpanel" aria-labelledby="nav-competition-pill"
                        tabindex="0">
                        <h2 class="my-4">COMPÉTITION</h2>

                        {{-- Logos compet --}}
                        <div class="d-flex justify-content-center gap-5 my-4">
                            <img class="logo-compet" src="../assets/logos/logo_fslc.png" alt="logo fslc">
                            <img class="logo-compet" src="../assets/logos/chien-or.jpg" alt="logo trophée chien d'or">
                        </div>

                        <p class="mb-2">Les CANIBALES 79 étant adhérents de la Fédération des Sports et Loisirs
                            Canins,
                            toutes les
                            compétitions de la FSLC sont accessibles à nos licenciés.<br>
                            <strong>Il y a des compétitions dans toute la France, toute l'année</strong> sauf aux périodes
                            les
                            plus
                            chaudes de l'été.<br>
                            Parmi ces dizaines de compétitions annuelles, il y en a certaines qui sont spéciales : ce sont
                            les
                            courses "
                            <strong>Chien d'Or</strong> ".<br>
                            Le trophée Chien d'Or est un classement national de tous les licenciés affiliés à la FSLC, basé
                            sur
                            leurs 5
                            meilleurs résultats de la saison sur les courses concernées par ce trophée.<br>
                            <i class="fa-regular fa-hand-pointer"></i> <a class="link-secondary"
                                href="https://www.fslc-canicross.net/wp-content/uploads/2021/05/REG-03.C02-Mode-demploi-Chien-dOr.pdf"
                                target="blank">Plus
                                d'information sur le trophée Chien d'Or</a>
                        </p>

                        {{-- Calendrier COMPET --}}
                        <div class="text-center">
                            <a class="btn btn-dark mb-5" type="button"
                                href="https://courses.fslc-canicross.net/fr/" target="blank">CALENDRIER
                                DES COMPÉTITIONS FSLC
                            </a>
                        </div>
                    </div>

                    {{-- NOUS REJOINDRE ============================================================== --}}
                    <div class="tab-pane fade" id="pills-rejoindre" role="tabpanel" aria-labelledby="nav-rejoindre-pill"
                        tabindex="0">

                        <h2 class="my-4">REJOINDRE LE CLUB</h2>

                        {{-- Image club plage --}}
                        <img class="img-fluid " src="../assets/photos/club-plage.jpg" alt="les canibales79 sur la plage"
                            style="max-width: 100%;" width="700px">

                        {{-- Invitation à nous rejoindre --}}
                        <p class="pt-4">Tu veux découvrir nos disciplines ou tu les pratiques déjà, et tu souhaites venir
                            faire
                            une <strong>séance
                                d'essai</strong>
                            ?</p>
                        <p>
                            Les infos sur nos licences et comment s'inscrire, c'est par ici :
                            <a href="/nous-rejoindre"><button type="button" class="btn red-button fw-bold">INFOS
                                    INSCRIPTION</button></a>

                        <div class="py-4"><a class="link-danger" href="/les-disciplines"
                                title="Aller à la rubrique LES DISCIPLINES">
                                <p><i class="fa-regular fa-hand-pointer"></i>
                                    Infos sur nos disciplines</p>
                            </a>
                        </div>

                    </div>
                </div>

                {{-- VACCINS OBLIGATOIRES --}}
                <div class="mx-auto" style="width: 100%; max-width: 500px">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-triangle-exclamation fs-1"></i>
                        <div>
                            <strong>Les chiens doivent être à jour de leurs vaccins</strong> pour pouvoir participer
                            à tout
                            entraînement,
                            sortie ou compétition sous la responsabilité des CANIBALES 79.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
