<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

<style>
body{
    margin:0px;
    padding:0px;
}
#mapid { height: 100%; }
</style>

<div id="mapid"></div>


<script>

	var mymap = L.map('mapid').setView([16.742301, 100.192106], 13);

	// L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoibm9uZzA1MyIsImEiOiJja255YmswNWkwNmZoMnZwa2RraDExYm8yIn0.2N3JFxyyi5ZZrQ7T5CuB4A', {
	// 	maxZoom: 18,
	// 	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
	// 		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	// 	id: 'mapbox/streets-v11',
	// 	tileSize: 512,
	// 	zoomOffset: -1
	// }).addTo(mymap);




    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mymap);

    L.marker([51.5, -0.09]).addTo(mymap)
        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        .openPopup();

</script> 

