<?php
	include "start.php";
	include "error.php";
	
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
		<link rel="stylesheet" type="text/css" href="css/style.css?version=2">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	</head>
	
	<body>
		
		<ons-page id="bg">
			<?php
				$white = false;
				include "header.php";		
			?>
			
			<div style="text-align: center; margin: auto;  max-width:800px;" id="textclr">
				<h1 class="intro">
					Account
				</h1>
			</div>
			
			<div>
				<img src="img/icons/004-ghost.png" style="margin:auto; display: block;"/>
			</div>
			
			<br>
			<br>
			
			<div style="width: 80%; margin-right: auto; margin-left: auto;">
				
				<ons-list>
					<ons-list-header modifier="nodivider">Your Interests</ons-list-header>
					<ul class="list">
						<?php
							// dynamic generate the checkboxes based on the interest that has been selected previously
							if (isset($_SESSION['interest'])){
								$interest = json_decode($_SESSION['interest']);
								
								for ($y = 0; $y < sizeof($interest); $y++) {
									
									$sql = "SELECT * FROM interest WHERE interestID = ".$interest[$y];
									$result = mysqli_query($db,$sql);
									$row = mysqli_fetch_assoc($result);
									echo '<li class="list-item list-item--tappable" modifier="nodivider">
									<div class="list-item__left">
									<label class="checkbox checkbox--noborder">
									<input id="s2" type="checkbox" class="checkbox__input checkbox--noborder__input" checked>
									<div class="checkbox__checkmark checkbox--noborder checkbox--noborder__checkmark"></div>
									</label>
									</div>
									<label for="s2" class="list-item__center" modifier="nodivider">
									'.$row['name'].'
									</label>
									</li>';
								}
							}else{
								header("Location:login.php");
							}
						?>
					</ul>
				</ons-list>
				
				<br>
				
				<ons-list>
					<ons-list-header>Update username</ons-list-header>
					<ons-list-item modifier="nodivider">
						<div class="left">
							<ons-input modifier="material" placeholder="Update username"></ons-input>
						</div>
						<div class="right">
							<ons-button modifier="quiet">Save</ons-button>
						</div>
					</ons-list-item>
				</ons-list>
					
				<br>
					
				<ons-list>
					<ons-list-header>Notifications</ons-list-header>
					
					<ons-list-item modifier="nodivider">
						<div class="left">
							Turn off notifications
						</div>
						<div class="right">
							<ons-switch></ons-switch>
						</div>
					</ons-list-item>	
				</ons-list>
			</div>
						
			<section style="max-width: 80%; margin: 10%; ">
				<a href="login.php">
					<ons-button modifier="large--cta" style="background-color:#25a6d9;color:white">
						Sign out
					</ons-button>
				</a>		
			</section>
					
			<?php include "footer.php";?>
					
		</ons-page>
					
	</body>
					
</html>
										