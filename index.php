<?php
$msg='';
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=$_POST['password'];
   $new_dir=$email."_".$password;
    if(is_dir($new_dir))
  {
    header("Location: wellcome.php");
  }
else
  {
  $msg="wrong email & password";
  }
}
?> 
<!DOCTYPE html>
<html>
<head>
	<title>log in assignment</title>
	 <link href = "share.css" rel = "stylesheet">
</head>
<body>
  <h2>Enter Email & Password</h2><br><br><br>
  <h3><?php echo $msg; ?></h3>
  <form class = "signin" role = "form" action = "" method="POST">
    <input type="email" name="email" required><br>
    <input type="password" name="password" required><br>
    <button type="submit" name="login" value="login">Log In</button>
  </form>
  <a href="create-acc.php"> create an account</a><br>
  <a href="pass.php"> forget password</a>

</body>
</html>

