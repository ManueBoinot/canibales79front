@extends('layouts.app')

@section('content')
    <div class="container bg-white px-lg-5">
        <h1 class="pt-5 text-center">LE CLUB</h1>

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

        <section>
            <div style="margin-top: -200px; padding-top: 200px" id="asso"></div>
            <h2 class="text-center">L'ASSOCIATION CANIBALES 79</h2>
            <p class="text-center" style="height:400px">Section en construction</p>
        </section>

        <section>
            <div style="margin-top: -200px; padding-top: 200px" id="entrainements"></div>
            <h2 class="text-center">ENTRAÎNEMENTS ET SORTIES</h2>
            <p class="text-center" style="height:400px">Section en construction</p>
        </section>

        <section class="text-center">
            <div style="margin-top: -200px; padding-top: 200px" id="compet"></div>
            <h2>COMPÉTITION</h2>
            <h5>Vous trouverez ci-dessous le calendrier des compétitions de la FSLC</h5>
            <div class="py-3">
                <iframe src="https://courses.fslc-canicross.net/fr/" frameborder="0" width="100%"
                    style="aspect-ratio: 16/9"></iframe>
            </div>
        </section>

        <section>
            <div style="margin-top: -200px; padding-top: 200px" id="licence"></div>
            <h2 class="text-center">NOUS REJOINDRE</h2>
            <p class="text-center" style="height:400px">Section en construction</p>
        </section>

    </div>
@endsection
