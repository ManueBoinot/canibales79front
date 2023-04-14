@extends('layouts.app')

@section('content')
    <div class="container py-5 px-lg-5">

        <div class="ancre" id="club"></div>
        <h1 class="text-center fw-bold">INFOS PRATIQUES</h1>

        {{-- Vaccins obligatoires --}}
        <div class="mx-auto my-5" style="width: 100%; max-width: 600px">
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
                    <strong>Les chiens doivent être à jour de leurs vaccins</strong> pour pouvoir participer à
                    tout
                    entraînement,
                    sortie ou compétition sous la responsabilité des CANIBALES 79.
                </div>
            </div>
        </div>

        {{-- NAV ===================================================================================================== --}}
        <nav>
            <div class="nav nav-pills me-3 justify-content-center gap-1" role="tablist" id="nav-pill">

                <button class="nav-link active" id="nav-horaires-pill" data-bs-toggle="tab" data-bs-target="#pills-horaires"
                    type="button" role="tab" aria-controls="pills-horaires" aria-selected="true">Horaires des
                    entraînements</button>

                <button class="nav-link" id="nav-types-pill" data-bs-toggle="pill" data-bs-target="#pills-types" type="button"
                    role="tab" aria-controls="pills-types" aria-selected="false">Types
                    d'entraînements</button>

                <button class="nav-link" id="nav-competition-pill" data-bs-toggle="pill" data-bs-target="#pills-competition"
                    type="button" role="tab" aria-controls="pills-competition" aria-selected="false">Compétition</button>

                <button class="nav-link bg-danger" id="nav-rejoindre-pill" data-bs-toggle="pill" data-bs-target="#pills-rejoindre"
                    type="button" role="tab" aria-controls="pills-rejoindre" aria-selected="false">Rejoindre le
                    club</button>

            </div>
        </nav>

        <div class="tab-content text-center" id="nav-tabContent">

            {{-- HORAIRES ENTRAINEMENTS ============================================================== --}}
            <div class="tab-pane fade show active" id="pills-horaires" role="tabpanel" aria-labelledby="nav-horaires-pill"
                tabindex="0">
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

                <div class="py-4"><a class="link-danger" href="/les-disciplines"
                        title="Aller à la rubrique LES DISCIPLINES">
                        <p><i class="fa-regular fa-hand-pointer"></i>
                            Infos sur nos disciplines</p>
                    </a>
                </div>

                {{-- Images entrainements --}}
                <div class="row mx-auto text-center mb-5">
                    <div class="col">
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
            </div>

            {{-- TYPES ENTRAINEMENTS ============================================================== --}}
            <div class="tab-pane fade" id="pills-types" role="tabpanel" aria-labelledby="nav-types-pill" tabindex="0">

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

                <div class="py-4"><a class="link-danger" href="/les-disciplines"
                        title="Aller à la rubrique LES DISCIPLINES">
                        <p><i class="fa-regular fa-hand-pointer"></i>
                            Infos sur nos disciplines</p>
                    </a>
                </div>

                {{-- Images entrainements --}}
                <div class="row mx-auto mb-5">
                    <div class="col">
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

                <p class="mb-5">Les CANIBALES 79 étant adhérents de la Fédération des Sports et Loisirs
                    Canins,
                    toutes les
                    compétitions de la FSLC sont accessibles à nos licenciés.<br>
                    <strong>Il y a des compétitions dans toute la France, toute l'année</strong> sauf aux périodes les
                    plus
                    chaudes de l'été.<br>
                    Parmi ces dizaines de compétitions annuelles, il y en a certaines qui sont spéciales : ce sont les
                    courses "
                    <strong>Chien d'Or</strong> ".<br>
                    Le trophée Chien d'Or est un classement national de tous les licenciés affiliés à la FSLC, basé sur
                    leurs 5
                    meilleurs résultats de la saison sur les courses concernées par ce trophée.<br>
                    <i class="fa-regular fa-hand-pointer"></i> <a class="link-secondary"
                        href="https://www.fslc-canicross.net/wp-content/uploads/2021/05/REG-03.C02-Mode-demploi-Chien-dOr.pdf"
                        target="blank">Plus
                        d'information sur le trophée Chien d'Or</a>
                </p>

                {{-- Calendrier COMPET --}}
                <p class="fw-bold" style="color: rgb(230, 0, 0)">Retrouvez ci-dessous le calendrier des compétitions
                    de la
                    FSLC</p>
                <a class="btn btn-outline-danger" type="button" href="https://courses.fslc-canicross.net/fr/"
                    target="blank">CALENDRIER
                    DES COMPÉTITIONS FSLC
                </a>
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
                    <a href="/nous-rejoindre"><button type="button" class="btn red-button fw-bold">INFOS INSCRIPTION</button></a>

                <div class="py-4"><a class="link-danger" href="/les-disciplines"
                        title="Aller à la rubrique LES DISCIPLINES">
                        <p><i class="fa-regular fa-hand-pointer"></i>
                            Infos sur nos disciplines</p>
                    </a>
                </div>

            </div>
        </div>

    </div>
@endsection
