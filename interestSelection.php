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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

</head>

<body>

	<ons-page id="bg">
    <div style="text-align: center;">
      <h1 id="text-bold" style="text-align: center; margin-top: 10%;">Below are things we believed you will be interested in:</h1>
      <br>
    </div>
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
				<ons-button modifier="button--cta" style="display: inline-block; margin-right: auto; margin-left: auto;">
          <ons-input type="submit" value="Submit">
          </ons-input>
        </ons-button>
			</form>
		</div>


		<!----- EXAMPLE CODE FROM ONSEN UI PLAYGROUND FOR BOX MODEL --->

    <style type="text/css">
      ons-icon{
        color: white;
      }

    </style>

		<div style="margin: 20px auto 5px; text-align: center;">Interest Areas</div>

    <ons-row class="user_cover">
      <ons-col>
        <div class="user_thumbnail" style="background-color: #dd6218"><ons-icon icon="md-cocktail"></ons-icon></div>
        <div class="username" id="user_2_name">Drinks</div>
      </ons-col>
      <ons-col>
        <div class="user_thumbnail" style="background-color: #00a899"><ons-icon icon="md-brush"></ons-icon></div>
        <div class="username" id="user_2_name">Painting</div>
      </ons-col>
    </ons-row>

    
    <ons-row class="user_cover">
      <ons-col>
        <div class="user_thumbnail" style="background-color: #00a899">
          <ons-icon icon="md-cake"></ons-icon>
        </div>
        <div class="username" id="user_2_name">Baking</div>
      </ons-col>
      <ons-col>
        <div class="user_thumbnail" style="background-color: #94b052"><ons-icon icon="md-puzzle-piece"></ons-icon></div>
        <div class="username" id="username_4">Puzzles</div>
      </ons-col>
    </ons-row>
    

    <ons-row class="user_cover">
      <ons-col>
        <div class="user_thumbnail" style="background-color: #e3aa05"><ons-icon icon="md-headset"></ons-icon></div>
        <div class="username" id="user_2_name">Music</div>
      </ons-col>
      <ons-col>
        <div class="user_thumbnail" style="background-color: #dd6218"><ons-icon icon="md-flight-takeoff"></ons-icon></div>
        <div class="username" id="username_4">Travelling</div>
      </ons-col>
    </ons-row>
    

    <ons-row class="user_cover">
      <ons-col>
        <div class="user_thumbnail" style="background-color: #94b052"><ons-icon icon="fa-gamepad"></ons-icon></div>
        <div class="username" id="username_4">Kevin</div>
      </ons-col>
      <ons-col>
        <div class="user_thumbnail" style="background-color: #e3aa05"><ons-icon icon="fa-headphones"></ons-icon></div>
        <div class="username" id="user_2_name">Mark</div>
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
  <!----- /EXAMPLE CODE FROM ONSEN UI PLAYGROUND FOR BOX MODEL --->

</ons-page>

</body>

</html>