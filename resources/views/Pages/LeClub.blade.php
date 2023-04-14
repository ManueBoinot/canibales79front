@extends('layouts.app')

@section('content')
    <div class="container py-5 px-lg-5">

        <div class="ancre" id="club"></div>
        <h1 class="py-4 text-center fw-bold">LE CLUB CANIBALES79</h1>

        {{-- BUREAU --}}
        <div class="row mb-4">
            <h2 class="mb-4">LE BUREAU</h2>
            <p>Le club des Canibales79 a été créé le 12 août 2017 et est le premier club de canicross à avoir été créé
                dans les
                Deux-Sèvres (79).<br>
                Son siège social est à Chauray et il compte aujourd'hui plus d'une quarantaine de licenciés.<br>
                <br>
                Le Bureau de l'association est composé de :
            </p>
            <div class="row my-4 text-center justify-content-around">
                <div class="col-auto mb-2">
                    <img src="../assets/photos/bureau-laura.jpg" alt="Laura la présidente du club" class="illu-bureau">
                    <p class="m-0">Laura</p>
                    <small class="fw-bold">Présidente</small>
                </div>
                <div class="col-auto mb-2">
                    <img src="../assets/photos/bureau-marion.jpg" alt="Marion la secrétaire du club" class="illu-bureau">
                    <p class="m-0">Marion</p>
                    <small class="fw-bold">Sécrétaire</small>
                </div>
                <div class="col-auto mb-2">
                    <img src="../assets/photos/bureau-lea.jpg" alt="Léa la secrétaire-adjointe du club" class="illu-bureau">
                    <p class="m-0">Léa</p>
                    <small class="fw-bold">Secrétaire-adjointe</small>
                </div>
                <div class="col-auto mb-2">
                    <img src="../assets/photos/bureau-stephanie.jpg" alt="Stéphanie la trésorière du club"
                        class="illu-bureau">
                    <p class="m-0">Stéphanie</p>
                    <small class="fw-bold">Trésorière</small>
                </div>
                <div class="col-auto mb-2">
                    <img src="../assets/photos/bureau-stephane.jpg" alt="Stéphane le trésorier-adjoint du club"
                        class="illu-bureau">
                    <p class="m-0">Stéphane</p>
                    <small class="fw-bold">Trésorier-adjoint</small>
                </div>
            </div>
        </div>

        {{-- REFERENTS --}}
        <div class="row">
            <h2 class="mb-4">LES RÉFÉRENTS DU CLUB</h2>

            <div class="mb-3">
                <h3>RÉFÉRENTS ACCUEIL DES NOUVEAUX</h3>
                <p><strong>Dimitri, Marion, Nathalie et Micky sont les référents accueil des nouveaux</strong>, ce sont eux
                    les premiers
                    contacts via le Messenger de la page Facebook canibales79 , et se proposent d’être présents lors des
                    séances
                    d’essai en canicross.<br>
                    Le but de cette séance d'essai est de faire un point sur l'équipement, la forme du binôme, expliquer les
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
            </div>

            <div class="mb-3">
                <h3>RÉFÉRENTE CANICROSS</h3>
                <p><strong>Laura est référente canicross</strong>, elle propose des entraînements, mais aussi des
                    défis/challenges toujours dans
                    un esprit convivial.<br>
                </p>
            </div>

            <div class="mb-3">
                <h3>RÉFÉRENTE CANIMARCHE</h3>
                <p><strong>Karine est la référente canimarche</strong>, elle essaie de regrouper les propositions de
                    canimarches sur le mois
                    afin qu’un planning soit préétabli, via le tchat Canimarche.<br>
                    Les entrainements de canimarche ont lieu le dimanche matin à 09h00.</p>
            </div>

            <div class="mb-3">
                <h3>RÉFÉRENTE CANIVTT</h3>
                <p><strong>Léa est la référente canivtt</strong>, elle organise plusieurs dimanches par mois des
                    entraînements.
                    Les entrainements ont lieu le dimanche matin à 10h00, certaines sorties peuvent être proposées en
                    semaine
                    selon les disponibilités.</p>
            </div>
        </div>

        {{-- Bouton contact --}}
        <div class="d-flex justify-content-around">
            <a href="/infos-pratiques" type="button" class="btn black-button">INFOS PRATIQUES</a>
            <a href="/contact" type="button" class="btn red-button"><i class="fa-solid fa-envelope me-2"></i>CONTACT</a>
        </div>

        </section>
    </div>
@endsection
