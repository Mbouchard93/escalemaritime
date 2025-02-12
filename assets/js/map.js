document.addEventListener("DOMContentLoaded", function () {
  var map = L.map("map", {
    center: [48.1239, -69.1766],
    zoom: 13,
    minZoom: 10, // Dézoom maximum autorisé
    maxBounds: [
      // Limites de déplacement
      [47.9, -69.6],
      [48.5, -68.8],
    ],
  });

  L.tileLayer("https://maps.wikimedia.org/osm-intl/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution:
      '&copy; <a href="https://wikimediafoundation.org/wiki/Maps_Terms_of_Use">Wikimedia</a>',
  }).addTo(map);

  // Utilise les données globales "locations"
  locations.forEach(function (location) {
    var marker = L.marker(location.coords).addTo(map);

    var popupContent = `
        <div class="map__modal">
          <h4>${location.name}</h4>
          <p>${location.description}</p>
          <a href="${location.link}" target="_blank">
          <img class="map__modal-img" src="${location.logo}" alt="${location.name}"></a>
        </div>
      `;
    marker.bindPopup(popupContent);
  });
});
