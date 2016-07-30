var i=0;
var counter;
var rad = function(x) {
	return x * Math.PI / 180;
};

//returns the distance between two locations (in meters)
var getDistance = function(p1, p2) {
	var R = 6378137; // Earth’s mean radius in meter
	var dLat = rad(p2.lat() - p1.lat());
	var dLong = rad(p2.lng() - p1.lng());
	var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.cos(rad(p1.lat())) * Math.cos(rad(p2.lat())) *
    Math.sin(dLong / 2) * Math.sin(dLong / 2);
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
	var d = R * c;
	return d; // returns the distance in meter
};

function getSearchParameters() {
    var prmstr = window.location.search.substr(1);
    return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
}

function transformToAssocArray( prmstr ) {
    var params = {};
    var prmarr = prmstr.split("&");
    for ( var i = 0; i < prmarr.length; i++) {
        var tmparr = prmarr[i].split("=");
        params[tmparr[0]] = tmparr[1];
    }
    return params;
}

var params = getSearchParameters();

//timer count down
function CountDown(count)
{
	//locations[countLocations] = " ";
	ChangeDestination();
	
	counter=setInterval(timer, 1000);
	function timer()
	{
		count=count-1;
		if (count < 0) //if time is over
		{
			document.getElementById("timer").className = "timer"; //makes the timer's color back to normal (not red)
			clearInterval(counter); //clears setInterval;
			 if(countLocations<4) //if there are more towns to ask for
			 {
				setAllMap(null); //clears the map
				countLocations++; //increase the number of shown towns
				CountDown(10); //timer on
			 }
			 else //if the fifth towns are already shown
			 {
				countLocations++; //increase the number of shown towns
				ShowResults(); //shows all the markers and the score
			}
			return;
		}
		else //if time is not over (>0)
		{
			if(count === 3) // if there are only 3 sec left
			{
				
				document.getElementById("timer").className = "timersUp"; //Changes timer color to red;
			}
		}
	  document.getElementById("timer").innerHTML=count; //show timer;
	}
}
//Ajax - passes the chosen level to ChangeDest.php and ChangeDest.php returns 5 locations taken from the DB
function TakeTowns()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	 {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	 }
	else
	 {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	 }
	xmlhttp.onreadystatechange=function()
	{
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var count = 0;
			document.getElementById("location").innerHTML = xmlhttp.responseText.trim().split("<br>")[0];
			for(var j=0; j<15; j+=3)
			{
				document.getElementsByTagName("span")[count].innerHTML = xmlhttp.responseText.trim().split("<br>")[j];
				locations[count] = xmlhttp.responseText.trim().split("<br>")[j];
				var lats = xmlhttp.responseText.trim().split("<br>")[j+1];
				var lngs = xmlhttp.responseText.trim().split("<br>")[j+2];
				markersRightLocations[count] = new google.maps.Marker({
					position: new google.maps.LatLng(lats,lngs),
				});
				count++;
			}
		}
	}
	xmlhttp.open("GET","ChangeDest.php?level=" + params.level,true);
	xmlhttp.send();
}
//changes the town
function ChangeDestination()
{
	if(locations[0] == " ")
	{
		TakeTowns();
	}
	document.getElementById("location").innerHTML = locations[countLocations];
	document.getElementsByTagName("span")[countLocations].style.display = "inline";
}

//Stops timer and gives new location
function Next() 
{
	if(countLocations<4)
	{
		clearInterval(counter);
		ChangeDestination();
		countLocations++;
		setAllMap(null);
		CountDown(10);
	}
	else
	{
		countLocations++;
		clearInterval(counter);
		ShowResults();
	}
}

//shows markers on the map - the right locations are shown with labels and they are connected to users locations by line
//the distance between the right locations and the chosen ones (by the user) is shown in kilometers
function ShowResults()
{
	setAllMap(null); //clears the map
	for(i=0;i<=4;i++)
	{
		//if there is no given answer (no chosen location on the map)
		if(typeof markersByUser[i] === 'undefined')
		{
			markersByUser[i] = new google.maps.Marker({
			position: new google.maps.LatLng(0,0), // the new marker is set by default to (0,0)
			map: map
			});
		}
	}
	
	for(var j=0;j<=4;j++)
	{
		markersByUser[j] = new google.maps.Marker({
			position: markersByUser[j].position,
			map: map
		});
		markersRightLocations[j] = new google.maps.Marker({
			position: markersRightLocations[j].position,
			map: map,
			icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
		});
		var infowindow = new google.maps.InfoWindow({
			content: locations[j]
		});
		infowindow.open(map,markersRightLocations[j]);
	}
	
	var sum = 0; //sums the distances between the right locations and the ones, chosen by the user 
	
	//draws the lines between the right locations and the ones, chosen by the user
	for(i=0;i<=4;i++)
	{
		var defaultMarker = new google.maps.LatLng(0,0);
		if(markersByUser[i].position != defaultMarker)
		{
			path = [markersRightLocations[i].position,markersByUser[i].position];
			lines[i] = new google.maps.Polyline({
			path: path,
			map: map,
			visible: true,
			strokeColor: "#CC33FF",
			strokeWeight: 3
			});
			lines[i].setMap(map);
		}
		var ans = markersRightLocations[i].position;
		document.getElementById("distance").innerHTML += "<tr><td>" + locations[i] + "</td><td>" + getDistance(markersByUser[i].position, ans)/1000 + "</td></tr>";
		sum+=getDistance(markersByUser[i].position, ans)/1000;
	}
	
	document.getElementsByTagName("tfoot")[0].innerHTML = "<tr><td>Общо километри разлика:</td><td>" + sum + "</td></tr>";
	if(sum<500)
	{	
		var points = Math.round(500-sum);
		AddPoints("/GitHub/GamesWebSite/AddPoints.php", points);
		document.getElementById("score").innerHTML = "Точки: " + Math.round(500-sum);
	}
	else
	{
		alert("За съжаление, вие не добавихте нови точки, към общия си брой точки :(");
		document.getElementById("score").innerHTML = "Точки: " +(0);
	}
}
