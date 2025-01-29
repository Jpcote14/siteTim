const radios = document.querySelectorAll('input[name="responsableSelectionne"]');

const h2 = document.getElementById("choixResponsable");

radios.forEach((radio) => {
  radio.addEventListener("change", () => {
    if (radio.checked) {
      const label = radio.closest("label");

      const name = label.querySelector(".h3").textContent;

      h2.textContent = `Contactez ${name}`;
    }
  });
});

// Si un radio est déjà sélectionné au chargement de la page, met à jour le h2 en conséquence
document.querySelector('input[name="responsableSelectionne"]:checked')?.dispatchEvent(new Event("change"));
