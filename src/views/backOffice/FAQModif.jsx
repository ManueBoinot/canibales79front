import React from "react";
import FAQModalDelete from "./FAQModalDelete";

const FAQModif = () => {
  return (
    <div class="container py-5 px-md-5">
      <h1 class="text-center mb-5">MODIFICATION D'UNE QUESTION/RÉPONSE</h1>
      <div class="text-end">
        {/* Bouton modal SUPPRESSION QUESTION/REPONSE */}
        <FAQModalDelete />

        {/* début formulaire modif QUESTION/REPONSE */}
        <form
          method="post"
          action="{{ route('faq.update', $faq) }}"
          class="text-start"
        >
          {/* input QUESTION */}
          <div class="mb-3">
            <label
              for="question"
              class="form-label font-bold"
            >
              QUESTION À MODIFIER
            </label>
            {/* <textarea class="form-control @error('question') is-invalid @enderror" id="question" name="question" type="text"
                        placeholder="{{ $faq->question }}">{{ old('question') }}</textarea> */}
          </div>

          {/* input REPONSE */}
          <div class="mb-3">
            <label
              for="reponse"
              class="form-label font-bold"
            >
              RÉPONSE À MODIFIER
            </label>
            {/* <textarea class="form-control @error('reponse') is-invalid @enderror" id="reponse" name="reponse" type="text" 
                         // placeholder="{{ $faq->reponse }}">{{ old('reponse') }}</textarea> */}
          </div>

          {/* bouton SUBMIT */}
          <div class="text-center">
            <button
              type="submit"
              class="btn btn-success me-2 mt-2"
              title="Valider"
            >
              Valider les modifications
            </button>
            <a
              type="button"
              href="/admin"
              class="btn btn-secondary mt-2 mx-2"
              title="Annuler"
            >
              Annuler
            </a>
          </div>
        </form>
      </div>
    </div>
  );
};

export default FAQModif;
