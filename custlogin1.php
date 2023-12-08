<?php
session_start();
?>
<html>
<head>
<title>login</title>
</head>
<body style='background:gray;'>
<center>
<h1 style='background:orange;colors:whitesmoke;'>employee database management system
</h1>
<form name="form" method="POST" action="custlogin1.php">
<table border="1" cellpadding="4" cellspacing="5" style='background:slateblue;color:white'>
<tr><td>user name:</td>
<td><input class="form-control" placeholder="user name" name="email" type="text" autofocus></td></tr>
<tr><td>password:</td>
<td><input class="form-control" placeholder="password" name="pass" type="password" value=""></td></tr>
<tr><td><colspan="2" align="right"><input type="submit" value="login" name="login"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','','anita');
if(isset($_POST['login']))
{
	$user_email=$_POST['email'];
		$user_pass=$_POST['pass'];
		$check_user="select * from users where user='$user_email' AND passw='$user_pass'";
		$run=mysqli_query($con,$check_user);
		if(mysqli_num_rows($run))
		{
		echo"<script>window.open('custwc1.php','_self')</script>";
		$_SESSION['email']=$user_email;
}
else
{
	echo"<script>alert('email or password is incorrect!')</script>";
}

}
?>
<a href="reguser.php" style="color:white">register here to signup!</a>
<h1 style='background:greenyellow'>DATA BASE MANAGEMENT</h1>
