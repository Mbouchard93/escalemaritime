document.addEventListener("DOMContentLoaded", function () {
  // Vérifie si une carte existe déjà et la supprime avant d'en créer une nouvelle
  if (window.myMap) {
    window.myMap.remove();
  }

  // Crée la carte et la stocke dans une variable globale
  window.myMap = L.map("map", {
    center: [48.1239, -69.1766],
    zoom: 13,
    minZoom: 10, // Dézoom maximum autorisé
    maxBounds: [
      [47.9, -69.6], // Limites de déplacement
      [48.5, -68.8],
    ],
  });

  // Ajout de la couche OpenStreetMap
  L.tileLayer(
    "https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png",
    {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
      subdomains: "abcd",
    }
  ).addTo(window.myMap);

  // Vérification si "locations" est bien défini
  if (
    typeof locations !== "undefined" &&
    Array.isArray(locations) &&
    locations.length > 0
  ) {
    locations.forEach(function (location) {
      // Vérifie si les coordonnées sont valides
      if (Array.isArray(location.coords) && location.coords.length === 2) {
        var marker = L.marker(location.coords).addTo(window.myMap);

        var popupContent = `
          <div class="map__modal">
            <h4>${location.name}</h4>
            <p>${location.description}</p>
            <a href="${location.link}" target="_blank">
              <img class="map__modal-img" src="${location.logo}" alt="${location.name}">
            </a>
          </div>
        `;
        marker.bindPopup(popupContent);
      } else {
        console.warn("Coordonnées invalides pour:", location);
      }
    });
  } else {
    console.warn("Aucune donnée de localisation disponible.");
  }
});
