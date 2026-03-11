import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';


import "bootstrap/dist/css/bootstrap.min.css";

import "../css/navbar.css";
import "../css/homePg.css";
import "../css/footer.css";
import "../css/servicesPg.css";
import "../css/aboutUsPg.css";
import "../css/contactUsPg.css";
import "../css/requestQoutePg.css";
import "../css/packagesPg.css";
import "../css/album1.css";
import "../css/album2.css";
import "../css/album3.css";
import "../css/album4.css";
import "../css/album5.css";
import "../css/album6.css";

  const elements = document.querySelectorAll('.animate');

  function handleScroll() {
    const triggerPoint = window.innerHeight * 0.9; // trigger when 90% of viewport

    elements.forEach(el => {
      const top = el.getBoundingClientRect().top;

      if (top < triggerPoint) {
        el.classList.add('visible'); // add class when visible
      }
    });
  }

  window.addEventListener('scroll', handleScroll);
  window.addEventListener('load', handleScroll); // in case section is visible on page load




//nav bar colsing method

