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
		<h1 class="title" id="textclr">How much free time do you have now?</h1>
		<div>
			<!-- dynamically create the checkbox base on interest retrieved from the database-->

			<form name="interestForm" action="categorySelection.php" method="post">
				<input type="text" name="time">
				<input type="submit" value="Submit">
			</form>
		</div>
	</ons-page>

</body>

</html>