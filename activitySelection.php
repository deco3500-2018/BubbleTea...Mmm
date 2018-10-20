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
				<?php
					if( isset($_POST['interest'])){
						$category = json_decode($_POST['interest']);
						$interest = json_decode($_SESSION['interest']);
						
						$categorySql = "";
						for ($x = 0; $x < sizeof($category); $x++) {
							if (sizeof($category) ==1){
								$categorySql =  "(".$category[$x].")";
							} else if ($x == 0){
								$categorySql = "(".$category[$x];
							} else if ($x == sizeof($category)-1){
								$categorySql .= ",".$category[$x].")";
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
							} 
						}
						
						
						$sql="SELECT * 
						FROM recommendation 
						WHERE interestID IN ".$interestSql." AND categID IN ".$categorySql. 
						"AND ".$_SESSION['time']." BETWEEN timeRangeStart AND timeRangeEnd 
						AND hour(now()) >= hour(startTimeSuitable) 
						AND hour(now()) <= hour(endTimeSuitable)";
						
						$result = mysqli_query($db,$sql);
					
						while ($row = mysqli_fetch_assoc($result)) {
							echo '
							<ons-carousel-item>
								<form method="post">
									<ons-card id="activity1">
										<div class="title" style="text-align: center;">
											<h1>'.$row['title'].'</h1>
										</div>
										<br>
										<img src="'.$row['image'].'" alt="Persona Icon" style="width: 80%; display: block; margin-left: auto; margin-right: auto;"><br><br>
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
							';
						}
						
					} else{
						header("Location:categorySelection.php");
					}
					
					
				?>
				
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
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
		</script>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
		</script>
		
		<script type="text/javascript" src="js/eventHandling.js"></script>
		
	</body>
	
</html>
