<?php
include "start.php";

if(isset($_POST['register_btn']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);

    $check="SELECT * FROM users WHERE email = '$_POST[email]'";
    $rs = mysqli_query($db,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

    if($data[0] > 1) {
        echo "User Already Exists";
    }

    else if($password==$password2)
     {
		
		//Create User
        
             $hash = password_hash($password, PASSWORD_DEFAULT);

           // $password=md5($password); //hash password before storing for security purposes
            
            $sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$hash')";
            mysqli_query($db,$sql);

            $sql="SELECT * FROM users WHERE username='$username' AND password='$hash'";
            $result=mysqli_query($db,$sql);
            $user = mysqli_fetch_assoc($result);

           
            $_SESSION['username']=$username;
            $_SESSION['user'] = $user;
            $_SESSION['loggedin']=true;
            header("location:index.php");  
    }
    else
    {
      $_SESSION['message']="The two password do not match";
     }

}
     if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }
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
		
		<!-- start of input form -->
		
		<form method="post" action="register.php" id="frm_register" style="margin: auto;">
  <div id="register_message" style="text-align: center;"></div>
  <table style="text-align: center; margin:auto;">
     <tr>
      <td>Name </td>
       <td>
         <input type="text" name="Name" class="textInput form-control" id="txt_username" placeholder="John" required style="margin-left: 10px;">
       </td>
     </tr>

     <tr style="margin: 10px;">
       <td>Email </td>
       <td style="text-align: left"><input id="txt_email" type="email" name="email" class="textInput form-control" required="required" placeholder="john123@gmail.com" style="margin-left: 10px;"></td>
	   <div id="uname_response" class="response"></div>
     </tr>

     <tr style="margin-top: 10px;">
       <td>Password </td>
       <td><input id="txt_password" type="password" name="password" class="textInput form-control" required="required" style="margin-left: 10px;"></td>

     </tr>
     <tr>
       <td>Confirm Password </td>
       <td><input id="txt_repassword" type="password" name="password2" class="textInput form-control" required style="margin-left: 10px;"></td>
     </tr>
     <tr>
       <td></td>
       <td>
        <br>
        <div style= "text-align:center">
          <input type="submit" id="btn_submit" style="display:none;"/>
          <button type="button" class="Register" id="btn_register" style="border-radius:14px; color:white; font-size:15px; background-color:#008CBA; padding:10px; text-align:center; width: 200px;">Register</button>
          <br>
          <br>
          <p>Already a member? <a href="login.php"> Login</a></p>
        </td>
      </div>

    </tr>


  </table>
</form>
		
		<!-- end of input form -->

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
		

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($){
        $("#btn_register").on("click", function(){
            if (!$('form')[0].checkValidity()) {
                $('#btn_submit').click();
                return false;
            }

            var username = $("#txt_username").val();
            var email = $("#txt_email").val();
            var password = $("#txt_password").val();
            var repassword = $("#txt_repassword").val();

            $.ajax({
                method: 'post',
                url: 'process-ajax.php',
                data: {
                    action: 'register',
                    username: username,
                    email: email,
                    password: password,
                    repassword: repassword
                },
                beforeSend: function(){
                    $("#register_message").html('')
                    $("#btn_register").attr('disabled','true')
                    $("#btn_register").html('Processing...')
                },
                complete: function() {
                    $("#btn_register").removeAttr('disabled')
                    $("#btn_register").html('Register')
                },
                success: function(response) {
                    if('success' in response){
                        //alert("User registered successfully.")
                        location.reload()
                        window.location.href="index.php"
                    }else if('error' in response){
                        $("#register_message").html(response['error'])
                    }
                },
                error: function() {
                   // alert("Unable to register");
					 window.location.href="index.php"
					
                }
            })
        });

        $("#txt_email").on('blur', function(){
            var email = $("#txt_email").val();

            $("#uname_response").html('');
            $.ajax({
                url: 'process-ajax.php',
                type: 'post',
                data: {
                    action: 'check_email',
                    email: email
                },
                success: function(response){
                    if('error' in response){
                        $("#uname_response").html("<span class='not-exists'>* "+response['error']+".</span>");
                    }
                }
            });
        });
    })
</script>

</html>
