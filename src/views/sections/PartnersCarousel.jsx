import React, {useEffect} from "react";
import "./bootstrap";

const PartnersCarousel = () => {
  useEffect(() => {
    const imageWrapper = document.querySelector(".image-wrapper");
    const imageItems = document.querySelectorAll(".image-wrapper > *");
    const imageLength = imageItems.length;
    const perView = 3;
    let totalScroll = 0;
    const delay = 2000;

    imageWrapper.style.setProperty("--per-view", perView);
    for (let i = 0; i < perView; i++) {
      imageWrapper.insertAdjacentHTML("beforeend", imageItems[i].outerHTML);
    }

    let autoScroll = setInterval(scrolling, delay);

    function scrolling() {
      totalScroll++;
      if (totalScroll === imageLength + 1) {
        clearInterval(autoScroll);
        totalScroll = 1;
        imageWrapper.style.transition = "0s";
        imageWrapper.style.left = "0";
        autoScroll = setInterval(scrolling, delay);
      }
      const widthEl =
        document.querySelector(".image-wrapper > :first-child").offsetWidth +
        24;
      imageWrapper.style.left = `-${totalScroll * widthEl}px`;
      imageWrapper.style.transition = "0.2s";
    }
    return () => {
      clearInterval(autoScroll);
    };
  }, []);
  
  return (
    <div className="container-fluid bg-black py-3 text-center">
      <a
        href="/les-partenaires"
        className="text-decoration-none"
        title="Découvrez nos partenaires"
      >
        <div
          className="d-flex flex-wrap justify-content-center align-items-center max-vh-25"
          style={{ height: "fit-content" }}
        >
          <h5 className="m-0 p-0 text-uppercase text-white">
            Merci à nos partenaires pour leur soutien !
          </h5>

          <div
            id="partners-carousel"
            className="d-flex align-items-center justify-content-center m-0 p-0"
          >
            <div className="image-container">
              <div className="image-wrapper">
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "/logos/partenaires/logo_canisportshop.jpg"
                  }
                  className="d-block logo-part"
                  alt="logo Canisportshop"
                />
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "/logos/partenaires/logo_fenril.png"
                  }
                  className="d-block logo-part"
                  alt="logo Fenril"
                />
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "/logos/partenaires/logo_foulees.png"
                  }
                  className="d-block logo-part"
                  alt="logo Foulées"
                />
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "/logos/partenaires/logo_acticanishop.jpg"
                  }
                  className="d-block logo-part"
                  alt="logo Acticanishop"
                />
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "/logos/partenaires/logo_alltricks.jpg"
                  }
                  className="d-block logo-part"
                  alt="logo Alltricks"
                />
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "/logos/partenaires/logo_canigourmand.jpg"
                  }
                  className="d-block logo-part"
                  alt="logo Canigourmand"
                />
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "/logos/partenaires/logo_jmt.jpg"
                  }
                  className="d-block logo-part"
                  alt="logo JMT"
                />
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "/logos/partenaires/logo_miliemilie.jpg"
                  }
                  className="d-block logo-part"
                  alt="logo MiliEmilie"
                />
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "/logos/partenaires/logo_nonstopdogwear.png"
                  }
                  className="d-block logo-part"
                  alt="logo Non Stop Dogwear"
                />
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "/logos/partenaires/logo_nourrir_comme_la_nature.png"
                  }
                  className="d-block logo-part"
                  alt="logo Nourrir comme la Nature"
                />
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "/logos/partenaires/logo_poli.png"
                  }
                  className="d-block logo-part"
                  alt="logo Poli"
                />
                <img
                  src={
                    process.env.PUBLIC_URL +
                    "/logos/partenaires/logo_terranimo.png"
                  }
                  className="d-block logo-part"
                  alt="logo Terranimo"
                />
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  );
};

export default PartnersCarousel;
