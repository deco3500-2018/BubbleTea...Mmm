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
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>


	<ons-page id="bg">
		<div class="background"></div>

		<!-- Navbar -->
		<ons-toolbar class="toolbar toolbar--transparent">
			<!-- <div class="toolbar__right">
				<span class="toolbar-button">
					<i class="ion-navicon" style="font-size:32px; vertical-align:-6px; margin-right: 10px; color: white;"></i>
				</span>
			</div> -->

			<div class="toolbar__center" id="textclr" style="text-transform: bold;">
				Choose a persona that best describes you!
			</div>

			<!-- <div class="toolbar__left">
				<ons-toolbar-button icon="md-face" style="margin-left: 10px; color: white;"></ons-toolbar-button>
			</div> -->
		</ons-toolbar>

		<ons-carousel class="carousel" auto-scroll id="carousel" auto-refresh swipeable overscrollable>
			<ons-carousel-item>
					<ons-card>
						<div class="title">
							Persona 1: Mary
						</div>
						<br>
						<img src="img/icons/015-girl-12.png" alt="Persona Icon" style="width: 80%; display: block; margin-left: auto; margin-right: auto;"><br><br>
						<div class="content">
							<ons-list>
								<ons-list-header class="list-item__subtitle" style="text-align: center; font-weight: bolder;">Shopping Enthusiast</ons-list-header>
								<ons-list-item modifier="nodivider">A big fan of checking out new boutiques</ons-list-item>
								<ons-list-item modifier="nodivider">Keeping on top of trends is a must</ons-list-item>
							</ons-list>
							<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
							<ons-button modifier="button large--cta">
								<ons-input input-id="textclr" type="submit" name="login_btn" value="SELECT THIS PERSONA">
								</ons-button>
							</section>
						</div>
					</ons-card>
				</ons-carousel-item>

				<ons-carousel-item>
					<ons-card>
						<div class="title">
							Persona 2: John
						</div>
						<br>
						<img src="img/icons/001-boy.png" alt="Persona Icon" style="width: 80%; display: block; margin-left: auto; margin-right: auto;"><br><br>
						<div class="content">
							<ons-list>
								<ons-list-header class="list-item__subtitle" style="text-align: center; font-weight: bolder;">Athletic</ons-list-header>
								<ons-list-item modifier="nodivider">Enjoys outdoor activities</ons-list-item>
								<ons-list-item modifier="nodivider">A sporty individual who prefers to keep on the move</ons-list-item>
							</ons-list>
							<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
							<ons-button modifier="button large--cta">
								<ons-input input-id="textclr" type="submit" name="login_btn" value="SELECT THIS PERSONA">
								</ons-button>
							</section>
						</div>
					</ons-card>
				</ons-carousel-item>

				<ons-carousel-item>
					<ons-card>
						<div class="title">
							Persona 3: Jimmy 
						</div>
						<br>
						<img src="img/icons/031-man-6.png" alt="Persona Icon" style="width: 80%; display: block; margin-left: auto; margin-right: auto;"><br><br>
						<div class="content">
							<ons-list>
								<ons-list-header class="list-item__subtitle" style="text-align: center; font-weight: bolder;">Art Enthusiast</ons-list-header>
								<ons-list-item modifier="nodivider">Can usually be found in art museums</ons-list-item>
								<ons-list-item modifier="nodivider">Loves going for fine art workshops</ons-list-item>
								<ons-list-item modifier="nodivider">Interested in anything and everything artistic</ons-list-item>
							</ons-list>
							<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
							<ons-button modifier="button large--cta">
								<ons-input input-id="textclr" type="submit" name="login_btn" value="SELECT THIS PERSONA">
								</ons-button>
							</section>
						</div>
					</ons-card>
				</ons-carousel-item>

				<ons-carousel-item>
					<ons-card>
						<div class="title">
							Persona 4: Jessica
						</div>
						<br>
						<img src="img/icons/014-girl-11.png" alt="Persona Icon" style="width: 80%; display: block; margin-left: auto; margin-right: auto;"><br><br>
						<div class="content">
							<ons-list>
								<ons-list-header class="list-item__subtitle" style="text-align: center; font-weight: bolder;">Coffee Lover</ons-list-header>
								<ons-list-item modifier="nodivider">Loves checking out new coffeeshops</ons-list-item>
								<ons-list-item modifier="nodivider">Coffee is always a thing</ons-list-item>
							</ons-list>
							<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
							<ons-button modifier="button large--cta">
								<ons-input input-id="textclr" type="submit" name="login_btn" value="SELECT THIS PERSONA">
								</ons-button>
							</section>
						</div>
					</ons-card>
				</ons-carousel-item>

			</ons-carousel>


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
