import React from 'react';

const SocialLinks = () => {
  return (
    <div className="d-none d-md-flex position-absolute end-0 flex-column align-items-center me-3">
      <a href="/contact" title="Nous écrire">
        <i className="fa-solid fa-envelope reseaux-header"></i>
      </a>
      <a href="https://www.facebook.com/Canibales79" target="_blank" rel="noopener noreferrer" title="Notre page Facebook">
        <i className="fa-brands fa-square-facebook reseaux-header"></i>
      </a>
      <a href="https://www.instagram.com/canibales_79/" target="_blank" rel="noopener noreferrer" title="Notre page Instagram">
        <i className="fa-brands fa-square-instagram reseaux-header"></i>
      </a>
    </div>
  );
};

export default SocialLinks;
