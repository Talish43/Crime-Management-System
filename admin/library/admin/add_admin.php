<main>
	<table>
		<form enctype="multipart/form-data" action="" method="POST">
		<h2>Add Admin</h2>
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add Admin"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
		</form>
	</table>
</main>
<?php 
include("dbConnect/connect.php");
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$password = $_POST['password'];
    $query =        "INSERT into tbl_admin 
                                (admin_name,admin_pwd) 
                         VALUES ('$name','$password')";
    if(mysqli_query($conn,$query))
    	echo "<script>alert('Admin Is Inserted')</script>";
}
?>