<?php 
include "dbConnect/connect.php";
$edit_id = $_REQUEST['hdId'];
	$query       = "SELECT * FROM tbl_admin WHERE admin_id = '$edit_id'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
			$name  = $row["admin_name"];
			$pass  = $row["admin_pwd"];
	}
?>
<main>
	<table>
		<form enctype="multipart/form-data" action="" method="POST">
		<h2>Update Admin</h2>
		<tr>
			<td>Name :</td>
			<td><input type="text" name="update_name" value="<?php echo $name; ?>"></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="text" name="update_password" value="<?php echo $pass; ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="Update Admin"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
		</form>
	</table>
</main>
<?php 
include("dbConnect/connect.php");
if(isset($_POST['update']))
{
	$update_name = $_POST['update_name'];
	$update_password = $_POST['update_password'];
    $query =        "UPDATE tbl_admin SET  
                                admin_name = '$update_name',
                                admin_pwd  = '$update_password' 
                            WHERE admin_id='$edit_id'";
    if(mysqli_query($conn,$query))
    	echo "<script>alert('Admin Is Updated')</script>";
}
?>