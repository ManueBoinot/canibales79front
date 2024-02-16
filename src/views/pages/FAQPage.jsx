import React from 'react';

const FAQ = ({ faqs }) => {
  return (
    <div className="container py-5 px-md-5">
      <div className="text-center mb-5">
        <h1>FOIRE AUX QUESTIONS</h1>
        <h2 className="my-3 font-medium">Réponses aux questions les plus fréquemment posées</h2>
      </div>

      <div className="text-center">
        <p className="my-4">Et si vous n'y trouvez pas votre réponse, alors <a href="/contact" type="button" className="btn red-button">CONTACTEZ-NOUS !</a></p>
      </div>

      {/* FAQ LOOP */}
      {faqs.map((faq, index) => (
        <div key={index} className="accordion" id="accordionExample">
          <div className="accordion-item">

            {/* QUESTION */}
            <h2 className="accordion-header" id={`faq-${index}`}>
              <button className="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target={`#collapse${index}`} aria-expanded="true" aria-controls={`collapse${index}`}>
                <h4>{faq.question}</h4>
              </button>
            </h2>

            {/* REPONSE */}
            <div id={`collapse${index}`} className="accordion-collapse collapse" aria-labelledby={`faq-${index}`} data-bs-parent="#accordionExample">
              <div className="accordion-body">
                {faq.reponse}
              </div>
            </div>
          </div>
        </div>
      ))}
    </div>
  );
};

export default FAQ;
