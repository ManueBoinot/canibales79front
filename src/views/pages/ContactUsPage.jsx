import React from 'react';

const ContactForm = () => {
  return (
    <div className="container py-5 px-lg-5 text-center" id="contact">
      <h1 className="mb-5 font-bold">FORMULAIRE DE CONTACT</h1>

      <h2 className="italic font-light text-danger">(Cette section du site est en construction)</h2>

      <p className="my-4 fs-5">En attendant, merci de nous contacter par email à <a className="text-decoration-none text-dark font-bold" href="mailto:canibales79@gmail.com">canibales79@gmail.com</a><i className="ms-2 fs-3 fa-regular fa-face-smile-beam"></i></p>

      {/* Lien vers la FAQ */}
      <div className="text-center">
        <p className="mb-5 text-danger">Vous avez une question ? Pensez à consulter notre <a href="/faq"><button type="button" className="btn red-button">FOIRE AUX QUESTIONS</button></a></p>
        {/* <p className="border-top pt-5">Vous n'avez pas trouvé votre réponse et/ou vous avez <strong>envie de nous rejoindre</strong> ?
        </p>
        <p className="pb-3">Alors remplissez le formulaire ci-dessous et nous vous répondrons dans les meilleurs délais <i
          className="fa-regular fa-face-smile-beam"></i></p>*/}
      </div>

      {/* FORMULAIRE DE CONTACT */}
      {/* <form method="post" action="mailto:canibales79@mail.com">
        @csrf
        <div className="row">
          <div className="form-floating mb-3 col-md-6">
            <input type="text" className="form-control" id="inputPrenom" name="inputPrenom" placeholder="Prénom" />
            <label htmlFor="inputPrenom" className="ps-4">Prénom</label>
          </div>
          <div className="form-floating mb-3 col-md-6">
            <input type="text" className="form-control" id="inputNom" name="inputNom" placeholder="Nom" />
            <label htmlFor="inputNom" className="ps-4">Nom</label>
          </div>
          <div className="form-floating mb-3">
            <input type="email" className="form-control" id="inputEmail" name="inputEmail" placeholder="Email" />
            <label htmlFor="inputEmail" className="ps-4">Email</label>
          </div>
          <div className="form-floating mb-3">
            <textarea className="form-control" id="inputMessage" name="inputMessage" style={{ minHeight: '200px' }} placeholder="Mon message"></textarea>
            <label htmlFor="inputMessage" className="ps-4">Mon message</label>
          </div>
          <div className="text-center">
            <button type="submit" className="btn btn-dark">Envoyer mon message</button>
          </div>
        </div>
      </form> */}
    </div>
  );
};

export default ContactForm;
