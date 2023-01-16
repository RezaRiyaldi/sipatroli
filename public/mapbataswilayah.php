<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Demo Leaflet GIS</title>
	<style>
		#mapid{
			width: 800px;
			height: 600px;
		}
	</style>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	<script src="leaflet.ajax.min.js"></script>
</head>
<body>
	<div id="mapid"></div>
	<script>
		var map = L.map('mapid').setView([1.084149, 104.027813], 10);
		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
			maxZoom: 18,
			id: 'mapbox.streets',
			accessToken: 'pk.eyJ1IjoiYXJ5YW5qaTAyNSIsImEiOiJja25wZnJ5eWMwNGV4Mm9wZnJmZWNmM3htIn0.n77mRbTKvMJ4iOWSg6Vppw'
		}).addTo(map);
		var geojsonLayer = new L.GeoJSON.AJAX("geojson.json");       
		geojsonLayer.addTo(map);
	</script>
</body>
</html>