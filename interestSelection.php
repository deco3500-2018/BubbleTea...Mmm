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
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<ons-page id="bg">
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


		<!----- EXAMPLE CODE FROM ONSEN UI PLAYGROUND FOR BOX MODEL --->

		<div style="margin: 20px auto 5px; text-align: center;">Interest Areas</div>

    <ons-row class="user_cover">
      <ons-col onclick="openHome()">
        <div class="user_thumbnail" style="background-color: #dd6218"><ons-icon icon="fa-beer"></ons-icon></div>
        <div class="username" id="user_2_name">David</div>
      </ons-col>
      <ons-col onclick="openHome()">
        <div class="user_thumbnail" style="background-color: #00a899"><ons-icon icon="fa-heart"></ons-icon></div>
        <div class="username" id="user_2_name">Marta</div>
      </ons-col>
    </ons-row>
    <ons-row class="user_cover">
      <ons-col onclick="openHome()">
        <div class="user_thumbnail" style="background-color: #e3aa05"><ons-icon icon="fa-headphones"></ons-icon></div>
        <div class="username" id="user_2_name">Mark</div>
      </ons-col>
      <ons-col onclick="openHome()">
        <div class="user_thumbnail" style="background-color: #94b052"><ons-icon icon="fa-gamepad"></ons-icon></div>
        <div class="username" id="username_4">Kevin</div>
      </ons-col>
    </ons-row>
        <ons-row class="user_cover">
      <ons-col onclick="openHome()">
        <div class="user_thumbnail" style="background-color: #e3aa05"><ons-icon icon="fa-headphones"></ons-icon></div>
        <div class="username" id="user_2_name">Mark</div>
      </ons-col>
      <ons-col onclick="openHome()">
        <div class="user_thumbnail" style="background-color: #94b052"><ons-icon icon="fa-gamepad"></ons-icon></div>
        <div class="username" id="username_4">Kevin</div>
      </ons-col>
    </ons-row>
        <ons-row class="user_cover">
      <ons-col onclick="openHome()">
        <div class="user_thumbnail" style="background-color: #e3aa05"><ons-icon icon="fa-headphones"></ons-icon></div>
        <div class="username" id="user_2_name">Mark</div>
      </ons-col>
      <ons-col onclick="openHome()">
        <div class="user_thumbnail" style="background-color: #94b052"><ons-icon icon="fa-gamepad"></ons-icon></div>
        <div class="username" id="username_4">Kevin</div>
      </ons-col>
    </ons-row>

    <style type="text/css">
      .user_cover {
        padding: 0px 40px;
        margin: 20px 0px;
      }

      .username {
        text-align: center;
        color: white;
        width: 100%;
        font-size: 12px;
        margin-top: 5px;
      }

      .user_thumbnail {
        width: 100px;
        height: 100px;
        display: table;
        text-align: center;
        margin: auto;
      }

      .user_thumbnail ons-icon {
        font-size: 70px;
        display: table-cell;
        vertical-align: middle;
      }
    </style>

</ons-page>

</body>

</html>