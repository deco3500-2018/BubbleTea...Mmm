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

			<div class="toolbar__center" id="textclr" style="text-transform: bold;">
				Select an activity that you'd like to do!
			</div>

		</ons-toolbar>

		<ons-carousel class="carousel" auto-scroll id="carousel" auto-refresh swipeable overscrollable>
			<!-- Activity 1 --> 
			<ons-carousel-item>
				<form method="post">
					<ons-card id="activity1">
						<div class="title" style="text-align: center;">
							<h1>Fancy some coffee?</h1>
						</div>
						<br>
						<img src="img/activity/011-coffee.png" alt="Persona Icon" style="width: 80%; display: block; margin-left: auto; margin-right: auto;"><br><br>
						<div class="content">
							
							<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
								
								<ons-button modifier="button large--cta">
									<ons-input input-id="textclr" type="submit" name="login_btn" value="SELECT THIS ACTIVITY"></ons-input>
								</ons-button>

								<br>

								<ons-button modifier="large--quiet" style="display: inline-block;">Maybe Later</ons-button>

							</section>
						</div>
					</ons-card>
				</form>
			</ons-carousel-item>


			<!-- Activity 1 --> 
			<ons-carousel-item>
				<form method="post">
					<ons-card id="activity1">
						<div class="title" style="text-align: center;">
							<h1>Fancy some coffee?</h1>
						</div>
						<br>
						<img src="img/activity/011-coffee.png" alt="Persona Icon" style="width: 80%; display: block; margin-left: auto; margin-right: auto;"><br><br>
						<div class="content">
							
							<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
								
								<ons-button modifier="button large--cta">
									<ons-input input-id="textclr" type="submit" name="login_btn" value="SELECT THIS ACTIVITY"></ons-input>
								</ons-button>

								<br>

								<ons-button modifier="large--quiet" style="display: inline-block;">Maybe Later</ons-button>

							</section>
						</div>
					</ons-card>
				</form>
			</ons-carousel-item>


				<!-- Activity 1 --> 
			<ons-carousel-item>
				<form method="post">
					<ons-card id="activity1">
						<div class="title" style="text-align: center;">
							<h1>Fancy some coffee?</h1>
						</div>
						<br>
						<img src="img/activity/011-coffee.png" alt="Persona Icon" style="width: 80%; display: block; margin-left: auto; margin-right: auto;"><br><br>
						<div class="content">
							
							<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
								
								<ons-button modifier="button large--cta">
									<ons-input input-id="textclr" type="submit" name="login_btn" value="SELECT THIS ACTIVITY"></ons-input>
								</ons-button>

								<br>

								<ons-button modifier="large--quiet" style="display: inline-block;">Maybe Later</ons-button>

							</section>
						</div>
					</ons-card>
				</form>
			</ons-carousel-item>


					<!-- Activity 1 --> 
			<ons-carousel-item>
				<form method="post">
					<ons-card id="activity1">
						<div class="title" style="text-align: center;">
							<h1>How does a picnic sound?</h1>
						</div>
						<br>
						<img src="img/activity/009-table.png" alt="Persona Icon" style="width: 80%; display: block; margin-left: auto; margin-right: auto;"><br><br>
						<div class="content">
							
							<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
								
								<ons-button modifier="button large--cta">
									<ons-input input-id="textclr" type="submit" name="login_btn" value="SELECT THIS ACTIVITY"></ons-input>
								</ons-button>

								<br>

								<ons-button modifier="large--quiet" style="display: inline-block;">Maybe Later</ons-button>

							</section>
						</div>
					</ons-card>
				</form>
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
									<div class="tabbar__label">Profile</div>
								</button>
							</label>
						</div>
					</ons-bottom-toolbar>


				</ons-page>

			</body>

			</html>
