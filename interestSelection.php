<?php
	
	include "error.php";
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>In the Moment</title>
		
		<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
		<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
		<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css?version=2">
		<link rel="stylesheet" type="text/css" href="css/interestcss.css?version=2">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		
	</head>
	
	<body>
		
		<ons-page id="bg">
		<?php
				include "header.php";		
			?>
			<div style="text-align: center;">
				<h1 style="margin: 10%;" class="title" id="textclr">Select the categories that you are interested in:</h1>
				<br>
			</div>
			<div>
				
				<!-- dynamically create the checkbox base on interest retrieved from the database-->
				<?php
				include "start.php";
					$colourArray = array("#284754", "#3B83A3", "#00A79D", "#F78360", "#6ABEE2");
					$id = $_GET['id'];
					// to be retrieved from the database
					$_SESSION['user'] = $id;
					
					// user must choose a persona first
					if(isset($_SESSION['user'])){
						$user = $_SESSION['user'];
						
						$sql="SELECT interestID FROM userinterest WHERE userID = $user";
					
						
						$result = mysqli_query($db,$sql);
						
						
						$count=0;
						while ($rowResult = mysqli_fetch_assoc($result)) {
							$sqlInterest="SELECT * FROM interest WHERE interestID = ".$rowResult['interestID'];
							$resultInterest = mysqli_query($db,$sqlInterest);
							$row = mysqli_fetch_assoc($resultInterest);

							if ($count%2 ==0){
								echo '<ons-row class="user_cover">';
							}
							echo '  <ons-col class="interest" id = "'.$row['interestID'].'">
							<div class="user_thumbnail" style="background-color: '.$colourArray[$count].'"><ons-icon icon="'.$row['image'].'"></ons-icon></div>
							<div class="username" id="user_2_name" style="font-size:1em">'.$row['name'].'</div>
							</ons-col>';
							$count++;
							if ($count%2 ==0){
								echo '</ons-row>';
							}
							
						}
						} else {
						header("Location:login.php");
					}
					
				?>        
				
			</div>
			<ons-row class="user_cover">
				<ons-button modifier="cta" style="display: inline-block;margin-right: auto; margin-left: auto; color:white">
					<ons-input input-id="textclr" value="Submit" onclick="submitInterest()">
					</ons-input>
				</ons-button>
			</ons-row>
			
			
			<form id="interestForm" name="interestForm" action="index.php" method="post">
				<input type="hidden" name="interest" id="hiddenInterest">
			</form>
			
		</ons-page>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
		</script>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
		</script>
		
		<script type="text/javascript" src="js/eventHandling.js?version=4"></script>
	
	</body>
	
</html>