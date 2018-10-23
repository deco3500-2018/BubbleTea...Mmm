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
		<link rel="stylesheet" type="text/css" href="css/style.css?version=2">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			
			
			
			
			<?php
				$pageName = "Recommended Places";
				include "header.php";		
			?>
			
			<ons-card style="height: 90%;">
				<!-- showing the map --> 
				<article style="height: 40%;">
					<div style="width: 87%; height: 100%; position: absolute; margin-left: auto; margin-right: auto; display: block;">
						
						<div id="map" style="height: 40%;"></div>		
						
					</div>
				</article>
				
				<script>
					
					
					
					getURLParameter(window.location.href);
					var id = getURLParameter('id');
					
					function initMap() {
						var map = new google.maps.Map(document.getElementById('map'), {
							center: new google.maps.LatLng(-27.499940, 153.015218),
							zoom: 11,
							disableDefaultUI: true
						});
						var infoWindow = new google.maps.InfoWindow;
						
						var myLatLng = {lat: -27.499940, lng: 153.015218};
						
						
						var marker = new google.maps.Marker({
							map: map,
							zoom: 1,
							animation: google.maps.Animation.DROP,
							position:myLatLng,
						});
						
						$.ajax({
							url: 'session.php',
							type: 'post',
							data: {"callgetRecomLocation":id},
							dataType: 'json',
							success: function(data){
								console.log(data);
								var myLatLng2 = {lat: Number(data["latitude"]), lng: Number(data["longitude"])};
								
								var marker2 = new google.maps.Marker({
									map: map,
									zoom: 1,
									animation: google.maps.Animation.DROP,
									position:myLatLng2,
								});
								
								var bounds = new google.maps.LatLngBounds();
								bounds.extend(myLatLng);
								bounds.extend(myLatLng2);
								
								map.fitBounds(bounds);
								
								
								var directionsService = new google.maps.DirectionsService;
								var directionsDisplay = new google.maps.DirectionsRenderer;
								
								directionsDisplay.setMap(map);
								directionsDisplay.setOptions( { suppressMarkers: true } );
								
								calculateAndDisplayRoute(directionsService, directionsDisplay,myLatLng,myLatLng2);
								
								
								$(".title").text(data["title"]);
								$("#description").text(data["description"]);
								
								$('.fa-star').each(function(i, obj) {
									if (i<Number(data["rating"])){
										$(obj).addClass("checked");
									}
								});
								
							},
							error: function(data){
								console.log("error");
								console.log(data);
							}
						});	
						
						
					}
					
					function calculateAndDisplayRoute(directionsService, directionsDisplay,myLatLng,myLatLng2) {
						directionsService.route({
							origin: myLatLng,
							destination: myLatLng2,
							travelMode: 'DRIVING'
							}, function(response, status) {
							if (status === 'OK') {
								directionsDisplay.setDirections(response);
								} else {
								console.log('Directions request failed due to ' + status);
							}
						});
					}
					
					
					function getURLParameter(name) {
						return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
					}
				</script>
				
				
				<br><br><br>
				
				<div class="title" style="text-align: center; display: block;">
					INSERT ACTIVITY NAME
				</div>
				
				<br>
				
				<div class="content">
					
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					
					<span><i style="font-size:0.7em">From Google Review</i></span>
					
					<ons-list>	 
						<p id="description"></p>
					</div>
					
					<ons-dialog id="my-dialog">
						<div style="text-align: center; padding: 10px;">
							<p>
								 This activity has been saved for you to do later!
							</p>
							
							<p>
								<ons-button onclick="hideDialog('my-dialog')">Close</ons-button>
							</p>
						</div>
					</ons-dialog>
				</ons-list>
				
				<ons-button modifier="large--quiet" style="display: inline-block;" onclick="showTemplateDialog()">Maybe Later</ons-button>
				
			</div>
			
			
		</ons-card>
		
		<template id="dialog.html">
  <ons-dialog id="my-dialog">
    <div style="text-align: center; padding: 10px;">
      <p>
        This activity has been saved for you to do later!
      </p>

      <p>
        <ons-button onclick="hideDialog('my-dialog')">Close</ons-button>
      </p>
    </div>
  </ons-dialog>
</template>
		
		<?php include "footer.php";?>
		
		
	</ons-page>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
	integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
	integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
	</script>
	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1U60JLm18jCDzO0lir9DUQozARJ4M14Q&callback=initMap"></script>
	
	<script type="text/javascript" src="js/eventHandling.js?version=5"></script>
	
</body>

</html>
