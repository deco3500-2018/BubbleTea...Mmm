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

	<ons-page>

		<ons-toolbar>
			<div class="left">
				<ons-toolbar-button icon="md-account-circle"></ons-toolbar-button>
			</div>

			<div class="center">Title</div>

			<div class="right">
				<ons-toolbar-button>-</ons-toolbar-button>
				<ons-toolbar-button>+</ons-toolbar-button>
			</div>
		</ons-toolbar>
		
		<form method="post" action="login.php">

    <div class="col-md-4">

    </div>
    <div class="col-md-4" style="padding-top: 50px; padding-bottom: 70px; padding-left: 70px; padding-right: 70px; font-family: 'Raleway';">
      <h1>Log In</h1>
      <br>
       <p style="float:left;">Email : </p>
       <p> 
        <input type="text" name="email" class="textInput form-control" required>
      </p>
    </p>
    <p>
     <p style="float:left;">Password : </p>
     <p><input type="password" name="password" class="textInput form-control" required></p>
   </p>
   <p>
     <br>
     <p><input type="submit" name="login_btn" class="btn btn-success"></p>
   </p>
   <p>

     <p><input style="float:left; display: inline-block;" type="button" value="Register" name="register_btn" class="btn btn-info" onclick="location.href='register.php'">
      <br>
      <br>
      <small class="text-muted">Don't have an account?</small>
    </p>
  </p>
</div>
</div>

</form>

<!--
		<p class="intro">
			This is a kitchen sink example that shows off the components of Onsen UI.<br><br>
		</p>

		<ons-card onclick="fn.pushPage({'id': 'pullHook.html', 'title': 'PullHook'})">
			<div class="title">Pull Hook</div>
			<div class="content">Simple "pull to refresh" functionality to update data.</div>
		</ons-card>
		<ons-card onclick="fn.pushPage({'id': 'dialogs.html', 'title': 'Dialogs'})">
			<div class="title">Dialogs</div>
			<div class="content">Components and utility methods to display many types of dialogs.</div>
		</ons-card>
		<ons-card onclick="fn.pushPage({'id': 'buttons.html', 'title': 'Buttons'})">
			<div class="title">Buttons</div>
			<div class="content">Different styles for buttons, floating action buttons and speed dials.</div>
		</ons-card>
		<ons-card onclick="fn.pushPage({'id': 'carousel.html', 'title': 'Carousel'})">
			<div class="title">Carousel</div>
			<div class="content">Customizable carousel that can be optionally fullscreen.</div>
		</ons-card>
		<ons-card onclick="fn.pushPage({'id': 'infiniteScroll.html', 'title': 'Infinite Scroll'})">
			<div class="title">Infinite Scroll</div>
			<div class="content">Two types of infinite lists: "Load More" and "Lazy Repeat".</div>
		</ons-card>
		<ons-card onclick="fn.pushPage({'id': 'progress.html', 'title': 'Progress'})">
			<div class="title">Progress</div>
			<div class="content">Linear progress, circular progress and spinners.</div>
		</ons-card>

		<style>
		.intro {
			text-align: center;
			padding: 0 20px;
			margin-top: 40px;
		}

		ons-card {
			cursor: pointer;
			color: #333;
		}

		.card__title,
		.card--material__title {
			font-size: 20px;
		}
	</style>


	<ons-bottom-toolbar>
		<ons-tabbar swipeable position="auto">
			<ons-tab page="tab1.html" label="Tab 1" icon="ion-home, material:md-home" badge="7" active>
			</ons-tab>
			<ons-tab page="tab2.html" label="Tab 2" icon="md-settings" active-icon="md-face">
			</ons-tab>
			<ons-tab page="tab3.html" label="Tab 3" icon="md-settings" active-icon="md-face">
			</ons-tab>
			<ons-tab page="tab2.html" label="Tab 4" icon="md-settings" active-icon="md-face">
			</ons-tab>
		</ons-tabbar>
	</ons-bottom-toolbar>


</ons-page>
	-->

</body>

</html>
