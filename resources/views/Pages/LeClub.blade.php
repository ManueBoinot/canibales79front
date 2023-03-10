@extends('layouts.app')

@section('content')
    <div class="container bg-white px-lg-5">


        <div class="visually-hidden" style="margin-top: -150px; padding-top: 150px" id="club"></div>
        <h1 class="pt-5 text-center">LE CLUB</h1>

        {{-- Nav page CLUB --}}
        <ul class="nav justify-content-center pb-5 gap-3">
            <li class="nav-item">
                <a class="nav-link text-dark border border-dark" href="#asso">L'association</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark border border-dark" href="#entrainements">Entraînements et sorties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark border border-dark" href="#compet">Compétition</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger border border-danger" href="#licence">Nous rejoindre</a>
            </li>
        </ul>

        {{-- Section ASSO --}}
        <section class="mb-5 border-top">
            <div style="margin-top: -150px; padding-top: 150px" id="asso"></div>
            <h2 class="text-center fw-bold my-5">ASSOCIATION SPORTIVE CANIBALES 79</h2>

            {{-- BUREAU --}}
            <div class="row mb-5">
                <h4>LE BUREAU</h4>
                <p>Le club des Canibales79 a été créé le 12 août 2017 et est le premier club de canicross à avoir été créé
                    dans les
                    Deux-Sèvres (79).<br>
                    Son siège social est à Chauray et il compte aujourd'hui plus d'une quarantaine de licenciés.<br>
                    <br>
                    Le Bureau de l'association est composé de :
                </p>
                <div class="row my-4 text-center justify-content-around">
                    <div class="col-auto">
                        <img src="../assets/photos/bureau-laura.jpg" alt="Laura la présidente du club" width="200px"
                            style="border-radius: 100%">
                        <p class="m-0">Laura</p>
                        <small>Présidente</small>
                    </div>
                    <div class="col-auto">
                        <img src="../assets/photos/bureau-marion.jpg" alt="Marion la secrétaire du club" width="200px"
                            style="border-radius: 100%">
                        <p class="m-0">Marion</p>
                        <small>Sécrétaire</small>
                    </div>
                    <div class="col-auto">
                        <img src="../assets/photos/bureau-lea.jpg" alt="Léa la secrétaire-adjointe du club" width="200px"
                            style="border-radius: 100%">
                        <p class="m-0">Léa</p>
                        <small>Secrétaire-adjointe</small>
                    </div>
                    <div class="col-auto">
                        <img src="../assets/photos/bureau-stephanie.jpg" alt="Stéphanie la trésorière du club"
                            width="200px" style="border-radius: 100%">
                        <p class="m-0">Stéphanie</p>
                        <small>Trésorière</small>
                    </div>
                    <div class="col-auto">
                        <img src="../assets/photos/bureau-stephane.jpg" alt="Stéphane le trésorier-adjoint du club"
                            width="200px" style="border-radius: 100%">
                        <p class="m-0">Stéphane</p>
                        <small>Trésorier-adjoint</small>
                    </div>
                </div>
            </div>

            {{-- REFERENTS --}}
            <div class="row">
                <h4>LES RÉFÉRENTS DU CLUB</h4>
                <p>Ils servent à accompagner les différentes activités que propose le club.</p>

                <h5 class="my-3">RÉFÉRENTS ACCUEIL DES NOUVEAUX</h5>
                <p><strong>Dimitri, Marion, Nathalie et Micky sont les référents accueil des nouveaux</strong>, ce sont eux
                    les premiers
                    contacts via le Messenger de la page Facebook canibales79 , et se proposent d’être présents lors des
                    séances
                    d’essai en canicross.<br>
                    Le but de cette séance d'essai est de faire un point sur le matériel, la forme du binôme, expliquer les
                    bases de la
                    discipline puis courir sur un petit parcours selon le niveau du binôme.<br>
                    Les séances d’essai se font généralement le jeudi soir à Chauray.<br>
                    Selon les besoins des débutants, les référents se proposent de former un groupe « débutants » en même
                    temps
                    que l’entrainement canicross du jeudi soir afin que les débutants puissent prendre
                    confiance à un rythme plus cool et sur une distance plus courte.<br>
                    Au fur et à mesure, l’allure et la distance augmentent progressivement afin de pouvoir rejoindre le
                    groupe
                    plus « confirmé » dès que les débutants le souhaitent.</p>

                <h5 class="my-3">RÉFÉRENTE CANICROSS</h5>
                <p><strong>Laura est référente canicross</strong>, elle propose des entraînements, mais aussi des
                    défis/challenges toujours dans
                    un esprit convivial.<br>
                </p>

                <h5 class="my-3">RÉFÉRENTE CANIMARCHE</h5>
                <p><strong>Karine est la référente canimarche</strong>, elle essaie de regrouper les propositions de
                    canimarches sur le mois
                    afin qu’un planning soit préétabli, via le tchat Canimarche.<br>
                    Les entrainements de canimarche ont lieu le dimanche matin à 09h00.</p>

                <h5 class="my-3">RÉFÉRENTE CANIVTT</h5>
                <p><strong>Léa est la référente canivtt</strong>, elle organise plusieurs dimanches par mois des
                    entraînements.
                    Les entrainements ont lieu le dimanche matin à 10h00, certaines sorties peuvent être proposées en
                    semaine
                    selon les disponibilités.</p>
            </div>

            {{-- Lien vers haut de page --}}
            <div class="text-center">
                <a href="#club" class="text-decoration-none text-secondary">
                    <i class="fa-solid fa-angles-up"></i> Haut de page
                </a>
            </div>
        </section>

        {{-- ENTRAINEMENTS ET SORTIES --}}
        <section class="mb-5 border-top">
            <div style="margin-top: -150px; padding-top: 150px" id="entrainements"></div>
            <h2 class="text-center fw-bold my-5">ENTRAÎNEMENTS ET SORTIES</h2>

            <p>
                Chez les CANIBALES 79, nous faisons des sorties et entraînements toute l'année et par tous les temps !<br>
                Enfin, presque : nous ne sortons pas avec les chiens en cas de forte chaleur et faisons généralement une pause en juillet et août.<br>
                <br>
                Les horaires des sorties sont les suivants :<br>
                <strong>Le mardi et le jeudi à 19h00</strong> : entraînement/sortie canicross<br>
                <strong>Le samedi à 10h00</strong> : sortie canicross<br>
                <strong>Le dimanche à 09h00</strong> : sortie canimarche<br>
                <strong>Le dimanche à 10h00</strong> : sortie canivtt<br>
                Lorsque les températures commencent à monter, l'heure des sorties du matin est adaptée en fonction de la
                méteo.<br>
                <br>
                En semaine nous nous séparons en deux groupes de canicross en fonction de l'objectif visé :<br>
                - <strong>un groupe " entraînement "</strong> qui va travailler en fractionné<br>
                - <strong>un groupe " sortie "</strong> pour le plaisir<br>
                Les séances de fractionné permettent au maître et à son chien de progresser, tout en gardant un esprit
                ludique et en veillant à ce que le plaisir du chien reste intact.<br>
                Les référents peuvent proposer des petits ateliers de quelques minutes lors de l’entraînement
                pour les intéressés (travail de dépassements, départs, côtes, descentes, etc.).<br>
                Des <strong>groupes d’allure</strong> peuvent également être formés afin que chacun puisse aller à son
                rythme :)
            </p>

            {{-- VACCINS OBLIGATOIRES --}}
            <div class="mx-auto" style="width: 100%; max-width: 800px">
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
                        Les chiens doivent être à jour de leurs vaccins pour pouvoir participer à tout entraînement,
                        sortie ou compétition sous la responsabilité des CANIBALES 79.
                    </div>
                </div>
            </div>

            {{-- Lien vers haut de page --}}
            <div class="text-center">
                <a href="#club" class="text-decoration-none text-secondary">
                    <i class="fa-solid fa-angles-up"></i> Haut de page
                </a>
            </div>
        </section>

        {{-- COMPETITION --}}
        <section class="text-center mb-5 border-top">

            <div style="margin-top: -150px; padding-top: 150px" id="compet"></div>
            <h2 class="text-center fw-bold my-5">COMPÉTITION</h2>
            <p class="text-start mb-5">Les CANIBALES 79 étant adhérents de la Fédération des Sports et Loisirs Canins,
                toutes les
                compétitions de la FSLC sont accessibles à nos licenciés.<br>
                <strong>Il y a des compétitions dans toute la France, toute l'année</strong> sauf aux périodes les plus
                chaudes de l'été.<br>
                Parmi ces dizaines de compétitions annuelles, il y en a certaines qui sont spéciales : ce sont les courses "
                <strong>Chien d'Or</strong> ".<br>
                Le trophée Chien d'Or est un classement national de tous les licenciés affiliés à la FSLC, basé sur leurs 5
                meilleurs résultats de la saison sur les courses concernées par ce trophée.<br>
                <i class="fa-regular fa-hand-pointer"></i> <a class="link-secondary"
                    href="https://www.fslc-canicross.net/wp-content/uploads/2021/05/REG-03.C02-Mode-demploi-Chien-dOr.pdf">Plus
                    d'information sur le trophée Chien d'Or</a>
            </p>

            {{-- Calendrier COMPET --}}
            <h5 class="fw-bold">Retrouvez ci-dessous le calendrier des compétitions de la FSLC</h5>
            <a class="btn btn-outline-danger" type="button" href="https://courses.fslc-canicross.net/fr/"
                target="blank">CALENDRIER
                DES COMPÉTITIONS FSLC
            </a>
        </section>

        {{-- NOUS REJOINDRE --}}
        <section class="pb-5 border-top text-center">
            <div style="margin-top: -150px; padding-top: 150px" id="licence"></div>
            <div class="w-75 mx-auto">
                <h2 class="fw-bold my-5">NOUS REJOINDRE</h2>
                <p>Tu veux découvrir nos disciplines ou tu les pratiques déjà, et tu souhaites venir faire une séance
                    d'essai
                    ?<br>
                    Les infos sur nos licences et comment s'inscrire, c'est par ici :
                    <a href="/nous-rejoindre"><button type="button" class="btn text-white inscription"
                            style="background-color: rgb(255,0,0)">INFOS INSCRIPTION</button></a>
            </div>

            {{-- Lien vers haut de page --}}
            <div class="text-center pt-5">
                <a href="#club" class="text-decoration-none text-secondary">
                    <i class="fa-solid fa-angles-up"></i> Haut de page
                </a>
            </div>
        </section>

    </div>
@endsection
