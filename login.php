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

<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->

<ons-page id="login-bg">

	<style type="text/css">
	#login-bg .page__background {
		background-image: url('img/login2.jpeg');
		height: auto;
		width: 100%;
		object-fit: cover;
		background-repeat: no-repeat;
	}

	#textclr{
		color: white;
	}

</style>

<ons-toolbar>
	<div class="left">
		<ons-toolbar-button>
			<ons-icon icon="md-menu"></ons-icon>
		</ons-toolbar-button>
	</div>
	<div class="center">In the Moment - Login</div>
	<div class="right">
		<ons-toolbar-button>Button</ons-toolbar-button>
	</div>
</ons-toolbar>

<form method="post" action="login.php">

	<div class="col-md-4">

	</div>
	<div class="col-md-4" style="text-align: center; margin-top: 20%;">
		<h1 id="textclr">Log In</h1>
		<br>
	    <p>
	    	<ons-input class="textInput form-control" id="name" modifier="underbar" placeholder="Username" float type="text" required></ons-input>
	    </p>

	    <p>
	    	<ons-input id="name" modifier="underbar" placeholder="Password" float type="text" required class="textInput form-control"></ons-input>
	    </p>


    <section style="padding: 8px;">
    	<ons-button modifier="quiet">
    		<input type="submit" name="login_btn"  style="color: white;">
    	</ons-button>
    	<br>
    	<br>
    	<small class="text-muted">Don't have an account?</small>
    	<br>
    	<br>
    	<ons-button>
    		<input style="display: inline-block; color: white;" type="button" value="Register" name="register_btn" onclick="location.href='register.php'">
    	</ons-button>
    	<br>
    	<br>
    </section>
    	

 <!--    	<div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true"></div> -->
    	
    	<p>
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

			$permissions = ['email']; // Optional permissions
			$loginUrl = $helper->getLoginUrl('http://localhost/In%20the%20Moment/fb-callback.php', $permissions);

			echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
			?>
		</p>

</div>
</div>

</form>

</ons-page>


</body>

</html>
