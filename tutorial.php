<?php
include "start.php";
include "error.php";

if (!isset($_SESSION['interest'])){
	$_SESSION['interest'] = $_POST['interest'];
}

if(isset($_SESSION['username'])&& isset($_SESSION['interest'])){
	$name = $_SESSION['username'];
} else{
	header("Location:login.php");
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>In the Moment</title>
	
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?version=2">
	<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
</head>

<body>

	<ons-page id="bg">
		<?php
		$white = false;
		$back = false;
		include "header.php";		
		?>

		<div style="text-align: center; margin: auto;  max-width:80%;" id="textclr">

			<h1 class="intro">
				Hi <?php

				echo '' . $name; 
				?>!
				<br>
				Welcome to In the Moment				
			</h1>

			<p>Here's some quick tips on what you can do with us</p>

		</div>

		<br>
		<div style="width: 50%; display: block; margin: 0px auto; margin-top: 10px;">
			<ons-button modifier="button large--cta" id='textclr' onclick="location.href='index.php'">I know what to do</ons-button>
		</div>
		<br>

		<!-- tutorial carousel --> 

		<ons-carousel class="carousel" auto-scroll id="carousel" auto-refresh swipeable overscrollable>
			<ons-carousel-item id="t1">
				<ons-card>
					<div class="title" style="text-align: center;">
						<h1>Tell us who you are...</h1>
						<img src="img/icons/002-user.png" style="display: block; margin:0px auto; width: 100px; height: 100px;">
						<p>We asked you to select a persona which you think is the closest to you.</p>
					</div>

					<div class="content">						
						<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 10%;">

							<ons-button modifier="large--quiet" style="display: inline-block;" onclick="next()">Next</ons-button>
						</section>
					</div>
				</ons-card>
			</ons-carousel-item>

			<ons-carousel-item id="t1">
				<ons-card>
					<div class="title" style="text-align: center;">
						<h1>...and what you like...</h1>
						<div style="width: 80%; text-align: center; display: block; margin:0px auto;">
							<img src="img/activity/hiking.png" style="display: inline-block; margin:0px auto; width: 30%; height: 30%;">
							<img src="img/activity/picnic.png" style="display: inline-block; margin:0px auto; width: 30%; height: 30%;">
							<img src="img/activity/016-delivery.png" style="display: inline-block; margin:0px auto; width: 30%; height: 30%;">
						</div>
						<p>Then we asked you to select some interest areas.</p>
					</div>

					<div class="content">						
						<section style="margin-top: 10%;">
							<ons-button modifier="large--quiet" style="display: inline-block; width: 48%;" class="left" onclick="prev()">Prev</ons-button>
							<ons-button modifier="large--quiet" style="display: inline-block; width: 48%;" class="right" onclick="next()">Next</ons-button>
						</section>
					</div>
				</ons-card>
			</ons-carousel-item>


			<ons-carousel-item id="t2">
				<ons-card>
					<div class="title" style="text-align: center; width: 90%;" >
						<h1>So we can give you personalised recommendations!</h1>
						<img src="img/good.png" style="display: block; margin:0px auto; width: 100px; height: 100px;">
						<p>These are based on where you are, what time of the day it is, and how much free time you have on hand in the moment!</p>
					</div>
					

					<div class="content">						
						<section style="margin-top: 10%;">
							<ons-button modifier="large--quiet" style="display: inline-block; width: 48%;" class="left" onclick="prev()">Prev</ons-button>
							<ons-button modifier="large--quiet" style="display: inline-block; width: 48%;" class="right" onclick="next()">Next</ons-button>
						</section>
					</div>
				</ons-card>
			</ons-carousel-item>

			<ons-carousel-item id="t4">
				<ons-card>
					<div class="title" style="text-align: center;">
						<h1>Tracking your free time</h1>
						<img src="img/bars-chart.png" style="display: block; margin:0px auto; width: 100px; height: 100px;">
						<p>To help you see if you've been spending enough free time, we show you how much free time you've spent in comparison to other people!</p>
					</div>
					
					<br>

					<div class="content">						
						<section style="margin-top: 10%;">
							<ons-button modifier="large--quiet" style="display: inline-block; width: 48%;" class="left" onclick="prev()">Prev</ons-button>
							<ons-button modifier="large--quiet" style="display: inline-block; width: 48%;" class="right" onclick="next()">Next</ons-button>
						</section>
					</div>

				</ons-card>
			</ons-carousel-item>

			<ons-carousel-item>
				<ons-card>
					<div class="title" style="text-align: center;">
						<h1>Here's our process in a few simple steps</h1>
						<br><ons-icon icon="md-check"></ons-icon>  Select the 'Start' button in the footer bar <br>
						<br><ons-icon icon="md-check"></ons-icon>  Fill in the amount of free time you currently have <br>
						<br><ons-icon icon="md-check"></ons-icon>  Select the interest area you most feel like doing today <br>
						<br><ons-icon icon="md-check"></ons-icon>  Select the recommended activity or save it for later. <br>
						<br><ons-icon icon="md-check"></ons-icon>  Rinse and repeat the above step!
					</div>

					<div class="content">						
						<section style="margin-top: 10%;">
							<ons-button modifier="large--quiet" style="display: inline-block; width: 48%;" class="left" onclick="prev()">Prev</ons-button>
							<ons-button modifier="large--quiet" style="display: inline-block; width: 48%;" onclick="location.href='index.php'">Finish</ons-button>
						</section>
					</div>

				</ons-card>


			</ons-carousel-item>

			

		</ons-carousel>

		<script type="text/javascript">
			var prev = function() {
				var carousel = document.getElementById('carousel');
				carousel.prev();
			};

			var next = function() {
				var carousel = document.getElementById('carousel');
				carousel.next();
			};

			ons.ready(function() {
				var carousel = document.addEventListener('postchange', function(event) {
					console.log('Changed to ' + event.activeIndex)
				});
			});
		</script>


		<?php include "footer.php";?>

	</ons-page>

</body>

</html>
