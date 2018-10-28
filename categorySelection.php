<!DOCTYPE html>
<?php
	include "start.php";
	include "error.php";
?>
<html>
	
	<head>
		<title>In the Moment</title>
		<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
		<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css?version=2">
		<link rel="stylesheet" type="text/css" href="css/interestcss.css?version=2">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	</head>
	
	<body>
		<ons-page id="bg">
			<?php
				include "header.php";		
			?>
			
			<div style="text-align: center;">
				<h1 style=" margin-left:5%; margin-right:5%;" class="title" id="textclr">What do you feel like doing today?</h1>
			</div>
			
			<div>
				<!-- dynamically create the category buttons based on category retrieved from the database-->
				<?php
					
					// an array of colours for the buttons
					$colourArray = array("#284754", "#3B83A3", "#00A79D", "#F78360", "#6ABEE2","#964713");
					
					if (isset($_SESSION['time'])){
						
						$sql="SELECT * FROM category";
						
						$rs = mysqli_query($db,$sql);
						$count=0;
						while ($row = mysqli_fetch_assoc($rs)) {
							if ($count%2 ==0){
								echo '<ons-row class="user_cover">';
							}
							echo '  <ons-col class="interest" id = "'.$row['categID'].'">
							<div class="user_thumbnail" style="background-color: '.$colourArray[$count].'"><ons-icon icon="'.$row['image'].'"></ons-icon></div>
							<div class="username" id="user_2_name" style="font-size:1em">'.$row['name'].'</div>
							</ons-col>';
							$count++;
							if ($count%2 ==0){
								echo '</ons-row>';
							}
						}
					} else {
						header("Location:timeSelection.php");
					}
					
				?>
			</div>
			
			<ons-row class="user_cover">
				<ons-button modifier=" large--cta"  onclick="submitCategory()" style="width:80%;margin:auto">
					<span>Submit</span>
				</ons-button>
			</ons-row>
			
			<?php include "footer.php";?>
			
		</ons-page>
		
		<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
		</script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
		</script>
		<script type="text/javascript" src="js/eventHandling.js?version=5"></script>	
	</body>
	
</html>			