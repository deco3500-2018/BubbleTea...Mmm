<?php
include "start.php";
if (isset($_POST['name'])){
$_SESSION['username']= $_POST['name'];
} else if (!isset($_SESSION['username'])) {
	header("Location:login.php");
}
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
			<div class="toolbar__center" id="textclr" style="font-weight: bold;margin-top:2%;">
				Choose a persona that best describes you!
			</div>

		</ons-toolbar>

		<ons-carousel class="carousel" auto-scroll id="carousel" auto-refresh swipeable overscrollable>
			<!-- Card 1 --> 
			<ons-carousel-item>
					<ons-card id="persona1">
						<div class="title">
							Persona 1: Mary
						</div>
						<br>
						<img src="img/icons/015-girl-12.png" alt="Persona Icon" style="width: 70%; display: block; margin-left: auto; margin-right: auto;"><br><br>
						<div class="content">
							<ons-list>
								<ons-list-header class="list-item__subtitle" style="text-align: center; font-weight: bolder;">Shopping Enthusiast</ons-list-header>
								<ons-list-item modifier="nodivider">A big fan of checking out new boutiques</ons-list-item>
								<ons-list-item modifier="nodivider">Keeping on top of trends is a must</ons-list-item>
							</ons-list>
							<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
								<a href="interestSelection.php?id=1">
									<ons-button modifier="button large--cta">
										<ons-input input-id="textclr" type="submit" name="login_btn" value="Select this Persona"></ons-input>
									</ons-button>
								</a>
							</section>
						</div>
					</ons-card>
			</ons-carousel-item>


			<!-- Card 2 -->
			<ons-carousel-item>
				<ons-card id="persona2">
					<div class="title">
						Persona 2: John
					</div>
					<br>
					<img src="img/icons/001-boy.png" alt="Persona Icon" style="width: 70%; display: block; margin-left: auto; margin-right: auto;"><br><br>
					<div class="content">
						<ons-list>
							<ons-list-header class="list-item__subtitle" style="text-align: center; font-weight: bolder;">Athletic</ons-list-header>
							<ons-list-item modifier="nodivider">Enjoys outdoor activities</ons-list-item>
							<ons-list-item modifier="nodivider">A sporty individual who prefers to keep on the move</ons-list-item>
						</ons-list>
						<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
							<a href="interestSelection.php?id=2">
									<ons-button modifier="button large--cta">
										<ons-input input-id="textclr" type="submit" name="login_btn" value="Select this Persona"></ons-input>
									</ons-button>
								</a>
							</section>
						</div>
					</ons-card>
				</ons-carousel-item>


				<!-- Card 3 -->
				<ons-carousel-item>
					<ons-card id="persona3">
						<div class="title">
							Persona 3: Jimmy 
						</div>
						<br>
						<img src="img/icons/031-man-6.png" alt="Persona Icon" style="width: 70%; display: block; margin-left: auto; margin-right: auto;"><br><br>
						<div class="content">
							<ons-list>
								<ons-list-header class="list-item__subtitle" style="text-align: center; font-weight: bolder;">Art Enthusiast</ons-list-header>
								<ons-list-item modifier="nodivider">Can usually be found in art museums</ons-list-item>
								<ons-list-item modifier="nodivider">Loves going for fine art workshops</ons-list-item>
								<ons-list-item modifier="nodivider">Interested in anything and everything artistic</ons-list-item>
							</ons-list>
							<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
								<a href="interestSelection.php?id=3">
									<ons-button modifier="button large--cta">
										<ons-input input-id="textclr" type="submit" name="login_btn" value="Select this Persona"></ons-input>
									</ons-button>
								</a>
								</section>
							</div>
						</ons-card>
					</ons-carousel-item>


					<!-- Card 4 -->
					<ons-carousel-item>
						<ons-card id="persona4">
							<div class="title">
								Persona 4: Jessica
							</div>
							<br>
							<img src="img/icons/014-girl-11.png" alt="Persona Icon" style="width: 70%; display: block; margin-left: auto; margin-right: auto;"><br><br>
							<div class="content">
								<ons-list>
									<ons-list-header class="list-item__subtitle" style="text-align: center; font-weight: bolder;">Coffee Lover</ons-list-header>
									<ons-list-item modifier="nodivider">Loves checking out new coffeeshops</ons-list-item>
									<ons-list-item modifier="nodivider">Coffee is always a thing</ons-list-item>
								</ons-list>
								<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">
									<a href="interestSelection.php?id=4">
									<ons-button modifier="button large--cta">
										<ons-input input-id="textclr" type="submit" name="login_btn" value="Select this Persona"></ons-input>
									</ons-button>
									</a>
									</section>
								</div>
							</ons-card>
						</ons-carousel-item>

					</ons-carousel>


				</ons-page>

			</body>

			</html>
