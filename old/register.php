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

        #txtbold{
            color: white;
            font-weight: bold;
        }

    </style>


    <!-- Navbar -->
    <ons-toolbar class="toolbar toolbar--transparent">
        <div class="toolbar__right">
            <span class="toolbar-button">
                <i class="ion-navicon" style="font-size:32px; vertical-align:-6px; margin-right: 10px;" id="textclr"></i>
            </span>
        </div>

    </ons-toolbar>

    <!-- start of input form -->

    <form method="post" action="register.php" id="frm_register" style="margin: auto;">
      <div id="register_message" style="text-align: center;">
          <h1 id="textclr" style="text-align: center; margin-top: 10%;">Register</h1>
      </div>
      <table style="text-align: left; margin:auto;" id="txtbold">
       <tr>
          <td>Name </td>
          <td>
           <!-- <input type="text" name="Name" class="textInput form-control" id="txt_username" placeholder="John" required style="margin-left: 10px;"> -->
           <ons-input input-id="textclr" modifier="underbar" placeholder="Username" type="text" name="Name" class="textInput form-control" id="txt_username" required></ons-input>
       </td>
   </tr>

   <tr>
     <td>Email </td>
     <td style="text-align: left">
        <ons-input input-id="textclr" modifier="underbar" type="email" name="email" class="textInput form-control" required="required" placeholder="john123@gmail.com" id="txt_email" required></ons-input>
    </td>
    <div id="uname_response" class="response"></div>
</tr>

<tr>
 <td>Password </td>
 <td>
    <!-- <input id="txt_password" type="password" name="password" class="textInput form-control" required="required" style="margin-left: 10px;"> -->
    <ons-input input-id="textclr" modifier="underbar" type="password" name="password" class="textInput form-control" required="required" id="txt_password" required></ons-input>
</td>

</tr>
<tr>
 <td>Confirm Password </td>
 <td>
    <!-- <input id="txt_repassword" type="password" name="password2" class="textInput form-control" required style="margin-left: 10px;"> -->
    <ons-input input-id="textclr" modifier="underbar" type="password" name="password2" class="textInput form-control" required="required" id="txt_repassword" required></ons-input>
</td>
</tr>


</table>

<br><br>
<div style= "text-align:center; margin:auto;">
  <input type="submit" id="btn_submit" style="display:none;"/>      
  <ons-button type="button" class="Register button button--cta" id="btn_register">Register</ons-button>
  <br>
  <br>
  <p id="textclr">Already a member? <a href="login.php"> Login</a></p>
</div>
</form>

<!-- end of input form -->

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
