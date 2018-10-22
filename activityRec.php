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
		<script src="https://d3js.org/d3.v5.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css?version=4">
	</head>
	
	<body>
		
		
		<ons-page id="bg">
			<div class="background"></div>
			
			<?php
				$pageName = "Recommended Activity";
				include "header.php";
				$sql = "SELECT * FROM recommendationdetails WHERE recomId = ".$_GET["id"];
				$result = mysqli_query($db,$sql);
				$row = mysqli_fetch_assoc($result);
				
				$link1 = explode('|', $row["link1"]);
				$link2 = explode('|', $row["link2"]);
				$link3 = explode('|', $row["link3"]);
				
			?>
			
			
			<!-- Navbar -->
			
			<ons-card>
				<img src="<?php echo $row["image"];?>" alt="Onsen UI" style="width: 100%">
				<div class="title" style="text-align: center;">
					<?php echo $row["title"];?>
				</div>
				<br>
				<div class="content">
					<!--	
					<ons-row style="margin-bottom: 15px;">
						<ons-col width="40px" style="text-align: center; line-height: 31px;">
							<ons-icon icon="md-thumb-down"></ons-icon>
						</ons-col>
						<ons-col>
							<ons-range style="width: 100%;" value="75"></ons-range>
						</ons-col>
						<ons-col width="40px" style="text-align: center; line-height: 31px;">
							<ons-icon icon="md-thumb-up"></ons-icon>
						</ons-col>
					</ons-row>-->
					
					<ons-list>
						<ons-list-header><?php echo $row["description"];?></ons-list-header>
						<ons-list-header>Below are some links to get you started:</ons-list-header>
						
						<a href="<?php echo $link1[1]?>">
						<ons-list-item>
							<div class="left">
								<img class="list-item__thumbnail" src="img/linkIcon/<?php echo $link1[2]?>.png">
							</div>
							<div class="center">
								<span class="list-item__title"><?php echo $link1[0]?></span><span class="list-item__subtitle">From <?php echo $link1[2]?></span>
							</div>
						</ons-list-item>
						</a>
						
						<a href="<?php echo $link2[1]?>">
						<ons-list-item>
							<div class="left">
								<img class="list-item__thumbnail" src="img/linkIcon/<?php echo $link2[2]?>.png">
							</div>
							<div class="center">
								<span class="list-item__title"><?php echo $link2[0]?></span><span class="list-item__subtitle">From <?php echo $link2[2]?></span>
							</div>
						</ons-list-item>
						</a>
						
						<a href="<?php echo $link3[1]?>">
						<ons-list-item>
							<div class="left">
								<img class="list-item__thumbnail" src="img/linkIcon/<?php echo $link3[2]?>.png">
							</div>
							<div class="center">
								<span class="list-item__title"><?php echo $link3[0]?></span><span class="list-item__subtitle">From <?php echo $link3[2]?></span>
							</div>
						</ons-list-item>
						</a>
					</ons-list>
					
				</div>
				
				<ons-button modifier="large--quiet" style="display: inline-block;" onclick="location.href='activity2.php'">Maybe Later</ons-button>
			</ons-card>
			
			<?php include "footer.php";?>
			
			
		</ons-page>
		
	</body>
	
</html>
