let map;

function success(pos) {
    const Lat = pos.coords.latitude;
    const Lng = pos.coords.longitude;

    map = L.map('map').setView([Lat, Lng], 19);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // locatie van de gebruiker
    const userMarker = L.marker([Lat, Lng], { icon: L.divIcon({ className: 'user-marker' }) }).addTo(map);
    userMarker.bindPopup("<b>Your Location</b><br>Latitude: " + Lat + "<br>Longitude: " + Lng).openPopup();

    // fetch alle markers
    fetchDatabaseMarkers();
}

function error(err) {
    console.warn(`ERROR(${err.code}): ${err.message}`);
}

const options = {
    enableHighAccuracy: true,
    timeout: 7000,
    maximumAge: 0,
};

navigator.geolocation.getCurrentPosition(success, error, options);
//haalt al het informatie op vanuit get_marker.php
function fetchDatabaseMarkers() {
    fetch("get_marker.php")
        .then(response => response.json())
        .then(locations => {
            // gaat door alle locaties en plaats ze op de map
            locations.forEach(location => {
                var marker = new L.marker([location[1], location[2]])
                    .bindPopup(location[0])
                    .addTo(map);
            });
        })
        .catch(error => console.error('Error fetching locations:', error));
}
