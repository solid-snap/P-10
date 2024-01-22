let map;

function success(pos) {
    const Lat = pos.coords.latitude;
    const Lng = pos.coords.longitude;

    map = L.map('map').setView([Lat, Lng], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Marker for the user's location
    const userMarker = L.marker([Lat, Lng], { icon: L.divIcon({ className: 'user-marker' }) }).addTo(map);
    userMarker.bindPopup("<b>Your Location</b><br>Latitude: " + Lat + "<br>Longitude: " + Lng).openPopup();

    // Fetch and add markers from the database
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

function fetchDatabaseMarkers() {
    fetch("get_marker.php")
        .then(response => response.json())
        .then(locations => {
            // Iterate through locations and add markers to the map
            locations.forEach(location => {
                var marker = new L.marker([location[1], location[2]])
                    .bindPopup(location[0])
                    .addTo(map);
            });
        })
        .catch(error => console.error('Error fetching locations:', error));
}
