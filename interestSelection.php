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

<h1>Below are things we believed you will be interested in:</h1>
<div>
	<!-- dynamically create the checkbox base on interest retrieved from the database-->
	<form name="interestForm" action="index.php" method="post">
		<?php
			// to be retrieved from the database
			$_SESSION['user'] = 1;
			// to set in the login
			$_SESSION['username'] = 'name';
			
			// user must choose a persona first
			if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
				$sql="SELECT interest FROM interest WHERE userID = $user";
				
				$rs = mysqli_query($db,$sql);
				
				while ($row = mysqli_fetch_assoc($rs)) {
					echo ' <input type="checkbox" name="interest[]" value="'.$row['interest'].'">'.$row['interest'].'<br>';
				}
			} else if (!isset($_SESSION['fb_access_token'])){
				header("Location:login.php");
			}
		
		?>
		  <input type="submit" value="Submit">
	</form>
</div>

</body>

</html>