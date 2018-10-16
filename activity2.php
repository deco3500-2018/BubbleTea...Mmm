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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
</head>

<body>

	<ons-page id="bg">
		<div class="background" style="background-image: url('img/grad.png');"></div>

		<style type="text/css">

		#bg .page__background {
			background-color: white;
		}

		#textclr{
			color: white;
		}

		#white{
			color: white;
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


		<ons-card>
			<img src="img/card.jpg" alt="Onsen UI" style="width: 100%">
			<div class="title" style="text-align: center;">
				15 minute pilates sessions
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
				</ons-list-item>

				<ons-list-item>
					<div class="left">
						<img class="list-item__thumbnail" src="https://placekitten.com/g/40/40">
					</div>
					<div class="center">
						<span class="list-item__title">Video - Introduction to pilates</span><span class="list-item__subtitle">On the Internet</span>
					</div>
				</ons-list-item>
			</ons-list>

		</div>

		<ons-button modifier="large--quiet" style="display: inline-block;" onclick="location.href='activityRec.php'">Maybe Later</ons-button>
	</ons-card>

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
		<label class="tabbar__item">
			<input type="radio" name="tabbar-a" checked="checked">
			<button class="tabbar__button">
				<i class="tabbar__icon ion-stop"></i>
				<div class="tabbar__label">Home</div>
			</button>
		</label>

		<label class="tabbar__item">
			<input type="radio" name="tabbar-a">
			<button class="tabbar__button">
				<i class="tabbar__icon ion-record"></i>
				<div class="tabbar__label">Explore</div>
			</button>
		</label>

		<label class="tabbar__item">
			<input type="radio" name="tabbar-a">
			<button class="tabbar__button">
				<i class="tabbar__icon ion-star"></i>
				<div class="tabbar__label">Three</div>
			</button>
		</label>

		<label class="tabbar__item">
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
