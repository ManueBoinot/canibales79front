{{-- Message lorsqu'un chien a été ajouté au profil --}}
@if (session('status'))
    <div class="alert alert-success text-center">
        {{ session('status') }}
    </div>
@endif

{{-- INFORMATIONS PERSONNELLES DE L'USER --}}
<div class="row border py-3 px-xl-3 mx-auto align-items-center overflow-auto mb-5 rounded"
    style="background-color: white">

    <div class="col-12">
        <h2 class="text-center pb-4">Informations personnelles</h2>
    </div>

    {{-- NOM USER --}}
    <div class="col-lg-6 d-flex">
        <div class="col-5">
            <p>NOM</p>
        </div>
        <div class="col-7">
            <p class="fw-bold">{{ $user->nom }}</p>
        </div>
    </div>
    {{-- PRENOM USER --}}
    <div class="col-lg-6 d-flex">
        <div class="col-5">
            <p>PRÉNOM</p>
        </div>
        <div class="col-7">
            <p class="fw-bold">{{ $user->prenom }}</p>
        </div>
    </div>
    {{-- EMAIL USER --}}
    <div class="col-lg-6 d-flex">
        <div class="col-5">
            <p>EMAIL</p>
        </div>
        <div class="col-7">
            <p class="fw-bold">{{ $user->email }}</p>
        </div>
    </div>
    {{-- TELEPHONE USER --}}
    <div class="col-lg-6 d-flex">
        <div class="col-5">
            <p>TÉLÉPHONE</p>
        </div>
        <div class="col-7">
            <p class="fw-bold">{{ $user->tel }}</p>
        </div>
    </div>
    {{-- ADR 1 USER --}}
    <div class="col-lg-6 d-flex">
        <div class="col-5">
            <p>ADRESSE</p>
        </div>
        <div class="col-7">
            <p class="fw-bold">{{ $user->adr_ligne_1 }}</p>
        </div>
    </div>
    {{-- ADR 2 USER --}}
    <div class="col-lg-6 d-flex">
        <div class="col-5">
            <p>COMPL. ADR.</p>
        </div>
        <div class="col-7">
            <p class="fw-bold">{{ $user->adr_ligne_2 }}</p>
        </div>
    </div>
    {{-- CODE POSTAL USER --}}
    <div class="col-lg-6 d-flex">
        <div class="col-5">
            <p>CODE POSTAL</p>
        </div>
        <div class="col-7">
            <p class="fw-bold">{{ $user->code_postal }}</p>
        </div>
    </div>
    {{-- COMMUNE USER --}}
    <div class="col-lg-6 d-flex">
        <div class="col-5">
            <p>COMMUNE</p>
        </div>
        <div class="col-7">
            <p class="fw-bold">{{ $user->commune }}</p>
        </div>
    </div>

</div>
