    <header class="sticky-md-top">

        <!-- NAVBAR ==================================================================================================== -->
        <nav id="header-nav" class="navbar navbar-dark navbar-expand-lg bg-black">
            <div class="container-fluid">

                <!-- LOGO CANIBALES -->
                <a class="nav-link" href="/" title="Retour à l'accueil">
                    <img src="../.././assets/logos/logo-canibales-contour.png" class="py-1" style="width: 200px">
                </a>

                <!-- TOGGLER NAVBAR -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" title="Menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- CONTENU NAVBAR -->
                <div class="offcanvas offcanvas-end bg-black text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel" data-bs-scroll="true">

                    <div class="offcanvas-header">
                        <!-- Logo du menu -->
                        <a class="nav-link" href="/">
                            <img src="../.././assets/logos/logo-canibales-contour.png" style="width: 100px">
                        </a>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        {{-- 
                    <li>
                        <hr class="divider">
                    </li> --}}
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                            {{-- Lien vers ESPACE ADHERENT SI CONNECTÉ --------------------- --}}
                            {{-- @if (Auth::user()) --}}

                            {{-- Liens USER --------------------- --}}
                            {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" title="Réservé aux licenciés">
                                <i class="fa-regular fa-user p-2"></i>ESPACE PERSONNEL
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark bg-black">
                                <li><a class="dropdown-item" href="{{ route('user.show', Auth::user()) }}">Mes
                                        informations
                                        personnelles</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li> --}}
                            {{-- lien pour se déconnecter --}}
                            {{-- <li>
                                     <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                            {{ __('DÉCONNEXION') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li> --}}

                            {{-- Lien ADMIN vers BACK OFFICE --------------------- --}}
                            @if (Auth::user())
                                {{-- lien pour se déconnecter --}}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-danger border border-danger rounded"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-lock mx-2"></i>ADMIN
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark bg-black">
                                        <li>
                                            <a class="dropdown-item" href="/admin">INTERFACE ADMIN</a>
                                        </li>
                                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                {{ __('DÉCONNEXION') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>

                                </li>
                        </ul>
                        @endif

                        {{-- Lien vers ESPACE ADHERENT SI PAS CONNECTÉ --------------------- --}}
                        {{-- @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" title="Réservé aux licenciés">
                                        <i class="fa-regular fa-user fs-4 me-3 fw-bold"></i>ESPACE PERSONNEL
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark bg-black"> --}}
                        {{-- Lien pour se connecter --}}
                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                @endif --}}
                        {{-- 

                                <li>
                                    <hr class="dropdown-divider">
                                </li> --}}

                        <!-- Lien vers ACCUEIL -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/"><i
                                    class="fa-solid fa-house me-3 d-lg-none"></i>ACCUEIL</a>
                        </li>

                        <!-- Liens vers LE CLUB -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                LE CLUB
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark bg-black">
                                <li><a class="dropdown-item" href="/le-club">Qui sommes-nous ?</a></li>
                                <li><a class="dropdown-item" href="/les-disciplines">Nos disciplines</a>
                                </li>
                                <li><a class="dropdown-item" href="/les-partenaires">Nos partenaires</a>
                                </li>
                                <li><a class="dropdown-item" href="/reglementation">Réglementation</a></li>
                            </ul>
                        </li>

                        <!-- Liens vers INFOS PRATIQUES -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                INFOS PRATIQUES
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark bg-black">
                                <li><a class="dropdown-item" href="/infos-pratiques">Horaires et
                                        compétition</a></li>
                                <li><a class="dropdown-item" href="/nous-rejoindre">Infos licences</a></li>
                                <li><a class="dropdown-item" href="/equipement">Équipement</a></li>
                            </ul>
                        </li>

                        <!-- Lien vers FAQ -->
                        <li class="nav-item">
                            <a class="nav-link" href="/faq">FAQ</a>
                        </li>

                        <!-- Lien vers PARTENAIRES -->
                        <li class="nav-item ">
                            <a class="nav-link fw-bold" href="/nous-rejoindre">NOUS REJOINDRE</a>
                        </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- BANDEAU SOUS NAVBAR RESEAUX SOCIAUX -->
        @include('CompBandeauReseaux')

    </header>
