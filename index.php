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

		<div style="text-align: center; margin: auto;" id="textclr">

			<h1 class="intro">
				Welcome back

				<?php

				echo '' . $name; 
				?>
			</p>
		</div>

		<div>
			<img src="img/tired.png" width="50%" style="margin:auto; display: block; "/>
		</div>

		<style type="text/css">
		.camera-view {
			width: 100%;
			height: 30%;
			text-align: center;
			background-color: #cacaca;
			display: table;
		}

		.camera-icon {
		vertical-align: middle !important;
			font-size: 100px;
			opacity: 1;
			display: table-cell;
		}

		.camera-button {
			width: 100%;
			height: 40%;
			text-align: center;
			display: table;
		}
	</style>


	<ons-card>
		<!-- Graph section --> 
		<section>
			<canvas id="myChart" width="80" height="50"></canvas>
			<script>
				function createGraph(time){
				var ctx = document.getElementById("myChart").getContext('2d');
				var time = time;
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"],
						datasets: [{
							label: 'You',
							data: [0, 0, time , 0, 0, 0, 0, 0, 0, 0],
							backgroundColor: [
							'rgba(106, 190, 226, 0.8)',
							'rgba(106, 190, 226, 0.8)',
							'rgba(106, 190, 226, 0.8)',
							'rgba(106, 190, 226, 0.8)',
							'rgba(106, 190, 226, 0.8)',
							'rgba(106, 190, 226, 0.8)',
							'rgba(106, 190, 226, 0.8)',
							'rgba(106, 190, 226, 0.8)',
							'rgba(106, 190, 226, 0.8)',
							],
							borderColor: [
							'rgba(106, 190, 226, 0.8)'
							],
							borderWidth: 1
						}, 
						{
							label: 'Other people',
							data: [3, 3, 3, 4, 5,5, 5, 3, 6, 7],
							backgroundColor: [
							'rgba(247, 182, 106, 0.8)',
							'rgba(247, 182, 106, 0.8)',
							'rgba(247, 182, 106, 0.8)',
							'rgba(247, 182, 106, 0.8)',
							'rgba(247, 182, 106, 0.8)',
							'rgba(247, 182, 106, 0.8)',
							'rgba(247, 182, 106, 0.8)',
							'rgba(247, 182, 106, 0.8)',
							'rgba(247, 182, 106, 0.8)',
							],
							borderColor: [
							'rgba(247, 182, 106, 0.8)'
							],
							borderWidth: 1
						}]
					},
					options: {
						responsive: true,
						title: {
							display: true,
							text: 'Hours of free time spent'
						},
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero:true,
									min: 0,
									max: 12,
								}
							}]
						}
					}
				});
				}
			</script>
			
		</section>
	</ons-card>
	
	<template id="dialog.html">
  <ons-dialog id="my-dialog">
    <div style="text-align: center; padding: 10px;">
      <p>
        Congratulation! You have increased your free time by <?php echo $_SESSION['time']?> minutes!
      </p>

      <p>
        <ons-button onclick="hideDialog('my-dialog')">Close</ons-button>
      </p>
    </div>
  </ons-dialog>
</template>

	<?php include "footer.php";?>
	
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
		</script>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
		</script>
		
		<script type="text/javascript" src="js/eventHandling.js"></script>
		
		<?php if(!isset($_SESSION['totalTime'])){
	$_SESSION['totalTime'] = 0;
} else if (isset($_SESSION["time"])){
	$_SESSION['totalTime'] = $_SESSION['totalTime'] + round($_SESSION['time']/60); 
	unset ($_SESSION["time"]);
	echo '<script type="text/javascript">',
     'showTemplateDialog();',
     '</script>'
;
}
echo '<script>createGraph('.$_SESSION['totalTime'].')</script>'
?>

</ons-page>

</body>

</html>
