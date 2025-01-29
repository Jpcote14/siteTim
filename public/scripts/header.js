// Sélectionner toutes les balises nav
const navs = document.querySelectorAll("nav");

// Écouter le scroll
window.addEventListener("scroll", () => {
  navs.forEach((nav) => {
    if (window.scrollY > 0) {
      nav.classList.add("scrolled");
    } else {
      nav.classList.remove("scrolled");
    }
  });
});
