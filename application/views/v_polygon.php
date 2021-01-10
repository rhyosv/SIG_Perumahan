<div id="map" style="height: 500px;"></div>


<script>
var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/satellite-v9'
	});


var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'
	});

    var map = L.map('map', {
    center: [-7.309672695034329, 112.72908789673706],
    zoom: 14,
    layers: [peta1]
    });

    var baseMaps = {
    "Light": peta1,
    "Satelite": peta2,
    "Streets": peta3,
    "Dark": peta4,
    };

    L.control.layers(baseMaps).addTo(map);

var polygon = L.polygon([
[-7.303608929386088, 112.80977165618984],
[-7.304214220361652, 112.80804626768607],
[-7.303529665030983, 112.80786101544673],
[-7.302733417774785, 112.80793003098688],
[-7.302383933237247, 112.80934666575837]

],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Grand Semanggi</b></h5>").addTo(map);

var polygon = L.polygon([
[-7.261502607458354, 112.63636798342063],
[-7.257903497389679, 112.62027368019656],
[-7.249936134089204, 112.62377783501087],
[-7.245690917780147, 112.63565474856546]

],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Citraland Utara</b></h5>").addTo(map);

var polygon = L.polygon([
[-7.252503513654816, 112.79243606512061],
[-7.258885592141179, 112.79002879222062],
[-7.257258382051286, 112.78785585562063],
[-7.251615932623483, 112.79022052190517]

],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>The Grand Kenjeran</b></h5>").addTo(map);

var polygon = L.polygon([
[-7.3326919448468, 112.68191783635059],
[-7.33236843410293, 112.6815406927994],
[-7.3316647974234455, 112.68198511060567],
[-7.332350236616609, 112.68252942048765],

],{
    color: 'blue',
    fillColor: '#0000FF',
    fillOpacity: 0.8,
}).bindPopup("<h5><b>Da Alamuda Residence</b></h5>").addTo(map);

</script>