<?php 

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body style="background-image:url(images/log.jpg);background-size:cover;">
	<form action="login.php" method="POST">
		<div style="margin-top: 60px;"></div>
		<table width="400" height="300" align="center" border="20" style="border-radius: 20px; color:white; ">
			<tr>
				<td align="center" colspan="5" bgcolor="gray"><h1>Admin Login</h1></td>
			</tr>
			<tr>
				<td align="right"><b>User Name :</b></td>
		<td><input type="text" style="border-radius: 50px; padding-left: 10px;" placeholder="Enter User Name" name="user_name"></td>
			</tr>
			<tr>
		<td align="right"><b>User Password :</b></td>
		<td><input type="password" style="border-radius: 50px; padding-left: 10px;" placeholder="Enter User Password"  name="user_pass"></td>
			</tr>
			<tr>
				<td align="center" colspan="5" bgcolor="gray">
					<input type="submit" name="submit" style="width:100px; height: 30px; border-radius: 10px; color:white; background-color: blue ; border:2px solid blue; margin-top:10px;" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 

if(isset($_POST['submit']))
{
	include "dbConnect/connect.php";
	$user_name = $_POST['user_name'];
	$user_pass = $_POST['user_pass'];
	$login_query = "SELECT * from tbl_admin WHERE name='$user_name' AND  pass='$user_pass' ";
	$run = mysqli_query($conn,$login_query);
	if(mysqli_num_rows($run)==1)
	{
		$_SESSION['user_name'] = $user_name;
		header("location:index.php");
	}
	else
	{
		echo "<script>alert('Login Failed ')</script>";
	}
}

?>