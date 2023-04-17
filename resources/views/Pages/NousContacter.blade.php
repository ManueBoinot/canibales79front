@extends('layouts.app')

@section('content')
    <div class="container py-5 px-lg-5" id="contact">
        <h1 class="mb-5 text-center fw-bold">FORMULAIRE DE CONTACT</h1>

            <h2 class="fst-italic fw-light text-danger">(Cette section du site est en construction)</h2>

            <p class="my-4 fs-5">En attendant, merci de nous contacter par email à <a class="text-decoration-none text-dark fw-bold" href="mailto:canibales79@gmail.com">canibales79@gmail.com</a><i class="ms-2 fs-3 fa-regular fa-face-smile-beam"></i></p>

        {{-- Lien vers la FAQ --}}
        {{-- <div class="text-center">
            <p class="mb-5 text-danger">Tu as une question ? Pense à consulter notre <a href="/faq"><button
                        type="button" class="btn red-button">FOIRE
                        AUX
                        QUESTIONS</button></a></p>
            <p class="border-top pt-5">Tu n'as pas trouvé ta réponse et/ou tu as <strong>envie de nous rejoindre</strong> ?
            </p>
            <p class="pb-3">Alors remplis le formulaire ci-dessous et nous te répondrons dans les meilleurs délais <i
                    class="fa-regular fa-face-smile-beam"></i></p>
        </div> --}}

        {{-- FORMULAIRE DE CONTACT --}}
        {{-- <form method="post" action="mailto:canibales79@mail.com">
            @csrf
            <div class="row">
                <div class="form-floating mb-3 col-md-6">
                    <input type="text" class="form-control" id="inputPrenom" name="inputPrenom" placeholder="Prénom">
                    <label for="inputPrenom" class="ps-4">Prénom</label>

                </div>
                <div class="form-floating mb-3 col-md-6">
                    <input type="text" class="form-control" id="inputNom" name="inputNom" placeholder="Nom">
                    <label for="inputNom" class="ps-4">Nom</label>

                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
                    <label for="inputEmail" class="ps-4">Email</label>

                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="inputMessage" name="inputMessage" style="min-height: 200px"
                        placeholder="Mon message"></textarea>
                    <label for="inputMessage" class="ps-4">Mon message</label>

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Envoyer mon message</button>
                </div>
            </div>
        </form> --}}
    </div>
@endsection
