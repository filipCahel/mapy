<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
    <link rel="stylesheet" href="node_modules/leaflet/dist/leaflet.css">
    <script src="node_modules/leaflet/dist/leaflet.js"></script>
</head>
<style>#map {height: 500px;px;}</style>
<body>
    <div id="map"></div>
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

        var marker = L.marker([51.5, -0.09]).addTo(map);
        marker.bindPopup("<b>Hjaajajajajajajaj</b><br>dkgodhgiuddfodoegogoogrgrjgjorfjgéfjédj").openPopup();
        var circle = L.circle([51.508, -0.11], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
}).addTo(map);
    </script>
</body>
</html>