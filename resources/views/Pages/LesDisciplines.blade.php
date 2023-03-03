@extends('layouts.app')

@section('content')
    <div class="container bg-white p-3 p-md-5" id="canicross">

        <h1 class="text-center my-5">LES DISCIPLINES</h1>

        <div class="row pt-4 pb-5 align-items-center">
            <div class="col-auto mx-auto mb-3">
                <img src="../../../assets/photos/carre/carre-canicross.jpeg" alt="illustration canicross"
                    style="width: 250px; border-radius: 100%;" class="align-middle">
            </div>
            <div class="col mx-lg-5">
                <h3>LE CANICROSS</h3>
                <p>
                    Le Canicross est une course à pied, coureur et chien sont reliés par une longe avec amortisseur.<br>
                    C’est une <span class="fw-bold">discipline de vitesse</span>. L’athlète éprouve des sensations
                    formidables : il peut gagner de deux à quatre kilomètres à l’heure.<br>
                    Seule une complicité avec son partenaire canin permet de tels résultats.<br>
                    Un équipement spécifique s’impose pour accompagner les performances des athlètes (harnais, baudrier,
                    ceinture, ligne de trait).<br>
                    <span class="fw-bold">Le chien doit avoir 18 mois</span> pour commencer la compétition.<br>
                    Le canicross s’adresse à tous les humains et toutes les races de chiens (sauf catégorie 1). Les
                    chaussures à pointes sont strictement interdites pour éviter de blesser nos compagnons canins.<br>
                    La distance du parcours en Canicross est comprise <span class="fw-bold">entre 5 et 9 km</span> en
                    fonction des températures.
                </p>
            </div>
        </div>

        <div class="row pt-4 pb-5 align-items-center">
            <div class="col-auto mx-auto mb-3">
                <img src="../../../assets/photos/carre/carre-canitrail.jpg" alt="illustration canitrail"
                    style="width: 250px; border-radius: 100%;">
            </div>
            <div class="col mx-lg-5">
                <h3>LE CANITRAIL</h3>
                <p>
                    Le Canitrail est plus une <span class="fw-bold">discipline d’endurance</span>. Le matériel est le même
                    que pour le Canicross. Le parcours de Canitrail est plus long que celui du Canicross avec une distance
                    comprise <span class="fw-bold">entre 10 et 20 km</span> et un dénivelé plus important. L’allure est par
                    contre différente car il faut en général alterner course et marche.<br>
                    Il est prudent d’emporter son ravitaillement et notamment de l’eau pour pouvoir hydrater son chien.<br>
                    Les règles sont identiques à celles du canicross : il faut respecter son chien, on ne doit pas le tirer,
                    l’empêcher de faire ses besoins ou de se ravitailler et on doit l’attendre si nécessaire.<br>
                    Pour commencer la compétition, <span class="fw-bold">le chien doit avoir au moins 24 mois.</span><br>
                    Cette discipline s’adresse à tous les humains et toutes les races de chiens (sauf catégorie 1).
                </p>
            </div>
        </div>

        <div class="row pt-4 pb-5 align-items-center">
            <div style="margin-top: -200px; padding-top: 200px" id="canivtt"></div>
            <div class="col-auto mx-auto mb-3">
                <img src="../../../assets/photos/carre/carre-canivtt.jpg" alt="illustration canivtt"
                    style="width: 250px; border-radius: 100%;">
            </div>
            <div class="col mx-lg-5">
                <h3>LE CANIVTT</h3>
                <P>Le CaniVTT est une discipline <span class="fw-bold">réservée aux adultes et juniors (à partir de 15
                        ans)</span>, le chien est relié au VTT par une longe de 1m50 à 2m00 maximum.<br>
                    Le vététiste doit suivre le rythme de son chien sur des parcours de <span class="fw-bold">5 à 9
                        km</span>.<br>
                    C’est un sport technique, où l’on peut atteindre des vitesses de pointe impressionnantes de plus de 50
                    km/h et des vitesses moyennes allant jusqu’à 35 km/h.<br>
                    L’homme ne doit faire qu’un avec son chien et surtout être au niveau de son chien.<br>
                    Le port du casque et des gants est obligatoire pour pratiquer ce sport à sensations fortes.<br>
                    <span class="fw-bold">Le chien doit avoir au minimum 18 mois</span> pour le pratiquer.<br>
                    Cette discipline s’adresse à tous les humains et à toutes les races de chiens (sauf catégorie 1).
                </P>
            </div>
        </div>

        <div class="row pt-4 pb-5 align-items-center">
            <div style="margin-top: -200px; padding-top: 200px" id="canimarche"></div>
            <div class="col-auto mx-auto">
                <img src="../../../assets/photos/carre/carre-canimarche.jpg" alt="illustration canimarche"
                    style="width: 250px; border-radius: 100%;">
            </div>
            <div class="col mx-lg-5">
                <h3>LA CANIMARCHE</h3>
                <p>La Canimarche (ou Canirando) est une activité qui met l’accent sur la beauté du paysage.<br>
                    L’équipement est le même que celui du Canicross ou Canitrail.<br>
                    La canimarche est un mariage entre la marche (qu’elle soit rapide ou non) et votre chien. Cela se
                    pratique le plus souvent en pleine nature, en compétition ou en loisir ce sport permet de renforcer le
                    lien entre vous et votre animal.<br>
                    <span class="fw-bold">Le chien doit avoir 18 mois</span> pour commencer la compétition.
                </p>
            </div>
        </div>
        
        <div class="row mt-5 text-center">
            <small class="text-secondary">(Source : <a href="https://www.fslc-canicross.net/les-disciplines/"
                    class="text-secondary"> https://www.fslc-canicross.net/les-disciplines/)</a></small>
        </div>

    </div>
@endsection
