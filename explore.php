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
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body>
		
		<ons-page id="bg">
			<?php
				$white = false;
				include "header.php";		
			?>
			
			<div style="text-align: center; margin: auto; margin-top: 10%; max-width:800px;" id="textclr">
				
				<h1 class="intro" style="margin-right: 10%; margin-left: 10%;">
					Hi
					
					<?php
						
						echo '' . $name . ','; 
					?>
					
					what would you like to explore today?
				</p>
			</div>
			
			<p style="text-align: center;">
				<input type="search" value="" placeholder="Search" class="search-input search-input" style="width: 80%;">
			</p>
			
			<!-- For you section --> 
			<ons-card>
				<div style="text-align: center; margin: auto; margin-top: 10%; max-width:800px;">
					
					<h1 class="intro">For You</h1>
				</div>
				
				<div style="text-align: center; margin: auto; margin-top: 10%; ">
					<a href="activityRec.php?id=22">
						<div style="width: 100px; height: 100px; display: inline-block; margin-right: 5px;">
							<div>
								<img src="img/activity/009-table.png" alt="picnic" style="text-align:center; width: 100px; height: 100px;">
							</div>
							<p>Picnics</p>
						</div>
					</a>
					<a href="activityRec_map.php?id=3">
						<div style="width: 100px; height: 100px; display: inline-block; margin-right: 5px;">
							<div>
								<img src="img/activity/yoga.png" alt="picnic" style="text-align:center; width: 100px; height: 100px;">
							</div>
							<p>Yoga</p>
						</div>
					</a>
					<a href="activityRec_map.php?id=1">
						<div style="width: 100px; height: 100px; display: inline-block; margin-right: 5px;">
							<div>
								<img src="img/activity/011-coffee.png" alt="picnic" style="text-align:center; width: 100px; height: 100px;">
							</div>
							<p>Coffee</p>
						</div>
					</a>
				</div>
			</ons-card>
			
			<!-- Popular/Trending section --> 
			<ons-card>
				<div style="text-align: center; margin: auto; margin-top: 10%; max-width:800px;">
					
					<h1 class="intro">Popular Activities</h1>
				</div>
				
				<div style="text-align: center; margin: auto; margin-top: 10%; ">
					<div style="width: 100px; height: 100px; display: inline-block; margin-right: 5px;">
						<div>
							<img src="img/activity/017-moon.png" alt="picnic" style="text-align:center; width: 100px; height: 100px;">
						</div>
						<p>Moon Watching</p>
					</div>
					<div style="width: 100px; height: 100px; display: inline-block; margin-right: 5px;">
						<div>
							<img src="img/activity/006-sudoku.png" alt="picnic" style="text-align:center; width: 100px; height: 100px;">
						</div>
						<p>Doing Puzzles</p>
					</div>
					
					<div style="width: 100px; height: 100px; display: inline-block; margin-right: 5px;">
						<div>
							<img src="img/activity/004-painting.png" alt="picnic" style="text-align:center; width: 100px; height: 100px;">
						</div>
						<p>Art Workshops</p>
					</div>
				</div>
				
				<br>
				
				<div style="text-align: center; margin: auto; margin-top: 10%; ">
					<div style="width: 100px; height: 100px; display: inline-block; margin-right: 5px;">
						<div>
							<img src="img/activity/012-couch.png" alt="picnic" style="text-align:center; width: 100px; height: 100px;">
						</div>
						<p>Lazing on Couch</p>
					</div>
					<div style="width: 100px; height: 100px; display: inline-block; margin-right: 5px;">
						<div>
							<img src="img/activity/016-nodejs.png" alt="picnic" style="text-align:center; width: 100px; height: 100px;">
						</div>
						<p>Learning Node</p>
					</div>
					
					<div style="width: 100px; height: 100px; display: inline-block; margin-right: 5px;">
						<div>
							<img src="img/activity/020-jack-o-lantern.png" alt="picnic" style="text-align:center; width: 100px; height: 100px;">
						</div>
						<p>Carving Pumpkins</p>
					</div>
				</div>
			</ons-card>

			<?php include "footer.php";?>
			
		</ons-page>
		
		<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
	</body>
	
</html>
