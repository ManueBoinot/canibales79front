    <header class="sticky-md-top">

        <!-- NAVBAR ==================================================================================================== -->
        <nav class="navbar navbar-dark" style="background: rgb(0,0,0);
        background: linear-gradient(135deg, rgba(0,0,0,1) 30%, rgba(255,0,0,1) 100%);">

            <div class="container-fluid d-flex flex-wrap justify-content-center justify-content-sm-end align-items-center">
                <!-- LOGO CANIBALES -->
                <a class="nav-link" href="/">
                    <img src="../.././assets/logos/logo-canibales-contour.png" style="width: 200px">
                </a>

                <!-- TOGGLER NAVBAR -->
                <button class="navbar-toggler mx-auto me-sm-5 bg-white" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    style="box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.658);--bs-bg-opacity: 0.1">
                    <i class="fa-solid fa-bars text-white fs-2 p-1"></i>
                </button>
            </div>

            <!-- CONTENU NAVBAR -->
            <div class="offcanvas offcanvas-end bg-black" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel" data-bs-scroll="true">
                <div class="offcanvas-header">
                    <!-- Logo du menu -->
                    <a class="nav-link" href="/">
                        <img src="../.././assets/logos/logo-canibales-contour.png" style="width: 210px">
                    </a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                    <!-- Barre de recherche -->
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>

                    <li>
                        <hr class="divider">
                    </li>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                        <!-- Lien vers ACCUEIL -->
                        <li class="nav-item">
                            <a class="nav-link" href="/"><i class="fa-solid fa-house"></i></a>
                        </li>

                        <!-- Lien vers LE CLUB -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                LE CLUB
                            </a>
                            <ul class="dropdown-menu text-bg-dark">
                                <li><a class="dropdown-item" href="/le-club#asso">L'association CANIBALES
                                        79</a></li>
                                <li><a class="dropdown-item" href="/le-club#entrainements">Entraînements et
                                        sorties<i class="ms-2 fa-solid fa-clock"></i></a></li>
                                <li><a class="dropdown-item" href="/le-club#compet">Compétition<i
                                            class="ms-2 fa-solid fa-trophy"></i></a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-uppercase" href="/le-club#licence"><i
                                            class="fa-solid fa-star me-2"></i>Rejoindre le
                                        club</a></li>
                            </ul>
                        </li>

                        <!-- Lien vers LES DISCIPLINES -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                LES DISCIPLINES
                            </a>
                            <ul class="dropdown-menu text-bg-dark">
                                <li><a class="dropdown-item" href="/les-disciplines#canicross">Canicross et
                                        Canitrail<i class="ms-2 fa-solid fa-person-running"></i><i
                                            class="fa-solid fa-dog"></i></a></li>
                                <li><a class="dropdown-item" href="/les-disciplines#canivtt">Canivtt
                                        et
                                        Canipédicycle<i class="ms-2 fa-solid fa-person-biking"></i><i
                                            class="fa-solid fa-dog"></i></a></li>
                                <li><a class="dropdown-item" href="/les-disciplines#canimarche">Canimarche<i
                                            class="ms-2 fa-solid fa-person-walking"></i><i
                                            class="fa-solid fa-dog"></i></a>
                                </li>
                            </ul>
                        </li>

                        <!-- Lien vers LE MATERIEL -->
                        <li class="nav-item">
                            <a class="nav-link" href="/le-materiel">LE MATÉRIEL</a>
                        </li>

                        <!-- Lien vers FAQ -->
                        <li class="nav-item">
                            <a class="nav-link" href="/faq">FOIRE AUX QUESTIONS</a>
                        </li>

                        <!-- Lien vers FEDERATION -->
                        <li class="nav-item">
                            <a class="nav-link" href="/la-reglementation">LA FÉDÉRATION <img
                                    src="../.././assets/logos/logo_fslc.png" alt="logo FSLC"
                                    style="width: 40px"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- BANDEAU SOUS NAVBAR RESEAUX SOCIAUX -->
@include('Composants.BandeauReseaux')

