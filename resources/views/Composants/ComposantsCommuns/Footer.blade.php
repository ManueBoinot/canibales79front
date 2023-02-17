<!-- CARROUSEL DES PARTENAIRES -->
@include('Composants.PartnersCarousel')

<footer class="container-fluid text-white pt-3 px-5"
    style="font-size: 0.7rem; background: rgb(0,0,0);
background: linear-gradient(135deg, rgba(0,0,0,1) 30%, rgba(255,0,0,0.9) 100%);">

    <div class="row mx-auto">
        <!-- Colonne PLAN DU SITE FOOTER -->
        <div id="menu-footer" class="col-12 col-sm-4 text-center text-sm-start">
            <h5 class="my-1" style="font-size: 0.8rem">PLAN DU SITE</h5>
            <ul class="list-unstyled">
                <li class="list-item"><a href="/">Accueil</a>
                </li>
                <li class="list-item"><a href="/le-club">Le club</a></li>
                <li class="list-item"><a href="/les-disciplines">Les
                        disciplines</a></li>
                <li class="list-item"><a href="/le-materiel">Le
                        matériel</a></li>
                <li class="list-item"><a href="/la-federation">La FSLC</a>
                </li>
                <li class="list-item"><a href="/faq">Foire
                        aux
                        questions</a></li>
                <li class="list-item"><a href="/nous-contacter">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Colonne LOGO FOOTER -->
        <div id="reseaux-footer" class="col-12 col-sm-4 text-center">
            <a href="/">
                <img src="../../assets/logos/logo-canibales-contour.png" style="width: 150px">
            </a>
            <div><a href="https://www.facebook.com/Canibales79"><i class="logo-footer fa-brands fa-square-facebook"
                        style="font-size: 30px"></i>
                </a>
                <a href="https://www.instagram.com/canibales_79/"><i
                        class="logo-footer fa-brands fa-square-instagram p-1" style="font-size: 30px"></i>
                </a>
            </div>
            <p class="m-2">Site réalisé par : Manue</p>
        </div>

        <!-- Colonne COORDONNEES ASSO FOOTER -->
        <div id="mentions-footer" class="col-12 col-sm-4 text-center text-sm-end">
            <h5 class=" my-1" style="font-size: 0.8rem;">CANIBALES 79</h5>
            <p class="m-1">Association loi 1901</p>
            <p class="m-1">Présidente :<br>
                Laura GUILBERT</p>
            <p class="m-1">25 route de Chauray<br>
                79260 FRANÇOIS</p>
            <a href="mailto:canibales79@gmail.com">canibales79@gmail.com</a>
        </div>
    </div>
</footer>
