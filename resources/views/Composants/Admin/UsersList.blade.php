<div class="my-5">
    <p>
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUser"
            aria-expanded="false" aria-controls="collapseUser">
            Liste des utilisateurs
        </button>
    </p>
    <div style="min-height: 120px;">
        <div class="collapse" id="collapseUser">
            <div class="card card-body bg-dark">

                {{-- USERS LOOP --}}
                @foreach ($users as $user)
                    <div class="card text-start text-bg-light my-3 mx-auto" style="max-width: 80vw">

                        <div class="card-body">
                            <div class="row rounded mx-auto text-bg-light">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <h4 class="card-title text-center fw-bold">{{ strtoupper($user->nom) }}
                                        {{ $user->prenom }}
                                    </h4>{{-- Bouton modal SUPPRESSION USER --}}
                                    @include('Composants.Admin.UserModalDelete')
                                </div>

                                {{-- N° LICENCE --}}
                                <div class="col-lg-6 d-flex">
                                    <div class="col-5">
                                        <p>N° licence
                                        </p>
                                    </div>
                                    <div class="col-7">
                                        <p class="fw-bold">{{ $user->licence->numero ?? 'Non renseigné' }}</p>
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
                                        <p class="fw-bold">{{ date('d-m-Y', strtotime($user->date_naiss)) }}</p>
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

                                {{-- Infos chiens --}}
                                <div class="row border-top pt-3">
                                    <h5 class="text-center">CHIEN(S) DE {{ mb_strtoupper($user->prenom) }}</h5>
                                    @foreach ($user->chiens as $chien)
                                        <div class="card col-12 col-md-5 mx-auto text-bg-warning">
                                            <div class="card-body">
                                                {{-- Infos du chien --}}
                                                <h5 class="card-title fw-bold">{{ $chien->nom }}</h5>
                                                <h6 class="card-subtitle mb-2">{{ $chien->race }}</h6>
                                                <p class="card-text">Né(e) le
                                                    {{ date('d-m-Y', strtotime($chien->date_naiss)) }}
                                                    <span class="fst-italic"> ({{ $chien->age($chien) }}) </span>
                                                </p>

                                                    <p>
                                                        Justif vaccins : <img src="{{ public_path('uploads/vaccinsChiens/') . $chien->vaccins }}" alt="">

                                                    </p>



                                                {{-- Si chien catégorie 2 --}}
                                                @if ($chien->categorie_2 == true)
                                                    <div class="col-11">
                                                        <p class="text-danger">Chien de CATÉGORIE 2</p>
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
