<div class="my-5">
    <p>
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUser"
            aria-expanded="false" aria-controls="collapseUser">
            Liste des utilisateurs
        </button>
    </p>
    <div>
        <div class="collapse" id="collapseUser">
            <div class="card card-body bg-dark mx-auto p-0 p-md-3 border-0">

                {{-- USERS LOOP --}}
                @foreach ($users as $user)
                    <div class="card text-start text-bg-light my-3 mx-auto" style="width: 100%">

                        <div class="card-body p-1 p-md-3">
                            <div class="row rounded mx-auto text-bg-light">

                                <div class="card-title d-flex justify-content-between p-0">
                                    <button class="col-10 btn btn-lg fw-bold my-auto text-start p-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseUser{{ $loop->iteration }}"
                                        aria-expanded="false" aria-controls="collapseUser{{ $loop->iteration }}">
                                        {{ strtoupper($user->nom) }} {{ $user->prenom }}<i
                                            class="fa-solid fa-chevron-down ms-3"></i></button>

                                    {{-- Bouton modal SUPPRESSION USER --}}
                                    @include('Composants.Admin.UserModalDelete')
                                </div>

                                <div class="collapse p-1" id="collapseUser{{ $loop->iteration }}">
                                    <div class="card card-body border-0">
                                        <div class="row">
                                            {{-- N° LICENCE --}}
                                            <div class="col-lg-6 d-flex">
                                                <div class="col-5">
                                                    <p>N° licence
                                                    </p>
                                                </div>
                                                <div class="col-7">
                                                    <p class="fw-bold">{{ $user->licence->numero ?? 'Non renseigné' }}
                                                    </p>
                                                </div>
                                            </div>
                                            {{-- TYPE LICENCE --}}
                                            <div class="col-lg-6 d-flex">
                                                <div class="col-5">
                                                    <p>Type licence
                                                    </p>
                                                </div>
                                                <div class="col-7">
                                                    <p class="fw-bold">{{ $user->licence->type ?? 'Non renseigné' }}</p>
                                                </div>
                                            </div>
                                            {{-- DATE NAISSANCE --}}
                                            <div class="col-lg-6 d-flex">
                                                <div class="col-5">
                                                    <p>Date de naissance
                                                    </p>
                                                </div>
                                                <div class="col-7">
                                                    <p class="fw-bold">{{ date('d-m-Y', strtotime($user->date_naiss)) }}
                                                    </p>
                                                </div>
                                            </div>
                                            {{-- CATEGORIE --}}
                                            <div class="col-lg-6 d-flex">
                                                <div class="col-5">
                                                    <p>Catégorie
                                                    </p>
                                                </div>
                                                <div class="col-7">
                                                    <p class="fw-bold">{{ $user->categorie }}</p>
                                                </div>
                                            </div>

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
                                                    <p class="fw-bold">{{ $user->adr_ligne_1 }}</p>
                                                </div>
                                            </div>
                                            {{-- ADR 2 USER --}}
                                            <div class="col-lg-6 d-flex">
                                                <div class="col-5">
                                                    <p>Suite adr.</p>
                                                </div>
                                                <div class="col-7">
                                                    <p class="fw-bold">{{ $user->adr_ligne_2 ?? '-' }}</p>
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

                                    {{-- Chiens de l'utilisateur --}}
                                    @include('Composants.Admin.UserChiensList')

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
