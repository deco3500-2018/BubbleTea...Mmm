<?php
	include "start.php";
	include "error.php";	
	
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>In the Moment</title>
		
		<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
		<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
		<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css?version=2">
	</head>
	
	<body>
		
		
		<ons-page id="bg">
			<div class="background"></div>
			
			<?php
				include "header.php";		
			?>
			
			
			<ons-carousel class="carousel" auto-scroll id="carousel" auto-refresh swipeable overscrollable>
				<?php
				if (!isset($_SESSION['category'])){
					$_SESSION['category'] = $_POST['interest'];
				}
				
					if( isset($_SESSION['category'])&&isset($_SESSION['interest'])){
						$category = json_decode($_SESSION['category']);
						$interest = json_decode($_SESSION['interest']);
						
						$categorySql = "";
						for ($x = 0; $x < sizeof($category); $x++) {
							if (sizeof($category) ==1){
								$categorySql =  "(".$category[$x].")";
							} else if ($x == 0){
								$categorySql = "(".$category[$x];
							} else if ($x == sizeof($category)-1){
								$categorySql .= ",".$category[$x].")";
							}  else {
								$categorySql .= ",".$category[$x];
							}
						}
						
						$interestSql = "";
						
						for ($y = 0; $y < sizeof($interest); $y++) {
						
							if (sizeof($interest) ==1){
								$interestSql =  "(".$interest[$y].")";
							} else if ($y == 0){
								$interestSql = "(".$interest[$y];
							} else if ($y == sizeof($interest)-1){	
								$interestSql .= ",".$interest[$y].")";
							} else {
								$interestSql .= ",".$interest[$y];
							}
						}
						
						date_default_timezone_set('Australia/Brisbane');
						
						$sql="SELECT * 
						FROM recommendation 
						WHERE interestID IN ".$interestSql." AND categID IN ".$categorySql. 
						"AND ".$_SESSION['time']." BETWEEN timeRangeStart AND timeRangeEnd 
						AND ".date('H')." >= hour(startTimeSuitable) 
						AND ".date('H')." <= hour(endTimeSuitable)";
						  
						$result = mysqli_query($db,$sql);
						
						if (mysqli_num_rows($result) != 0){
						
						while ($row = mysqli_fetch_assoc($result)) {
							$link;
							if ($row['type']=='Location'){
								$link = "activityRec_map.php?id=".$row['recomID'];
							} else{
								$link = "activityRec.php?id=".$row['recomID'];
							}
							echo '
							<ons-carousel-item>
								<form method="post">
									<ons-card id="activity1">
										<div class="title" style="text-align: center;">
											<h1>'.$row['title'].'</h1>
										</div>
		
										<img src="'.$row['image'].'" alt="Persona Icon" style="width: 70%; display: block; margin-left: auto; margin-right: auto;"><br><br>
										<div class="content">
											
											<section style="max-width: 80%; margin-left: 10%; margin-right: 10%; margin-top: 0%;">
												
												<a href="'.$link.'">
												<ons-button modifier="button large--cta">
													<span>Select this activity</span>
												</ons-button>
												</a>
												
			
												
												<ons-button modifier="large--quiet" style="display: inline-block;" onclick="showTemplateDialog()">Maybe Later</ons-button>
											
											</section>
											</div>
									</ons-card>
								</form>
							</ons-carousel-item>
							';
						}
						} else {
							echo '<p style="padding: 10px;">Sorry, no recommendation has been found based on your requirements.</p>';
						}
						
					} else{
						header("Location:categorySelection.php");
					}
					
					
				?>
				
			</ons-carousel>
			
			
			<template id="dialog.html">
  <ons-dialog id="my-dialog">
    <div style="text-align: center; padding: 10px;">
      <p>
        This activity has been saved for you to do later!
      </p>

      <p>
        <ons-button onclick="hideDialog('my-dialog')">Close</ons-button>
      </p>
    </div>
  </ons-dialog>
</template>
			
			
			<?php include "footer.php";?>
			
			
		</ons-page>
		
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
		</script>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
		</script>
		
		<script type="text/javascript" src="js/eventHandling.js"></script>
		
	</body>
	
	<?php
		 echo "<script>console.log(".json_encode($sql).")</script>";
	?>
	
</html>
