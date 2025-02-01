const radios = document.querySelectorAll('input[name="responsable_id"]');

const h2 = document.getElementById("choixResponsable");

const ctnBenoit = document.getElementById("ctnBenoit");
const refTelephone = document.getElementById("telephone");
const refConsentement = document.getElementById("consentement");

radios.forEach((radio) => {
  radio.addEventListener("change", () => {
    if (radio.checked) {
      const label = radio.closest("label");

      const nom = label.querySelector(".h3").textContent;

      h2.textContent = `Contactez ${nom}`;

      if (nom == "Benoît Frigon") {
        ctnBenoit.classList.remove("hidden");
      } else {
        ctnBenoit.classList.add("hidden");
        refTelephone.value = "";
        refConsentement.checked = false;
      }
    }
  });
});

// Si un radio est déjà sélectionné au chargement de la page, met à jour le h2 en conséquence
document.querySelector('input[name="responsable_id"]:checked')?.dispatchEvent(new Event("change"));
