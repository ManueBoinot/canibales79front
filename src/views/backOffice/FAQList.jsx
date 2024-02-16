import React from "react";
import FAQModalCrea from "./FAQModalCrea";

const FAQList = () => {
    return (
        <div class="my-5">
            <p>
                <button
                    class="btn btn-dark btn-lg"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseWidthExample"
                    aria-expanded="false"
                    aria-controls="collapseWidthExample">
                    Gestion de la FAQ
                </button>
            </p>
            <div class="collapse" id="collapseWidthExample">
                <div class="card card-body text-bg-dark">
                    {/* {{-- Bouton de création de questions/réponses --}} */}
                    <FAQModalCrea/>
                    <h2 class="mt-2 pt-4 border-top fs-3">
                        Liste des questions/réponses de la FAQ
                    </h2>
                    {/* {{-- FAQ LOOP --}} */}
                    {/* @foreach ($faqs as $faq) */}
                    <div class="card my-3 mx-auto w-100 text-bg-light">
                        <div class="card-body">
                            {/* <p class="card-title fs-5">Question n°{{ $loop->iteration }} : {{ $faq->question }}</p>
                            <p class="card-text fs-6 italic">Réponse : {{ substr($faq->reponse, 0, 80) . ' ... ' }}</p> */}
                            <div class="d-flex justify-content-around">
                                <form method="post" action="{{ route('faq.edit', $faq) }}">
                                    <button class="btn btn-outline-success">
                                        <i class="fa-solid fa-pen"></i>
                                        Modifier / supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {/* @endforeach */}
                </div>
            </div>
        </div>
    );
};
export default FAQList;