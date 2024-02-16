import React from "react";
import Welcome from "./sections/Welcome";
import MenuCards from "./sections/MenuCards";
import News from "./sections/News";

const Home = () => {
  return (
    <div>

      <Welcome />

      <MenuCards />

      <News />
      
    </div>
  );
};

export default Home;
