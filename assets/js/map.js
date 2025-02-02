document.addEventListener("DOMContentLoaded", function () {
  // Initialise la carte centrée sur Trois-Pistoles
  var map = L.map("map", {
    center: [48.1239, -69.1766], // Centre initial
    zoom: 13, // Niveau de zoom initial
    minZoom: 11, // Dézoom maximum
    maxBounds: [
      // Limites de déplacement
      [47.9, -69.6], // Coin sud-ouest
      [48.5, -68.8], // Coin nord-est
    ],
  });

  // Ajoute les tuiles OpenStreetMap
  L.tileLayer("https://maps.wikimedia.org/osm-intl/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution:
      '&copy; <a href="https://wikimediafoundation.org/wiki/Maps_Terms_of_Use">Wikimedia</a>',
  }).addTo(map);

  // Données des emplacements
  var locations = [
    {
      name: "Société Provancher",
      coords: [48.1408057, -69.2517169],
      url: "https://www.provancher.org/",
    },
    {
      name: "Coop de Kayaks des Îles",
      coords: [48.1290079, -69.185052],
      url: "https://kayaksdesiles.com/",
    },
    {
      name: "Compagnie de Navigation des Basques / Traverse Trois-Pistoles",
      coords: [48.1312233, -69.1847779],
      url: "https://traversiercnb.ca/",
    },
    {
      name: "Marina de Trois-Pistoles",
      coords: [48.1287325, -69.184844],
      url: "https://www.marinatroispistoles.com/",
    },
    {
      name: "Club de Pelote Basque de Trois-Pistoles",
      coords: [48.1271, -69.1837],
      url: "https://www.facebook.com/pelote3p/",
    },
    {
      name: "Ville de Trois-Pistoles",
      coords: [48.119285583496094, -69.1654052734375],
      url: "http://www.ville-trois-pistoles.ca/",
    },
  ];

  // Ajoute les marqueurs à la carte
  locations.forEach(function (location) {
    var marker = L.marker(location.coords).addTo(map);
    marker.bindPopup(
      '<b><a href="' +
        location.url +
        '" target="_blank">' +
        location.name +
        "</a></b>"
    );
  });
});

/* document.addEventListener("DOMContentLoaded", function () {
    var map = L.map("map", {
      center: [48.1239, -69.1766],
      zoom: 13,
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
        <b>${location.name}</b><br>
        <p>${location.description}</p>
        <a href="${location.link}" target="_blank">Voir le site web</a><br>
        <img src="${location.logo}" alt="${location.name}" style="width: 100px; height: auto;">
      `;
      marker.bindPopup(popupContent);
    });
  }); */
