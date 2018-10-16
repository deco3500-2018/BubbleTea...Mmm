<?php
include "start.php";
include "error.php";
require_once( 'vendor/autoload.php' );

$fb = new Facebook\Facebook([
  'app_id' => '736882723323708', // Replace {app-id} with your app id
  'app_secret' => '67e1b3111e10c972cab13cc1564c95fb',
  'default_graph_version' => 'v2.2',
]);

try {
  // Returns a `Facebook\FacebookResponse` object
	$response = $fb->get('/me?fields=id,name', $_SESSION['fb_access_token']);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
	echo 'Graph returned an error: ' . $e->getMessage();
	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
	exit;
}

$user = $response->getGraphUser();

?>


<!DOCTYPE html>
<html>

<head>
	<title>In the Moment</title>
	
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
	<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
</head>

<body>

	<ons-page id="bg">

		<style type="text/css">
			#bg .page__background {
				background-color: white;
			}

			#textclr{
				color: white;
			}

			#header {
			background: #22c1c3;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to bottom, #fdbb2d, #22c1c3);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to bottom, #fdbb2d, #22c1c3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			}
		</style>

		<!-- Navbar -->
		<ons-toolbar class="toolbar toolbar--transparent">
			<div class="toolbar__right">
				<span class="toolbar-button">
					<i class="ion-navicon" style="font-size:32px; vertical-align:-6px; margin-right: 10px;"></i>
				</span>
			</div>

			<div class="toolbar__center" id="textclr" style="text-transform: bold;">
				HOME
			</div>

			<div class="toolbar__left">
				<!-- <span class="toolbar-button" id="textclr">Label</span> -->
				<ons-toolbar-button icon="md-face" style="margin-left: 10px;"></ons-toolbar-button>
			</div>
		</ons-toolbar>

		<p class="intro">
			Welcome back

			<?php

			echo 'Name: ' . $user['name']; 
			?>
		</p>

		<div class="camera-view" id="header">
			<ons-icon class="camera-icon" icon="md-face" id="textclr"></ons-icon>
		</div>

		<style type="text/css">
			.camera-view {
				width: 100%;
				height: 30%;
				text-align: center;
				background-color: #cacaca;
				display: table;
			}

			.camera-icon {
				vertical-align: middle !important;
				font-size: 100px;
				opacity: 1;
				display: table-cell;
			}

			.camera-button {
				width: 100%;
				height: 40%;
				text-align: center;
				display: table;
			}
		</style>


		<!-- Graph section --> 
		<section>
			<canvas id="myChart" width="80" height="50"></canvas>
			<script>
				var ctx = document.getElementById("myChart").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"],
						datasets: [{
							label: 'Free Time (# of Hours)',
							data: [12, 9, 3, 5, 2, 3, 4, 7, 3, 5],
							backgroundColor: [
							'rgba(54, 162, 235, 0.8)',
							'rgba(54, 162, 235, 0.8)',
							'rgba(54, 162, 235, 0.8)',
							'rgba(54, 162, 235, 0.8)',
							'rgba(54, 162, 235, 0.8)',
							'rgba(54, 162, 235, 0.8)',
							'rgba(54, 162, 235, 0.8)',
							'rgba(54, 162, 235, 0.8)',
							'rgba(54, 162, 235, 0.8)',
							],
							borderColor: [
							'rgba(54, 162, 235, 0.8)'
							],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero:true
								}
							}]
						}
					}
				});
			</script>
		</section>

		<!-- <style>
		.intro {
			text-align: center;
			padding: 0 20px;
			margin-top: 40px;
		}

		ons-card {
			cursor: pointer;
			color: #333;
		}

		.card__title,
		.card--material__title {
			font-size: 20px;
		}

		#white{
			color: white;
		}
		</style> -->

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
