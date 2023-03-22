{{-- INFORMATIONS PERSONNELLES DE L'USER --}}
<div class="row py-3 px-xl-5 mx-auto align-items-center overflow-auto mb-5 rounded gap-3">

    {{-- INFOS CLUB ================ --}}
    <div class="row border rounded mx-auto p-sm-4 text-bg-light">
        <div class="d-flex justify-content-between">
            <h4 class="text-center text-uppercase mb-4 mt-2">PROFIL SPORTIF</h4>

            {{-- Boutons MODIF et SUPPRESSION user --}}
            <div class="text-end d-flex justify-content-end gap-1">
                <form method="post" action="{{ route('user.edit', $user) }}">
                    @method('get')
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <button class="btn btn-outline-dark"><i class="fa-regular fa-pen-to-square"></i></button>
                </form>
            </div>
        </div>

        {{-- NOM USER --}}
        <div class="col-lg-6 d-flex">
            <div class="col-5">
                <p class="text-uppercase">Nom</p>
            </div>
            <div class="col-7">
                <p class="fw-bold">{{ $user->nom }}</p>
            </div>
        </div>
        {{-- PRENOM USER --}}
        <div class="col-lg-6 d-flex">
            <div class="col-5">
                <p>Prénom</p>
            </div>
            <div class="col-7">
                <p class="fw-bold">{{ $user->prenom }}</p>
            </div>
        </div>
        {{-- N° LICENCE --}}
        <div class="col-lg-6 d-flex">
            <div class="col-5">
                <p>N° licence
                </p>
            </div>
            <div class="col-7">
                <p class="fw-bold">{{ $user->numero_licence ?? 'Non renseigné' }}</p>
            </div>
        </div>
        {{-- TYPE LICENCE --}}
        <div class="col-lg-6 d-flex">
            <div class="col-5">
                <p>Type licence
                </p>
            </div>
            <div class="col-7">
                <p class="fw-bold">{{ $user->type_licence ?? 'Non renseigné' }}</p>
            </div>
        </div>
        {{-- DATE NAISSANCE --}}
        <div class="col-lg-6 d-flex">
            <div class="col-5">
                <p>Date de naissance
                </p>
            </div>
            <div class="col-7">
                <p class="fw-bold">{{ date('d-m-Y', strtotime($user->date_naissance)) }}</p>
            </div>
        </div>
        {{-- CATEGORIE --}}
        <div class="col-lg-6 d-flex">
            <div class="col-5">
                <p>Catégorie sportive
                </p>
            </div>
            <div class="col-7">
                <p class="fw-bold">{{ $user->categorie }}</p>
            </div>
        </div>
    </div>

    {{-- INFOS PERSONNELLES ================ --}}
    <div class="row border rounded mx-auto p-sm-4 text-bg-light">
        <h4 class="text-uppercase mb-4 mt-2">COORDONNÉES</h4>

        {{-- EMAIL USER --}}
        <div class="col-lg-6 d-flex">
            <div class="col-5">
                <p>Email</p>
            </div>
            <div class="col-7">
                <p class="fw-bold">{{ $user->email }}</p>
            </div>
        </div>
        {{-- TELEPHONE USER --}}
        <div class="col-lg-6 d-flex">
            <div class="col-5">
                <p>Téléphone</p>
            </div>
            <div class="col-7">
                <p class="fw-bold">{{ $user->tel }}</p>
            </div>
        </div>
        {{-- ADR 1 USER --}}
        <div class="col-lg-6 d-flex">
            <div class="col-5">
                <p>Adresse</p>
            </div>
            <div class="col-7">
                <p class="fw-bold">{{ $user->adresse_ligne_1 }}</p>
            </div>
        </div>
        {{-- ADR 2 USER --}}
        <div class="col-lg-6 d-flex">
            <div class="col-5">
                <p>Suite adr.</p>
            </div>
            <div class="col-7">
                <p class="fw-bold">{{ $user->adresse_ligne_2 ?? '-' }}</p>
            </div>
        </div>
        {{-- CODE POSTAL USER --}}
        <div class="col-lg-6 d-flex">
            <div class="col-5">
                <p>Code postal</p>
            </div>
            <div class="col-7">
                <p class="fw-bold">{{ $user->code_postal }}</p>
            </div>
        </div>
        {{-- COMMUNE USER --}}
        <div class="col-lg-6 d-flex">
            <div class="col-5">
                <p>Commune</p>
            </div>
            <div class="col-7">
                <p class="fw-bold">{{ $user->commune }}</p>
            </div>
        </div>
    </div>
</div>
