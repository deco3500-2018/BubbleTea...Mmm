<?php
	include "start.php";
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title>In the Moment</title>
		<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
		<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css?version=4">
	</head>
	
	<body>
	
		<ons-page id="bg">
			<div class="background"></div>
			
			<?php
				// select specific recommendation details based on id within URL
				$pageName = "Recommended Activity";
				include "header.php";
				$sql = "SELECT * FROM recommendationdetails WHERE recomId = ".$_GET["id"];
				$result = mysqli_query($db,$sql);
				$row = mysqli_fetch_assoc($result);
				
				$link1 = explode('|', $row["link1"]);
				$link2 = explode('|', $row["link2"]);
				$link3 = explode('|', $row["link3"]);
			?>
			
			<ons-card>
				<!-- Title and header image -->
				<img src="<?php echo $row["image"];?>" alt="Onsen UI" style="width: 100%">
				<div class="title" style="text-align: center;">
					<?php echo $row["title"];?>
				</div>
				<br>
				<div class="content">
				
				<!-- Link lists -->
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
				
				<ons-button modifier="large--quiet" style="display: inline-block;" onclick="showTemplateDialog()">Maybe Later</ons-button>
			</ons-card>
			
			<!-- Hidden dialog that appears when Maybe Later is clicked -->
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
		
		<!-- Include scripts at the end for faster reload -->
		<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
		<script src="https://d3js.org/d3.v5.min.js"></script>
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
								