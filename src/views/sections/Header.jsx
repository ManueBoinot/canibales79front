import React from "react";
import SocialLinks from "./SocialLinks";

const Header = () => {
  return (
    <header className="sticky-md-top">
      {/* NAVBAR */}
      <nav
        id="header-nav"
        className="navbar navbar-dark navbar-expand-lg bg-black"
      >
        <div className="container-fluid">
          {/* LOGO CANIBALES */}
          <a
            className="nav-link"
            href="/"
            title="Retour à l'accueil"
          >
            <img
              src="../.././assets/logos/logo-canibales-contour.png"
              className="py-1"
              style={{ width: "200px" }}
              alt="logo Canibales"
            />
          </a>

          {/* TOGGLER NAVBAR */}
          <button
            className="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar"
            title="Menu"
          >
            <span className="navbar-toggler-icon"></span>
          </button>

          {/* CONTENU NAVBAR */}
          <div
            className="offcanvas offcanvas-end bg-black text-bg-dark"
            tabIndex="-1"
            id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel"
            data-bs-scroll="true"
          >
            <div className="offcanvas-header">
              {/* Logo du menu */}
              <a
                className="nav-link"
                href="/"
              >
                <img
                  src="../.././assets/logos/logo-canibales-contour.png"
                  style={{ width: "100px" }}
                  alt="logo Canibales"
                />
              </a>
              <button
                type="button"
                className="btn-close btn-close-white"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>

            <div className="offcanvas-body">
              {/* Add your dynamic content for user authentication here */}

              {/* Example for Admin link */}
              {/* @if (Auth::user()) */}
              {/* <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-danger border border-danger rounded" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-lock mx-2"></i>ADMIN
                </a>
                <ul class="dropdown-menu dropdown-menu-dark bg-black">
                  <li>
                    <a class="dropdown-item" href="/admin">INTERFACE ADMIN</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('DÉCONNEXION') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </li>
                </ul>
              </li> */}
              {/* @endif */}

              {/* Example for user not authenticated */}
              {/* @else */}
              {/* Your code for unauthenticated users goes here */}
              {/* @endif */}
              {/* Your other menu items go here */}
            </div>
          </div>
        </div>
      </nav>

      {/* BANDEAU SOUS NAVBAR RESEAUX SOCIAUX */}
      <SocialLinks />
    </header>
  );
};

export default Header;
