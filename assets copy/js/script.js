'use strict';



const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const navbarToggler = document.querySelector("[data-nav-toggler]");

navbarToggler.addEventListener("click", function () {
  navbar.classList.toggle("active");
  this.classList.toggle("active");
});

for (let i = 0; i < navbarLinks.length; i++) {
  navbarLinks[i].addEventListener("click", function () {
    navbar.classList.remove("active");
    navbarToggler.classList.remove("active");
  });
}



/**
 * search toggle
 */

const searchTogglers = document.querySelectorAll("[data-search-toggler]");
const searchBox = document.querySelector("[data-search-box]");

for (let i = 0; i < searchTogglers.length; i++) {
  searchTogglers[i].addEventListener("click", function () {
    searchBox.classList.toggle("active");
  });
}



/**
 * header
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 200) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});

window.onload = function() {
	let recomendaciones = JSON.parse(localStorage.getItem('recomendaciones'));

	let idImagen1 = idsImagenes[recomendaciones[0]];
	let idImagen2 = idsImagenes[recomendaciones[1]];

	let imagen1 = document.getElementById(idImagen1);
	let imagen2 = document.getElementById(idImagen2);
	if (imagen1) {
		imagen1.style.display = "block";
	} else {
		console.log("No se encontró el elemento con el ID " + idImagen1);
	}
	if (imagen2) {
		imagen2.style.display = "block";
	} else {
		console.log("No se encontró el elemento con el ID " + idImagen2);
	}
}
