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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
</head>

<body>

<h1>How much free time do you have now?</h1>
<div>
	<!-- dynamically create the checkbox base on interest retrieved from the database-->
	
	<form name="interestForm" action="categorySelection.php" method="post">
		<input type="text" name="time">
		  <input type="submit" value="Submit">
	</form>
</div>

</body>

</html>