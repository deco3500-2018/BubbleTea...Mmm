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


<!-- <div>
<div id="map" style="max-height: 40%; margin: 10%;"></div>
	<script>
		function initMap() {
			var uq = {lat: -27.495421, lng: 153.011837};

			var map = new google.maps.Map(document.getElementById('map'), {
				center: uq,
				zoom: 14
			});

			var marker = new google.maps.Marker({
				map: map,
				position: uq,
				title: 'Hello World!'
			});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1U60JLm18jCDzO0lir9DUQozARJ4M14Q&callback=initMap" async defer></script>
</div> -->

<div id="map" style="max-height: 40%;"></div>

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
			center: new google.maps.LatLng(-33.863276, 151.207977),
			zoom: 12
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
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1U60JLm18jCDzO0lir9DUQozARJ4M14Q&callback=initMap">
</script>



<!-- <ons-segment style="margin-top: 100%;">
	<div style="height: 200px; padding: 1px 0 0 0;">
  <div class="card">
    <h2 class="card__title">Card Title</h2>
    <div class="card__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
  </div>
</div>

	<div class="dialog">
		<div class="dialog-container">
			<p style="text-align:center;margin-top:40px;opacity:0.4;">Content</p>
		</div>
	</div>
</ons-segment> -->

<!-- <ons-card>
	<div class="title" style="text-align: center;">

		Make a dessert in under 20 minutes!
	</div>
	<br>
	<div class="content">

		<ons-row style="margin-bottom: 15px;">
			<ons-col width="40px" style="text-align: center; line-height: 31px;">
				<ons-icon icon="md-thumb-down"></ons-icon>
			</ons-col>
			<ons-col>
				<ons-range style="width: 100%;" value="75"></ons-range>
			</ons-col>
			<ons-col width="40px" style="text-align: center; line-height: 31px;">
				<ons-icon icon="md-thumb-up"></ons-icon>
			</ons-col>
		</ons-row>


			<ons-list>
				<ons-list-header>Select option to start</ons-list-header>
				<ons-list-item>
					<div class="left">
						<img class="list-item__thumbnail" src="https://placekitten.com/g/40/40">
					</div>
					<div class="center">
						<span class="list-item__title">Youtube - Custard tart</span><span class="list-item__subtitle">On the Internet</span>
					</div>
				</ons-list-item>

				<ons-list-item>
					<div class="left">
						<img class="list-item__thumbnail" src="https://placekitten.com/g/40/40">
					</div>
					<div class="center">
						<span class="list-item__title">Blog - Matcha Pudding</span><span class="list-item__subtitle">On the Internet</span>
					</div>
				</ons-list-item>

				<ons-list-item>
					<div class="left">
						<img class="list-item__thumbnail" src="https://placekitten.com/g/40/40">
					</div>
					<div class="center">
						<span class="list-item__title">Instagram - Berry cupcake</span><span class="list-item__subtitle">On the Internet</span>
					</div>
				</ons-list-item>
			</ons-list>

		</div>

		<ons-button modifier="large--quiet" style="display: inline-block;" onclick="location.href='activity2.php'">Maybe Later</ons-button>
	</ons-card> -->

	<style type="text/css">
	.header-view {
		width: 100%;
		height: 20%;
		text-align: center;
		display: table;
	}

	.headericon {
		vertical-align: middle !important;
		font-size: 100px;
		opacity: 1;
		display: table-cell;
	}

</style>

<ons-bottom-toolbar>
	<div class="tabbar">
		<label class="tabbar__item" onclick="location.href='index.php'">
			<input type="radio" name="tabbar-a">
			<button class="tabbar__button">
				<i class="tabbar__icon ion-stop"></i>
				<div class="tabbar__label">Home</div>
			</button>
		</label>

		<label class="tabbar__item" onclick="location.href='index.php'">
			<input type="radio" name="tabbar-a" checked="checked">
			<button class="tabbar__button">
				<i class="tabbar__icon ion-record"></i>
				<div class="tabbar__label">Explore</div>
			</button>
		</label>

		<label class="tabbar__item" onclick="location.href='index.php'">
			<input type="radio" name="tabbar-a">
			<button class="tabbar__button">
				<i class="tabbar__icon ion-star"></i>
				<div class="tabbar__label">Three</div>
			</button>
		</label>

		<label class="tabbar__item" onclick="location.href='index.php'">
			<input type="radio" name="tabbar-a">
			<button class="tabbar__button">
				<i class="tabbar__icon ion-stop"></i>
				<div class="tabbar__label">Four</div>
			</button>
		</label>

	</div>
</ons-bottom-toolbar>


</ons-page>

</body>

</html>
