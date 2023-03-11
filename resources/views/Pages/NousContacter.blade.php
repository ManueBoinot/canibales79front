@extends('layouts.app')

@section('content')
    <div class="container bg-white py-5 px-md-5" id="contact">
        <h1 class="text-center mb-5">FORMULAIRE DE CONTACT</h1>

        <div class="text-center">
            <h5 class="mb-5" style="color: red">Tu as une question ? Pense à consulter notre <a href="/faq"><button type="button" class="btn text-white faq" style="background-color: red">FOIRE
              AUX
              QUESTIONS</button></a></h5>
            <h5 class="border-top pt-5">Tu n'as pas trouvé ta réponse et/ou tu as <strong>envie de nous rejoindre</strong> ?</h5>
            <h5 class="pb-3">Alors remplis le formulaire ci-dessous et nous te répondrons dans les meilleurs délais <i class="fa-regular fa-face-smile-beam"></i></h5>
        </div>

        <form method="post" action="mailto:canibales79@mail.com">
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
        </form>
    </div>
@endsection
