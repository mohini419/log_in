<?php
if(isset($_POST['submit'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $new_dir=$email."_".$password;
   mkdir($new_dir);
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>log in assignment</title>
	 <link href = "share.css" rel = "stylesheet">
   <script> 
      function valid()
      {
        var Email_Id=document.getElementById('var1').value;
        var password=document.getElementById('var2').value;
        if (Email_Id==""&&password=="") 
        {
          alert("Please Fill Email & Password");
          return false;

        }
       if (Email_Id==""&&password=="")
       {
          alert("Please Fill Email ");
          return false;
          
        }
       if (password=="") 
       {
          alert("Please Fill  Password");
          return false;
          
        }
     }

   </script>
</head>
<body>
  <h2>Enter Email & Password</h2><br><br><br>
  <form class = "signin" role = "form" action = "" method="POST" onsubmit="valid()">
    <input type="email" name="email" id="var1" ><br>
    <input type="Password" name="password" id="var2"><br>
    <button type="submit" name="submit">submit</button>
  </form>


</body>
</html>

