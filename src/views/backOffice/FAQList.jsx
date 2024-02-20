import React from "react";
import FAQModalCrea from "./FAQModalCrea";

const FAQList = () => {
    return (
        <div className="my-5">
            <p>
                <button
                    className="btn btn-dark btn-lg"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseWidthExample"
                    aria-expanded="false"
                    aria-controls="collapseWidthExample">
                    Gestion de la FAQ
                </button>
            </p>
            <div className="collapse" id="collapseWidthExample">
                <div className="card card-body text-bg-dark">
                    {/* {{-- Bouton de création de questions/réponses --}} */}
                    <FAQModalCrea/>
                    <h2 className="mt-2 pt-4 border-top fs-3">
                        Liste des questions/réponses de la FAQ
                    </h2>
                    {/* {{-- FAQ LOOP --}} */}
                    {/* @foreach ($faqs as $faq) */}
                    <div className="card my-3 mx-auto w-100 text-bg-light">
                        <div className="card-body">
                            {/* <p className="card-title fs-5">Question n°{{ $loop->iteration }} : {{ $faq->question }}</p>
                            <p className="card-text fs-6 italic">Réponse : {{ substr($faq->reponse, 0, 80) . ' ... ' }}</p> */}
                            <div className="d-flex justify-content-around">
                                <form method="post" action="{{ route('faq.edit', $faq) }}">
                                    <button className="btn btn-outline-success">
                                        <i className="fa-solid fa-pen"></i>
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