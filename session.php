<?php
	include "start.php";

	if (isset($_POST['callAddinterest'])) {
		$_SESSION["interest"] = $_POST['callAddinterest'];
		echo $_POST['callAddinterest'];
    }
	
	if (isset($_POST['callAddTime'])) {
		$_SESSION["time"] = $_POST['callAddTime'];
		echo $_POST['callAddTime'];
    }
	
	if (isset($_POST['callAddCategory'])) {
		$_SESSION["category"] = $_POST['callAddCategory'];
		echo $_POST['callAddCategory'];
    }
	
	if (isset($_POST['callAddName'])) {
		$_SESSION["username"] = $_POST['callAddName'];
		echo $_POST['callAddName'];
    }
	
	if (isset($_POST['callgetRecomLocation'])) {
		$sql = "SELECT * FROM recommendationdetails WHERE recomID = ".$_POST['callgetRecomLocation'];
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_assoc($result);
		
		echo json_encode($row);
    }

?>