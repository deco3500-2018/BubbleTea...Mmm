<?php
include "start.php";

?>
<!DOCTYPE html>
<html>

<head>
	<title>In the Moment</title>
	
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
	<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
	<script src="https://d3js.org/d3.v5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyB1U60JLm18jCDzO0lir9DUQozARJ4M14Q"></script>
</head>

<body>
	

	<ons-page id="bg">
		<div class="background"></div>

		<style type="text/css">

		#white{
			color: white;
		}

		#map {
			height: 100%;
		}

	</style>




	<!-- Navbar -->
	<ons-toolbar class="toolbar toolbar--transparent">
		<div class="toolbar__right">
			<span class="toolbar-button">
				<i class="ion-navicon" style="font-size:32px; vertical-align:-6px; margin-right: 10px; color: white;"></i>
			</span>
		</div>

		<div class="toolbar__center" id="textclr" style="text-transform: bold;">
			Recommended Activity
		</div>

		<div class="toolbar__left">
			<ons-toolbar-button icon="md-face" style="margin-left: 10px; color: white;"></ons-toolbar-button>
		</div>
	</ons-toolbar>

	<ons-card style="height: 90%;">
		<!-- showing the map --> 
		<article style="height: 40%;">
			<div style="width: 87%; height: 100%; position: absolute; margin-left: auto; margin-right: auto; display: block;">

			<div id="map" style="height: 40%;"></div>		

		</div>
		</article>

		<script>
			var customLabel = {
				restaurant: {
					label: 'R'
				},
				bar: {
					label: 'B'
				}
			};

			function initMap() {
				var map = new google.maps.Map(document.getElementById('map'), {
					center: new google.maps.LatLng(-27.499940, 153.015218),
					zoom: 12,
					disableDefaultUI: true
				});
				var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
          	var xml = data.responseXML;
          	var markers = xml.documentElement.getElementsByTagName('marker');
          	Array.prototype.forEach.call(markers, function(markerElem) {
          		var id = markerElem.getAttribute('id');
          		var name = markerElem.getAttribute('name');
          		var address = markerElem.getAttribute('address');
          		var type = markerElem.getAttribute('type');
          		var point = new google.maps.LatLng(
          			parseFloat(markerElem.getAttribute('lat')),
          			parseFloat(markerElem.getAttribute('lng')));

          		var infowincontent = document.createElement('div');
          		var strong = document.createElement('strong');
          		strong.textContent = name
          		infowincontent.appendChild(strong);
          		infowincontent.appendChild(document.createElement('br'));

          		var text = document.createElement('text');
          		text.textContent = address
          		infowincontent.appendChild(text);
          		var icon = customLabel[type] || {};
          		var marker = new google.maps.Marker({
          			map: map,
          			position: point,
          			label: icon.label
          		});
          		marker.addListener('click', function() {
          			infoWindow.setContent(infowincontent);
          			infoWindow.open(map, marker);
          		});
          	});
          });
      }



      function downloadUrl(url, callback) {
      	var request = window.ActiveXObject ?
      	new ActiveXObject('Microsoft.XMLHTTP') :
      	new XMLHttpRequest;

      	request.onreadystatechange = function() {
      		if (request.readyState == 4) {
      			request.onreadystatechange = doNothing;
      			callback(request, request.status);
      		}
      	};

      	request.open('GET', url, true);
      	request.send(null);
      }

      function doNothing() {}
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1U60JLm18jCDzO0lir9DUQozARJ4M14Q&callback=initMap"></script>

<br><br><br>

<div class="title" style="text-align: center; display: block;">
	INSERT ACTIVITY NAME
</div>

<br>

<div class="content">

	<ons-list>
		<ons-list-header>Information</ons-list-header>
		<div><b>Description  </b> some information about the place</div>
        <div><b>Opening Hours  </b> 
        	<ul>
        		<li>Mon  |  9am - 9pm</li>
        		<li>Mon  |  9am - 9pm</li>
        		<li>Mon  |  9am - 9pm</li>
        		<li>Mon  |  9am - 9pm</li>
        		<li>Mon  |  9am - 9pm</li>
        		<li>Mon  |  9am - 9pm</li>
        		<li>Mon  |  9am - 9pm</li>
        	</ul>
        </div>

		<!-- <ons-list-item>
			<div class="left">
				<img class="list-item__thumbnail" src="https://placekitten.com/g/40/40">
			</div>
			<div class="center">
				<span class="list-item__title">Youtube - Beginner's pilates</span><span class="list-item__subtitle">On the Internet</span>
			</div>
		</ons-list-item>

		<ons-list-item>
			<div class="left">
				<img class="list-item__thumbnail" src="https://placekitten.com/g/40/40">
			</div>
			<div class="center">
				<span class="list-item__title">Youtube - 15 minute workout</span><span class="list-item__subtitle">On the Internet</span>
			</div>
		</ons-list-item> -->

		  <ons-dialog id="my-dialog">
    <div style="text-align: center; padding: 10px;">
      <p>
        This is a simple dialog!
      </p>

      <p>
        <ons-button onclick="hideDialog('my-dialog')">Close</ons-button>
      </p>
    </div>
  </ons-dialog>
	</ons-list>

	<ons-button modifier="large--quiet" style="display: inline-block;" onclick="location.href='activityRec.php'">Maybe Later</ons-button>

</div>


</ons-card>

<?php include "footer.php";?>


</ons-page>

</body>

</html>
