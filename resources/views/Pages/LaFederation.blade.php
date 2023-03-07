@extends('layouts.app')

@section('content')
    <div class="container bg-white pb-5 px-lg-5">
        <div class="row mx-auto">


            <h1 class="py-5 text-center">LA FÉDÉRATION DES SPORTS ET LOISIRS CANINS</h1>

            <div class="row text-center">
                <div class="video-fslc">
                    <iframe width="100%" style="aspect-ratio: 16/9; max-width: 1024px"
                        src="https://www.youtube.com/embed/xcD6ukJoa5M" title="FSLC promo 2022" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="logo-fslc text-center">
                <img src="../assets/logos/logo_fslc.png" alt="logo de la FSLC" height="200px">
            </div>
            <div class="row">
                <h5 class="my-5 text-center">L'association sportive CANIBALES 79 est adhérente de la <strong>Fédération des Sports
                    et Loisirs
                    Canins
                    : la FSLC</strong>.</h5>

                <p>La FSLC a pour objet :</p>
                <ul>
                    <li>La promotion, l’organisation et le développement des sports canins unissant un chien et un humain
                        dans le même effort sportif tant sur le plan national qu’international. La fédération se veut dédiée
                        au sport monochien, c’est à dire un seul chien et maître dans le même effort, à savoir ; le
                        Canicross, le CaniVTT, la Canitrottinette, le Canitrail et les disciplines pouvant émerger.</li>
                    <li>D’organiser la formation de l’ensemble des acteurs des sports canins attelés, en monochien.</li>
                    <li>De défendre les intérêts moraux du canicross Français.</li>
                    <li>D’assurer la représentation du canicross Français sur le plan international.</li>
                </ul>
                <p>Elle regroupe à ce jour près de 3.500 licenciés, près de 170 clubs qui proposent annuellement plus
                    d’une centaine de compétitions à travers la France.
                </p>

                <p>
                    La <strong>réglementation</strong> appliquée par les CANIBALES 79 est celle définie par la FSLC, dont vous trouverez tous les détails <a class="link-secondary fw-bold" href="https://www.fslc-canicross.net/espace-reglementation/"
                       >ICI</a>.
                </p>
            </div>


        </div>
    @endsection
