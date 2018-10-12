<?php
include "start.php";



if(isset($_POST['login_btn']))
{
	
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
   // $userID=mysqli_real_escape_string($db,$_GET['id']);

    //$hash=md5($password); //Remember we hashed password before storing last time
	$hash = password_hash($password, PASSWORD_DEFAULT);


	$sql="SELECT * FROM users WHERE email='$email' and password='$password'";
	$result=mysqli_query($db,$sql);
	



	if (password_verify($password, $hash))
	{
		$_SESSION['correctPassword'] =true;
			//echo "correct password!<br>";

	}
	else {
		echo 'Invalid password.';
	}



	if( $_SESSION['correctPassword'] =true)  
  //  if(password_verify($password, $hash))
	{
		//echo "correct password!<br>";
		
		$email = mysqli_fetch_assoc($result);
       // $_SESSION['message']="You are now Loggged In ";
    //    $_SESSION['username']=$username;
      //  $_SESSION['user'] = $user;
     //   $_SESSION['loggedin']=true;
       // $_SESSION["userID"] = $resultID;

		header("location:index.php");


        //echo $_SESSION["userID"];
	}
	else
	{
		$_SESSION['message']="Username and Password combination incorrect";
	}
}



if(isset($_POST['register_btn']))
{
	header("location:register.php");
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>In the Moment</title>
	
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
	<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
	<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
</head>

<body>

	<ons-page id="login-bg">

		<style type="text/css">
		#login-bg .page__background {
			background-image: url('img/grad.png');
			object-fit: cover;
			background-repeat: no-repeat;
		}

		#textclr{
			color: white;
		}

	</style>

	<!-- Navbar -->
	<ons-toolbar class="toolbar toolbar--transparent">
		<div class="toolbar__right">
			<span class="toolbar-button">
				<i class="ion-navicon" style="font-size:32px; vertical-align:-6px; margin-right: 10px;" id="textclr"></i>
			</span>
		</div>

		<div class="toolbar__center" id="textclr" style="text-transform: bold;">
			LOG IN
		</div>

		<!-- <div class="toolbar__right">
			<span class="toolbar-button" id="textclr">Label</span>
		</div> -->
	</ons-toolbar>

	<!-- Login Section --> 
	<form method="post" action="login.php">
		<div style="text-align: center;">
			<h1 id="textclr" style="text-align: center; margin-top: 10%;">Log In</h1>
			<br>
			<p>
				<ons-input input-id="textclr" class="textInput form-control" id="name" modifier="underbar" placeholder="Username" float type="text" required></ons-input>
			</p>

			<p>
				<ons-input input-id="textclr" id="password" modifier="underbar" placeholder="Password" float type="text" required class="textInput form-control"></ons-input>
			</p>


			<section style="padding: 8px;">
				<ons-button class="button button--cta">
					<ons-input input-id="textclr" type="submit" name="login_btn" value="Login">
					</ons-button>
					<br><br>
					<small class="text-muted">Don't have an account?</small>
					<br><br>
					<ons-button class="button button--cta">
						<ons-input input-id="textclr" style="display: inline-block; color: white;" type="button" value="Register" name="register_btn" onclick="location.href='register.php'">
						</ons-button>
						<br>
						<br>
					</section>


					<p>OR<br><br>

						<?php
						// Facebook API
						require_once( 'vendor/autoload.php' );
						// Initialize the Facebook PHP SDK v5.
						$fb = new Facebook\Facebook([
							'app_id'                => '736882723323708',
							'app_secret'            => '67e1b3111e10c972cab13cc1564c95fb',
							'default_graph_version' => 'v2.10',
						]);

						$helper = $fb->getRedirectLoginHelper();

			$permissions = ['public_profile','email','user_location','user_likes']; // Optional permissions
			$loginUrl = $helper->getLoginUrl('https://s4436053-inthemoment.uqcloud.net/fb-callback.php', $permissions);


			echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
			?>
		</p>

	</div>
</div>

</form>

</ons-page>


</body>

</html>
