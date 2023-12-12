    function success(pos) {
    const lat = pos.coords.latitude;
    const lng = pos.coords.longitude;

    const map = L.map('map').setView([lat, lng], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
})  .addTo(map);

    const marker = L.marker([lat, lng]).addTo(map);

    marker.bindPopup("<b>Type problem</b><br>beschrijving").openPopup();
}

    function error(err) {
    console.warn(`ERROR(${err.code}): ${err.message}`);
}

    const options = {
    enableHighAccuracy: true,
    timeout: 7000,
    maximumAge: 0,
};
    fetch('get_marker.php')
        .then(response => response.text())
        .then(data => console.log(data));

    navigator.geolocation.getCurrentPosition(success, error, options);