@extends('layouts.app')

@section('content')
    <div class="container bg-white px-lg-5">
        <h1 class="py-5 text-center fw-bold">LE MATÉRIEL</h1>

        {{-- Intro sur FENRIL --}}
        <div class="row mb-5">
            <div class="row mb-4">
                <h5 class="text-center">Les sports de traction en binôme nécessitent un matériel adapté pour garantir confort
                    et bien-être du chien
                    comme de l'humain.</h5>
            </div>

            {{-- Matériel CANICROSS --}}
            <div class="row mb-5 mt-5">
                <div class="col-auto">
                    <figure>
                        <a target="blank"
                            href="https://www.fenril.fr/kit-canicross/1438-kit-canicross-inlandsis-3760264640080.html"
                            target="blank"><img src="../assets/photos/materiel/kit-canicross-inlandsis.jpg"
                                alt="kit complet canicross"></a>
                        <figcaption class="fst-italic text-secondary"><small>Le kit complet Canicross de Inlandsis</small>
                        </figcaption>
                    </figure>
                </div>
                <div class="col">
                    <h4 class="pb-3"><i class="fa-solid fa-person-running"></i><i class="fa-solid fa-dog"></i> CANICROSS |
                        CANIMARCHE</h4>
                    <p><strong>Pour le chien, il faut <span class="text-decoration-underline">un harnais</span></strong>
                        dont le
                        choix est
                        primordial pour éviter toute blessure et lui permettre de libérer son
                        énergie sans limite.<br>
                        Il doit être adapté à la morphologie de votre chien.<br>
                        <span class="fw-bold" style="color:#e70000"><i class="fa-solid fa-triangle-exclamation"></i> Les
                            harnais
                            de
                            type " JULIUS K-9 " SONT TOTALEMENT PROSCRITS ! <i
                                class="fa-solid fa-triangle-exclamation"></i></span>
                    </p>
                    <p><strong>Pour l'humain, il y a le
                            choix entre <span class="text-decoration-underline">baudrier et ceinture</span></strong> : c'est
                        avant tout une question de goût !<br>
                        L'idéal
                        est de pouvoir essayer différents modèles pour trouver celui qui vous convient le mieux (nous
                        pouvons
                        vous
                        en prêter sur demande).<br>
                        Il ne faut pas non plus négliger le choix de ses <strong
                            class="text-decoration-underline">chaussures</strong> !<br>
                        Et pour cela, nous vous invitons à rencontrer Yannick à son magasin <strong><a
                                class="link-secondary" href="https://foulees.com/-niort-"
                                target="blank">FOUL&ES</a></strong>, il vous donnera les meilleurs conseils pour trouver
                        votre paire idéale.
                    </p>
                    <p>Enfin, <strong>pour relier chien et humain on utilise <span class="text-decoration-underline">une
                                laisse à amortisseur</span></strong> qui
                        permet d'absorber les chocs lors des variations d'allure.<br>
                        Elle possède un mousqueton à chaque extrémité pour pouvoir être attachée au baudrier et au harnais.
                    </p>
                </div>
            </div>

            {{-- Matériel CANIVTT --}}
            <div class="row mt-3">
                <div class="col-auto">
                    <figure><a target="blank" href="https://www.fenril.fr/kits-cani-vtt/1425-kit-canivtt-inlandsis.html"
                            target="blank">
                            <img src="../assets/photos/materiel/kit-canivtt-inlandsis.jpg" alt="kit complet canivtt"
                                title="Kit complet CANIVTT de Inlandsis"></a>
                        <figcaption class="fst-italic text-secondary"><small>Le kit complet CaniVTT de Inlandsis</small>
                        </figcaption>
                    </figure>
                </div>
                <div class="col">
                    <h4 class="pb-3"><i class="fa-solid fa-person-biking"></i> <i class="fa-solid fa-dog"></i> CANIVTT
                    </h4>
                    <p><strong>Pour le canivtt, le harnais du chien est le même que pour le canicross/la canimarche mais
                            <span class="text-decoration-underline">la laisse est plus longue</span></strong>.<br>
                        Elle possède un mousqueton à l'extrémité côté chien, et une boucle/poignée à l'autre extrémité pour
                        être passée autour du guidon du VTT.<br>
                        Si vous comptez pratiquer les deux disciplines il faudra vous équiper de 2 laisses différentes.<br>
                        De plus, <strong>le port d'<span class="text-decoration-underline">un casque et de gants</span> est
                            obligatoire</strong> en canivtt car la vitesse
                        pouvant atteindre 60
                        km/h pour les plus aguerris, les chutes peuvent être dangereuses.</p>
                    <p><i class="fa-solid fa-triangle-exclamation"></i> <strong>Équipement supplémentaire du canivtt : <span
                                class="text-decoration-underline">la
                                barre canivtt</span>.</strong><br>
                        C'est une tige souple fixée sous le guidon du VTT dans laquelle on fait passer la laisse afin
                        qu'elle ne
                        se prenne pas dans la roue avant.<br>La barre canivtt permet également d'apporter un amortissement
                        supplémentaire en cas de brusque changement de direction du chien.</p>
                </div>
            </div>

            <div class="text-center py-4"><a class="link-danger" href="/les-disciplines">
                    <h5><i class="fa-regular fa-hand-pointer"></i> Disciplines et conditions d'accès</h5>
                </a></div>


            <div class="text-center"> <a href="/contact"><button type="button" class="btn text-white contact"
                        style="background-color: rgb(255,0,0)"><i class="fa-solid fa-envelope me-2"></i>CONTACT</button></a>
            </div>
        </div>

        {{-- CONSEILS SUR CHOIX DE HARNAIS PAR FENRIL --}}
        {{-- Harnais X-BACK --}}
        <div class="row mb-5 border-top pt-5">
            <h3 class="fw-bold text-center mb-4">CHOISIR LE BON HARNAIS POUR SON CHIEN</h3>
            <h5 class="text-center">Vous trouverez ci-dessous les conseils de notre partenaire <strong><a target="blank"
                        class="link-secondary" href="https://www.fenril.fr/">FENRIL</a></strong> pour vous aider à choisir
                le meilleur harnais pour votre chien.<br>
            </h5>
        </div>

        <div class="row">
            <div class="col">
                <h5 class="fw-bold" style="color:#e70000">LES HARNAIS DE TYPE " X-BACK "</h5>
                <p>Dénommés ainsi en raison du X que forment les sangles sur le dos du chien, les harnais x-back sont le
                    type de
                    harnais le plus éprouvé et le plus populaire.</p>
                <p class="fst-italic"><i class="fa-regular fa-hand-pointer"></i> Exemples : <a target="blank"
                        class="link-dark"
                        href="https://www.fenril.fr/harnais-canicross/1303-harnais-polar-quest.html">Inlandsis
                        Polar
                        Quest</a>, <a target="blank" class="link-dark"
                        href="https://www.fenril.fr/harnais-canicross/378-x-back-sprint.html?search_query=lightweight&results=1">Manmat
                        Lightweight</a></p>
                <ul>
                    <li>Avantages : répartition optimale de la traction, confortables même sur de longues distances,
                        plusieurs
                        coupes disponibles en fonction des différents morphotypes, relativement stables</li>
                    <li>Inconvénients : pendouillent si le chien ne tracte pas, pas de tailles pour les très petits ou
                        très
                        grands chiens, inadaptés aux chiens compacts type staff/staffie</li>
                </ul>
                <p><em>Conclusion:</em></p>
                <ul>
                    <li>Harnais idéal pour 90% des chiens entre 14 et 45 Kg que ce soit en canicross, cani-VTT ou
                        attelage
                    </li>
                    <li>Privilégier un modèle offrant un faible intervalle de poids entre chaque taille, ce qui évite de
                        se
                        retrouver entre 2 tailles avec aucune taille vraiment adaptée</li>
                    <li>Préférer un modèle avec répartiteur sternal (sangle dédoublée sous la cage thoracique), plus
                        stable
                        et
                        permettant une meilleure répartition de la traction.</li>
                </ul>
            </div>
            <div class="col-auto mx-auto"><img src="http://www.fenril.fr/img/cms/mms_img1701974663.jpg"
                    alt="Inlandsis Polar Quest" width="300">
            </div>
        </div>

        {{-- Harnais COURTS --}}
        <div class="row mb-5 border-bottom">
            <div class="col">
                <h5 class="fw-bold" style="color:#e70000">LES HARNAIS COURTS</h5>
                <p class="fst-italic"><i class="fa-regular fa-hand-pointer"></i> Exemples : <a target="blank"
                        class="link-dark"
                        href="https://www.fenril.fr/harnais-canicross/107-harnais-canicross-zerodcshort.html">DC
                        Short</a>, <a target="blank" class="link-dark"
                        href="https://www.fenril.fr/harnais-chien-traineau/1362-long-distance-harness-manmat.html">Manmat
                        Long Distance</a></p>
                <ul>
                    <li>Avantages : pas de pression sur les hanches, polyvalence vers la marche et la promenade, tailles
                        disponibles pour tous les gabarits de chiens, réglables</li>
                    <li>Inconvénient: tendance à remonter sous la gorge, moindre puissance, inadaptés à la traction de
                        charges
                        basses.</li>
                </ul>
                <p><em>Conclusion:</em> nous recommandons les harnais courts pour </p>
                <ul>
                    <li>les chiens compacts (staffie, staff, etc)</li>
                    <li>les petits chiens &lt;14 Kg ou les très grands chiens &gt;45 Kg</li>
                    <li>les activités au long cours (cani-rando, traineau longue distance)</li>
                    <li>les chiens présentant une sensibilité particulière au niveau des hanches ou de la colonne vertébrale
                    </li>
                    <li>globelement pour une utilisation loisir polyvalente.</li>
                </ul>
            </div>
            <div class="col-auto mx-auto"><img src="http://www.fenril.fr/img/cms/griff-in-zero-short.jpg"
                    alt="Zero DC Short" width="300"></div>
        </div>

        {{-- Harnais REGLABLES --}}
        <div class="row mb-5 border-bottom">
            <div class="col">
                <h5 class="fw-bold" style="color:#e70000;">LES HARNAIS MULTI-RÉGLAGES</h5>
                <p class="fst-italic"><i class="fa-regular fa-hand-pointer"></i> Exemples : <a target="blank"
                        class="link-dark"
                        href="https://www.fenril.fr/harnais-canicross/1270-omnijore-ruffwear-harnais.html">Ruffwear
                        Omnijore</a>, <a target="blank" class="link-dark"
                        href="https://www.fenril.fr/harnais-canicross/876-confort-harnais-canicross.html">Difac Confort</a>
                </p>
                <ul>
                    <li>Avantages : réglables</li>
                    <li>Inconvénients : réglablesJ =&gt; les réglages se desserrent à l’utilisation et les boucles
                        peuvent provoquer des blessures par pression et/ou frottement</li>
                </ul>
                <p><em>Conclusion:</em> pour possesseurs de plusieurs chiens souhaitant acquérir 1 seul harnais pour tous
                    leurs chiens ou pour une utilisation loisir.</p>
            </div>
            <div class="col-auto mx-auto"><img style="margin-left:auto;margin-right:auto;"
                    src="http://www.fenril.fr/img/cms/1237_1.jpg" alt="Ruffwear Omnijore harnais" width="300"></div>
        </div>

        {{-- Cas particuliers --}}
        <div class="row mb-5">
            <h5 class="fw-bold" style="color:#e70000">CAS PARTICULIERS</h5>
            <p><i class="fa-regular fa-hand-pointer"></i> <a target="blank" class="link-dark"
                    href="https://www.fenril.fr/harnais-canicross/1788-inlandsis-open-back.html">Inlandsis Open-Back</a>
            </p>
            <ul>
                <li>Avantages : conception idéale petits chiens et chiens compacts, réglage longueur de dos + cage
                    thoracique</li>
                <li>Inconvénients : moins adapté pour les chiens de taille moyenne et grande pour lesquels un x-back
                    sera
                    plus stable</li>
            </ul>
            <p><i class="fa-regular fa-hand-pointer"></i><a target="blank" class="link-dark"
                    href="https://www.fenril.fr/harnais-canicross/110-harnais-zerodc-faster.html">Zero DC
                    Faster</a>
            </p>
            <ul>
                <li>Avantages : modèle le plus stable sur lescages thoraciques profondes– le Faster a été
                    à la base conçuspécifiquement pour les Greysters et Braques avec une cage thoracique très
                    volumineuse
                </li>
                <li>Inconvénients : encolure ronde et large ayant tendance à gêner le mouvement des épaules et à
                    comprimer
                    la gorge.</li>
            </ul>
            <p><i class="fa-regular fa-hand-pointer"></i> <a target="blank" class="link-dark"
                    href="https://www.fenril.fr/harnais-canicross/443-harnais-free-motion.html">Non Stop Free
                    Motion</a></p>
            <ul>
                <li>Avantages : relativement stable, partie arrière réglable en longueur</li>
                <li>Inconvénients : encombrant et rigide</li>
            </ul>
        </div>

        <div class="row mb-5 border-top pt-3 overflow-auto">
            <h5 class="fw-bold text-center mb-4" style="color:#e70000;">Tableau de synthèse avec les modèles de harnais
                les
                plus populaires</h5>
            <table class="table table-striped-columns" style="height:259px;" width="888">
                <thead>
                    <tr>
                        <th scope="col">
                            <p></p>
                        </th>

                        <th scope="col text-center align-items-center">
                            <a target="blank" class="btn btn-default"
                                href="https://www.fenril.fr/harnais-canicross/1303-harnais-polar-quest.html">Inlandsis
                                Polar
                                Quest</a>
                        </th>

                        <th scope="col">
                            <a target="blank" class="btn btn-default"
                                href="https://www.fenril.fr/harnais-canicross/325-x-back-classique.html">Manmat X-back
                                classique</a>
                        </th>

                        <th scope="col">
                            <a target="blank" class="btn btn-default"
                                href="https://www.fenril.fr/harnais-canicross/1788-inlandsis-open-back.html">Inlandsis
                                Open-Back</a>
                        </th>

                        <th scope="col">
                            <a target="blank" class="btn btn-default"
                                href="https://www.fenril.fr/harnais-canicross/325-x-back-classique.html">Inlandsis
                                Blizzard
                                Beast</a>
                        </th>

                        <th scope="col">
                            <a target="blank" class="btn btn-default"
                                href="https://www.fenril.fr/harnais-canicross/107-harnais-canicross-zerodcshort.html">Zero
                                DC Short</a>
                        </th>

                        <th scope="col">
                            <a target="blank" class="btn btn-default"
                                href="https://www.fenril.fr/harnais-canicross/110-harnais-zerodc-faster.html">Zero DC
                                Faster</a>
                        </th>

                        <th scope="col">
                            <a target="blank" class="btn btn-default"
                                href="https://www.fenril.fr/harnais-canicross/378-x-back-sprint.html">Manmat x-back
                                Lightweight</a>
                        </th>

                        <th scope="col">
                            <a target="blank" class="btn btn-default"
                                href="https://www.fenril.fr/harnais-chien-traineau/1362-long-distance-harness-manmat.html">Manmat
                                Long Distance</a>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <p><strong>Nordiques, Bergers, Retrievers</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>++</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>+</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>+</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>+</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>+</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>+</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Eurohound, Greyster, Braque</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>+</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;"></td>
                        <td style="text-align:center;">
                            <p><strong>++</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>+</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>+</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>++</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Petits chiens < 14 kg</strong>
                            </p>
                        </td>
                        <td style="text-center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>++</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>+</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>+</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Grands chiens > 45 kg</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;"></td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>+</strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong></strong></p>
                        </td>
                        <td style="text-align:center;">
                            <p><strong>+</strong></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="text-center"> <a href="/contact"><button type="button" class="btn text-white contact"
                    style="background-color: rgb(255,0,0)"><i class="fa-solid fa-envelope me-2"></i>CONTACT</button></a>
        </div>

        {{-- Crédits --}}
        <div class="row pb-5 text-end">
            <small class="fst-italic text-secondary">(Source : <a
                    href="https://www.fenril.fr/content/59-choix-harnais-canicross"
                    class="link-secondary">https://www.fenril.fr/content/59-choix-harnais-canicross)</a>
            </small>
        </div>
    </div>
@endsection
