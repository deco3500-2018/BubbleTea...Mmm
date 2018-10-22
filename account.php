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

if(!isset($_SESSION['totalTime'])){
	$_SESSION['totalTime'] = 0;
} else if (isset($_SESSION["time"])){
	$_SESSION['totalTime'] = round( $_SESSION['totalTime'] + ($_SESSION['time']/60)); 
	unset ($_SESSION["time"]);
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

		<div style="text-align: center; margin: auto;  max-width:800px;" id="textclr">

			<h1 class="intro">
				Account
			</h1>
		</div>



		<div>
			<img src="img/icons/004-ghost.png" style="margin:auto; display: block;"/>
		</div>

		<br>
<!-- 		<div style="text-align: center; margin: auto;" id="textclr">
			<p>Edit Profile Details</p>
		</div> -->
		<br>
		<div style="width: 80%; margin-right: auto; margin-left: auto;">
			
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

<!-- 				<ons-list-item modifier="nodivider">
					<div class="left">
						<ons-input modifier="material" placeholder="Update password"></ons-input>
					</div>
					<div class="right">
						<ons-button modifier="quiet">Save</ons-button>
					</div>
				</ons-list-item> -->

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
			<ons-button modifier="large--cta" style="background-color:#22c1c3e0;color:white">Sign out
				<!-- <ons-input input-id="textclr"  name="logout_btn" value="Sign out"></ons-input> -->
			</ons-button>
			</a>

		</section>

		<?php include "footer.php";?>


	</ons-page>

</body>

</html>
