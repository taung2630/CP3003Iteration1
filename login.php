<?php
session_start();
error_reporting(0);
if ($_SESSION['login']=="2"){
	$username = $_SESSION["username"];
	echo "<center><h3>Welcome </h3></center>";
	echo"<center><h3>".$username."</h3></center>"; 
	print "\r\n".'<center><a href="adminUI.php">View AdminUI</a>	 	</center><br />';
	print "\r\n".'<center><a href="logout.php">Logout</a></center>';

}
else if ($_SESSION['login']=="1"){
	$username = $_SESSION["username"];
	echo "<center><h3>Welcome </h3></center>";
	echo"<center><h3>".$username."</h3></center>"; 
	print "\r\n".'<center><a href="usersecure.php">View account</a>	 	</center><br />';
	print "\r\n".'<center><a href="logout.php">Logout</a></center>';
}

else{
echo '<p>
<form action="secure.php" name="form1" method="post" onsubmit="return validateForm();">
<label>Username:
<input type="text" name="username"/>
</label>

<label>Password: <input type="password" name="password" />
</label>
</p>
<p><center>
<input type="submit" name="Submit" value="Login"/>
<input type="reset" name="Reset" value="Reset"/>
</center>
</p></form>';

echo "<p>Don't have an account?</p> 
<p> <a href='register.php'> <strong>Create an account here..</strong></a></p>";  
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Login Page</title>

</head>

<body>

<script type="text/javascript">


function validateForm()

{
var x=document.forms["form1"]["username"].value;
var y=document.forms["form1"]["password"].value;

if (x==null || x=="")
  {
  alert("Username must not be blank");
  return false;
  }
else if (y==null || y=="")
  {
  alert("Password must not be blank");
  return false;
  
  }
 
}
  </script>
 




</body>
</html>
