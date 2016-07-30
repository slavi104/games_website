var map;
var myCenter=new google.maps.LatLng(42.733883,25.485830);

function initialize()
{
	//map's properties
	var mapProp = {
		center:myCenter,
		zoom:7,
		minZoom: 7,
		maxZoom: 10,
		zoomControl : true,
		panControl : false,
		scaleControl: false,
		scrollwheel: true,
		disableDoubleClickZoom: true,
		streetViewControl: false,
		draggable: false
	};
	
	map = new google.maps.Map(document.getElementById("googleMap"),mapProp); //creates the map
	
	//remove some of the gmap's features
	var styleArray = [
		{
			featureType: "all",
			stylers: [
			  { visibility: "on" }
			]
		},
		{
			featureType: "road",
			stylers: [
			  { visibility: "off" }
			]
		},
		{
			featureType: "administrative.province",
			elementType: "labels",
			stylers: [
			  { visibility: "off" }
			]
		},
		{
			featureType: "administrative.locality",
			stylers: [
			  { visibility: "off" }
			]
		},
		{
			featureType: "administrative.country",
			elementType: "labels",
			stylers: [
			  { visibility: "off" }
			]
		}
	];
	map.setOptions({styles: styleArray}); //set the changed styles;
	
	//when is clicked on the map - place marker on that location;
	google.maps.event.addListener(map, 'click', function(event) {
		if(countLocations != 5) 
		{ 
			placeMarker(event.latLng);
			Next();
		}
	});
	google.maps.event.addListener(map, 'zoom_changed', function() {
		if(map.zoom == 7)
		{
			map.setCenter(myCenter);
		}
	});
}//initialize

function setAllMap(map) {
	for (var i = 0; i < markersByUser.length; i++) 
	{
		if(typeof markersByUser[i] === 'undefined')
		{}
		else
		{
			markersByUser[i].setMap(map);
		}
	}
}

function placeMarker(location) {
  
	setAllMap(null);
	markersByUser[countLocations] = new google.maps.Marker({
		position: location,
		map: map
	});

	markersByUser[countLocations].map = map;
	markersByUser[countLocations].visible = true;
	var infowindow = new google.maps.InfoWindow({
		content: 'Цел: ' + document.getElementById("location").innerHTML
	});
	infowindow.open(map,markersByUser[countLocations]);
}

google.maps.event.addDomListener(window, 'load', initialize);