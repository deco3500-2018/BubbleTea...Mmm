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
	<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/interestcss.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
</head>

<body>
	<ons-page id="bg">
	<?php
				include "header.php";		
			?>
			
	<div style="text-align: center;">
	<h1 style="margin: 2%;" class="title" id="textclr">What do you feel like doing today?</h1>
      <br>
    </div>
	<!-- dynamically create the checkbox base on interest retrieved from the database-->
				<?php
				
					if (isset($_POST['time'])){
						$_SESSION['time'] = $_POST['time'];

						$sql="SELECT * FROM category";

						$rs = mysqli_query($db,$sql);
						$count=0;
						while ($row = mysqli_fetch_assoc($rs)) {
							if ($count%2 ==0){
								echo '<ons-row class="user_cover">';
							}
							echo '  <ons-col class="interest" id = "'.$row['categID'].'">
							<div class="user_thumbnail" style="background-color: #dd6218"><ons-icon icon="'.$row['image'].'"></ons-icon></div>
							<div class="username" id="user_2_name">'.$row['name'].'</div>
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
				<ons-button modifier="button--cta" onclick="submitInterest()" style="display: inline-block; margin-right: auto; margin-left: auto;">
					<ons-input input-id="textclr"  name="login_btn" value="Submit">
				</ons-button>
				</ons-row>
				
			<form id="interestForm" name="interestForm" action="activitySelection.php" method="post">
				<input type="hidden" name="interest" id="hiddenInterest">
			</form>
			
			<?php include "footer.php";?>
			
			</ons-page>
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
			integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
			integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
	</script>

	<script type="text/javascript" src="js/eventHandling.js?version=2"></script>



</body>

</html>