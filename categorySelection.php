<?php
include "start.php";
include "error.php";

$_SESSION['time'] = $_POST['time'];

?>

<!DOCTYPE html>
<html>

<head>
	<title>In the Moment</title>
	
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
	<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<ons-page>
		<h1>What do you feel like doing today?</h1>

		<div>
			<form name="interestForm" action="categorySelection.php" method="post">
				<input type="checkbox" name="category[]" value="food">Restaurant<br>
				<input type="checkbox" name="category[]" value="food">Events<br>
				<!--More categories...-->
				<input type="submit" value="Submit">
			</form>
		</div>
	</ons-page>



</body>

</html>