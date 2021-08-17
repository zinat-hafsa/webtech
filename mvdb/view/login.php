<?php
include('../control/logincheck.php');

/*if(isset($_SESSION['username']) ){
  if($type=="user")
  {
   header("location: user_home.php");
  }
  else if($type=="admin")
  {
   header("location: adminhome.php");
  }
  else
  {
   header("location: viewerhome.php");
  }

}*/ 
?>
<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="../js/myjs.js"></script>
</head>
<head>
<style>
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('background/image.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>
<body>



<h1>Welcome To Movie Database</h1>
<h2>LOGIN</h2>
<form name="myForm" action=""  method="post">
    <p><input id="username" type="text" name="username" placeholder="Enter your username" ></p>
    <p><input id="password" type="password" name="password" placeholder="Enter your password" ></p>
    <p><label id="usernameErr"></label></p>
    <p><label id="passwordErr"></label></p>
    
</tr>

    <p><input id="login"  name="login" type="submit" value="LOGIN"></p>
    <p><label id="typeErr"></label></p>

</form>
<br>
<h3>Don't you have an account?</h3> 
<p><a href="RegistrationForm.php">REGISTRATION</a></p
>



<br>
<?php echo $error; ?>

</body>
</html>
