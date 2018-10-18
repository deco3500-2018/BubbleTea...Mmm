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
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<ons-page id="bg">

	<!-- Login Section --> 
	<form method="post" action="login.php" style="margin-top: 50%;">
		<div style="text-align: center;">
			<h1 id="text-bold" style="text-align: center; margin-top: 10%;">IN THE MOMENT</h1>
			<br>

			<ons-list style="max-width: 80%; margin: 10%;">
				<ons-list-item modifier="noborder">
					<ons-input placeholder="What's your name? "></ons-input>
				</ons-list-item>
			</ons-list>

			<section style="max-width: 80%; margin: 10%;">
				<ons-button modifier="button large--cta">
					<ons-input input-id="textclr" type="submit" name="login_btn" value="START">
				</ons-button>

			</section>
		</div>
	</form>

</ons-page>


</body>

</html>
