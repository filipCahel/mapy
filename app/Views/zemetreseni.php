<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="map"></div>
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

        const quake = <?= $zemetreseni ?>;
        const obj= JSON.parse(quake);
        const event = obj.eventParameters.event;
        event.forEach(function(item){
            let desription = item.desription.text;
            let lat = item.origin.latitude.value;
            let long = item.origin.longitude.value;
            let mag = item.magnitude.mag.value;
            let marker= L.marker([lat, long]).bindPopup(
                '<h4>' + description + '</h4>/\n<p>Magnitude: '+ mag + '</p>'
            ).addTo(map);
        });
    </script>
</body>
</html>