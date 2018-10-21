<?php
	
	session_start();
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

?>